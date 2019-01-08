<?php

require VENDORPATH . 'autoload.php';

use \Mailjet\Resources;

class Controller_Subscribe extends \Controller_Base
{
    public function before()
    {
        parent::before();
        return;
    }

    public function post_submit()
    {
        $getName = \Input::post('subscriber_name');
        $getEmail = \Input::post('subscriber_email');

        $apikey = '3fc8a041509025e965508033f87202e5';
        $apisecret = '4cd710647c18a975900e3e1c1e53b223';

        @$objMailjet = new \Mailjet\Client($apikey, $apisecret);
        $arrayData = array('Email' => $getEmail, 'Name' => $getName, 'Action' => 'addforce');
        @$response = $objMailjet->post(Resources::$ContactslistManagecontact, ['id' => 2072468, 'body' => $arrayData]);
        if ($response->success())
        {
            $arrayResponse = array();
            //$arrayResponse = $response->getData();
            $arrayResponse['msg'] = '<h1 class="text-center text-muted mb-5">'.__('subscription.thank_you').'</h1>';
            echo \Format::forge($arrayResponse)->to_json();
        }
        exit;
    }
}