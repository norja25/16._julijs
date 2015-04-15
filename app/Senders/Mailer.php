<?php namespace Modelbook\Senders;

use Illuminate\Mail\Mailer as Mail;
use Modelbook\Senders\smsGateway as Sms;

abstract class Mailer {


    /**
     * @var Mail
     */
    private $mail;
//     private $sms;

    /**
     * @param Mail $mail
     * @param smsGateway $sms
     */
    function __construct(Mail $mail)
    {
        $this->mail = $mail;
//        $this->sms = $sms;
    }


    /**
     * @param $user
     * @param $subject
     * @param $view
     * @param $data
     * @return mixed
     */
    function sendTo($user, $subject, $view, $data)
    {
        $this->mail->send($view, $data, function($message) use($user)
        {
            $message->to($user->email)->subject('Welcome to gomodel.es');
        });
    }

    /**
     * @param $data
     */
    function sendSmsTo($data)
    {

        $this->sms->sendManyMessages($data);

    }
}