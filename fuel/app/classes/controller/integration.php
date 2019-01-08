<?php

class Controller_Integration extends \Controller_Base
{
    public function before()
    {
        parent::before();
        return;
    }
    public function get_inquiry()
    {
        $this->template->title = __('integration.title');
        $this->template->content = \View::forge('integration/inquiry');
        $objCaptcha = new Mobicms\Captcha\Captcha;
        $code = $objCaptcha->generateCode();
        \Session::set('captcha', $code);
        $this->template->content->code = $code;
        $this->template->content->captcha = $objCaptcha;

    }
    public function post_inquiry()
    {
        $getFirstName = \Input::post('first_name');
        $getLastName = \Input::post('last_name');
        $getEmail = \Input::post('email');
        $getCountry = \Input::post('country');
        $getPlatform = \Input::post('platform');
        $getProgrammingLanguage = \Input::post('programming_language');
        $getCompany = \Input::post('company');
        $getContact = \Input::post('contact');
        $getRemark = \Input::post('description');
        $getCopy = (int) \Input::post('copey_me');
        $getCaptcha = \Input::post('captcha');
        $sessionCaptcha = \Session::get('captcha');

        if ($getCaptcha !== null && $sessionCaptcha !== null) {
            if (strtolower($getCaptcha) != strtolower($sessionCaptcha)) {
                \Messages::warning(__('integration.application.messages.invalid_captcha'));
                \Response::redirect(\Uri::create('integration/inquiry'));
                exit;
            }
        }

        $objInquiry = Model_Inquiry::forge();
        $objInquiry->first_name = $getFirstName;
        $objInquiry->last_name = $getLastName;
        $objInquiry->email = $getEmail;
        $objInquiry->country = $getCountry;
        $objInquiry->platform = $getPlatform;
        $objInquiry->programming = $getProgrammingLanguage;
        $objInquiry->company = $getCompany;
        $objInquiry->contact = json_encode($getContact);
        $objInquiry->remark = $getRemark;
        $objInquiry->save();

        if ($getCopy)
        {

        }

        \Messages::success(__('integration.application.messages.success'));
        \Response::redirect(\Uri::create('integration/inquiry/'));

    }
}