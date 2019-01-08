<?php

namespace Fuel\Tasks;

class Mailer
{
    public function queue()
    {
        echo "\n===========================================";
        echo "\nRunning [Mailer:queue]";
        echo "\n-------------------------------------------\n\n";

        $arrayMap = array
        (
            array('sent', '=', 0)
        );

        $objMailers = \Model_Mailer::query()->where($arrayMap)->order_by('ctime', 'ASC')->limit(3)->get();

        foreach ($objMailers as $mailer)
        {
            echo $mailer->to_email;
            echo "\n-------------------------------------------\n\n";

            $objData = new \stdClass();
            $objData->mailer = $mailer;

            $objEmail = \Email::forge();
            $objEmail->from($mailer->from_email, $mailer->from_name);
            $objEmail->to($mailer->to_email, $mailer->to_name);
            $objEmail->subject($mailer->subject);
            $objEmail->html_body(\View::forge( $mailer->template, $objData));

            try
            {
                $objEmail->send();
                $mailer->sent = 1;
                $mailer->save();
            }
            catch(\EmailValidationFailedException $e)
            {
                die('The validation failed.');
            }
            catch(\EmailSendingFailedException $e)
            {
                die('The driver could not send the email.');
            }
        }
    }
}