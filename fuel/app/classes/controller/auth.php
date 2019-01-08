<?php
//declare(strict_types=1);

require VENDORPATH . 'autoload.php';

use Firehed\U2F\Server;
use Firehed\U2F\RegisterResponse;
use Firehed\U2F\SignResponse;
use Firehed\Security\Secret;

class Controller_Auth extends \Controller_Base
{
    public $server;
    public $current_user;

    public function before()
    {
        parent::before();

        //@Skip authentication checking
        $stringURL = explode('/', Uri::string());
        if (count($stringURL) > 1 && $stringURL[0] == 'auth' && ($stringURL[1] == 'signin' || $stringURL[1] == 'signup' || $stringURL[1] == 'signout')) {

        } else {

            //@Authenticated User
            if (\Session::get('user') || \Cookie::get('user')) {

                $this->current_user = \Session::get('user');
                if (!empty($this->current_user)) $this->current_user = \Model_User::getUserObjectsById($this->current_user->id);
                \View::set_global('current_user', $this->current_user, false);
            } else {

                \Response::redirect(\Uri::create('auth/signin'));
                exit;
            }
        }

        $this->server = (new Server())->disableCAVerification()->setAppId('https://virtue.tonylabs.com');


        return;
    }

    public function action_index()
    {
        \Response::redirect(\Uri::create('auth/signup'));
        exit;
    }

    public function get_signup()
    {
        $this->template->title = __('auth.signup.title');
        $this->template->content = \View::forge('auth/signup');

        $objCaptcha = new Mobicms\Captcha\Captcha;
        $code = $objCaptcha->generateCode();
        \Session::set('captcha', $code);
        $this->template->content->code = $code;
        $this->template->content->captcha = $objCaptcha;

        //\Messages::success(__('auth.signup.messages.privacy'));
    }
    public function post_signup()
    {
        $getEmail = \Input::post('email');
        $getPassword = \Input::post('password');
        $getConfirm = \Input::post('confirm');
        $getCaptcha = \Input::post('captcha');
        $sessionCaptcha = \Session::get('captcha');

        if ($getCaptcha !== null && $sessionCaptcha !== null) {
            if (strtolower($getCaptcha) != strtolower($sessionCaptcha)) {
                \Messages::warning(__('auth.signup.messages.invalid_captcha'));
                \Response::redirect(\Uri::create('auth/signup'));
                exit;
            }
        }

        if ($getPassword != $getConfirm)
        {
            \Messages::warning(__('auth.signup.messages.password_not_match'));
            \Response::redirect(\Uri::create('auth/signup'));
            exit;
        }

        if ($getPassword) $getPassword = password_hash($getPassword, \PASSWORD_DEFAULT);

        $this->template->title = 'Two-Factor Authentication';
        $this->template->content = \View::forge('auth/waiting_for_key_touch');
        $this->template->content->type = 'signup';

        $objUser = \Model_User::query()->where('email', '=', $getEmail)->get_one();

        if (!$objUser)
        {
            $objUser = \Model_User::forge();
            $objUser->username = preg_replace('/@.*?$/', '', $getEmail);
            $objUser->email = $getEmail;
            $objUser->password = $getPassword;
            $objUser->save();

            \Session::set('user', $objUser);
        }
        else
        {
            \Messages::warning('Email has been taken already, please try to sign in.');
            \Response::redirect(\Uri::create('auth/signin'));
            exit;
        }
        $this->template->content->user = $objUser;
    }
    public function get_ajax_signup()
    {
        $objRequest = $this->server->generateRegisterRequest();
        \Session::set('request', $objRequest);
        $arrayResponse = [
            'request' => $objRequest,
            'signatures' => ''
        ];
        echo json_encode($arrayResponse);
        exit;
    }
    public function post_ajax_signup()
    {
        $objUser = \Session::get('user');
        $getRegistrationData = \Input::post('registrationData');
        $objRequest = \Session::get('request');
        $this->server->setRegisterRequest($objRequest);

        try {

            $response = RegisterResponse::fromJson($getRegistrationData ?? '');
            $registration = $this->server->register($response);

            $keyHandle = $registration->getKeyHandleWeb();

            $objUserKey = \Model_User_Keys::query()->where('user_id', '=', $objUser->id)->get_one();

            if (!$objUserKey)
            {
                $objUserKey = \Model_User_Keys::forge();
                $objUserKey->user_id = $objUser->id;
                $objUserKey->handle = $keyHandle;
                $objUserKey->registration = serialize(array('registrations' => $registration));
                $objUserKey->save();
            }

            $arrayResponse = array();
            $arrayResponse['msg'] = 'AuthKey has been registered successfully!';
            $arrayResponse['data'] = '';
            echo json_encode($arrayResponse);

        } catch (SecurityException $e) {
            header('HTTP/1.1 403 Unauthorized');
            echo json_encode($e->getMessage());
        } catch (InvalidDataException $e) {
            header('HTTP/1.1 400 Bad Request');
            echo json_encode($e->getMessage());
        } catch (\Throwable $e) {
            header('HTTP/1.1 500 Internal Server Error');
            echo json_encode($e->getMessage());
        }
        exit;
    }
    public function get_signin()
    {
        $this->template->title = 'Sign In';
        $this->template->content = \View::forge('auth/signin');
    }
    public function post_signin()
    {
        $getEmail = \Input::post('email');
        $getPassword = \Input::post('password');
        $this->template->title = 'Two-Factor Authentication';
        $this->template->content = \View::forge('auth/waiting_for_key_touch');
        $this->template->content->type = 'signin';

        $objUser = \Model_User::query()->where('email', '=', $getEmail)->get_one();
        if (!$objUser)
        {
            \Messages::warning(__('auth.signin.messages.account_not_found').'<a href="'.\Uri::create('auth/signup').'">'.__('auth.signup.title').'</a>.');
            \Response::redirect(\Uri::create('auth/signin'));
            exit;
        }
        if ($objUser && password_verify($getPassword,$objUser->password))
        {
            \Session::set('user', $objUser);
            $this->template->content->user = $objUser;
        }
        else
        {
            \Messages::warning('Password is incorrect, please try again!');
            \Response::redirect(\Uri::create('auth/signin'));
            exit;
        }
    }

    public function get_ajax_signin()
    {
        $objUser = \Session::get('user');
        $objUserKeys = \Model_User_Keys::query()->where('user_id', '=', $objUser->id)->get_one();
        $arrayRegistrations = unserialize($objUserKeys->registration);
        $arrayRequests = $this->server->generateSignRequests($arrayRegistrations);
        $objRequest = $arrayRequests[0];
        \Session::set('request', $objRequest);
        echo json_encode(array_values($arrayRequests));
        exit;
    }

    public function post_ajax_signin()
    {
        $arrayResponse = array();
        $getRegistrationData = \Input::post('registrationData');
        $objUser = \Session::get('user');
        $arrayRequests[] = \Session::get('request');
        $objUserKeys = \Model_User_Keys::query()->where('user_id', '=', $objUser->id)->get_one();
        if ($arrayRegistrations = unserialize($objUserKeys->registration))
        {
            $this->server->setRegistrations($arrayRegistrations)->setSignRequests($arrayRequests);
        }
        try {

            $sign_response = SignResponse::fromJson($getRegistrationData);
            $registration = $this->server->authenticate($sign_response);
            $keyHandle = $registration->getKeyHandleWeb();

            $objUserKey = \Model_User_Keys::query()->where('user_id', '=', $objUser->id)->where('handle', '=', $keyHandle)->get_one();

            if ($objUserKey)
            {
                $objUserKey->registration = serialize(array('registrations' => $registration));
                $objUserKey->save();
            }


            $arrayResponse['msg'] = 'Your key has been authenticated successfully!';
            $arrayResponse['data'] = '';

            echo json_encode($arrayResponse);

        } catch (SecurityException $e) {
            header('HTTP/1.1 403 Unauthorized');
            echo json_encode($e->getMessage());
        } catch (InvalidDataException $e) {
            header('HTTP/1.1 400 Bad Request');
            echo json_encode($e->getMessage());
        } catch (\Throwable $e) {
            //header('HTTP/1.1 500 Internal Server Error');
            $arrayResponse['msg'] = $e->getMessage();
            $arrayResponse['data'] = '';
            echo json_encode($arrayResponse);
        }
        exit;
    }

    public function get_signout()
    {
        \Session::delete('user');
        \Session::destroy();
        \Messages::success('You have signed out successfully!');
        \Response::redirect(\Uri::base());
    }
}