<?php namespace Modelbook\Senders;

use Modelbook\User;
use Modelbook\Events\Event;
class UserMailer extends Mailer {

    /**
     * @param User $user
     */
    public function sendWelcomeEmailTo(User $user, $event)
    {

        $user_password = $event;
        $subject = 'Welcome to gomodel.es';
        $view = 'emails.register';
        $data = [
                'user_firstname' => $user->user_firstname,
                'user_lastname' => $user->user_lastname,
                'email' => $user->email,
                'password' => $user_password,
                'user_phone' => $user->user_phone
                ];

        $this->sendTo($user, $subject, $view, $data);
    }

}