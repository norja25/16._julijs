<?php namespace Modelbook\Handlers\Events;

use Illuminate\Support\Facades\Mail;
use Modelbook\Events\UserHasRegistred;

use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldBeQueued;
use Modelbook\Senders\smsGateway;
use GuzzleHttp\Client as Guzzle;
use Modelbook\Senders\UserMailer;
use Modelbook\Repositories\SmsRepository;

class SendSmsPasswordToRegistredUser {
    /**
     * @var UserMailer
     */
    private $mailer;
    /**
     * @var SmsRepository
     */
    private $smsRepository;

    /**
     * Create the event handler.
     *
     * @param UserMailer $mailer
     * @param SmsRepository $smsRepository
     */
    public function __construct(UserMailer $mailer, SmsRepository $smsRepository)
    {
        $this->mailer = $mailer;
        $this->smsRepository = $smsRepository;
    }

    /**
     * Handle the event.
     *
     * @param  UserHasRegistred  $event
     * @return void
     */
    public function handle(UserHasRegistred $event)
    {
        $this->smsRepository->sendWellcomeSmsWithPasswordToRegistredUser($event->user, $event->password);


//        $deviceID = 6507;
//        $number = $event->user->user_phone;
//        $message = $event->user->user_firstname . '! Wellcome to gomodel.es you registration have been sucesful! Please replay us back to this SMS with your email address, to confirm your emails, mobile phone number. Login in to your profile using theas credentials. Email:' . $event->user->email . ' Password:' . $event->password . ' Your gomodel.es team!';
//        $options = [];
//        $result = $smsGateway->sendMessageToNumber($number, $message, $deviceID, $options);

//        $this->mailer->sendWelcomeEmailTo($event->user, $event->password);

        //     $data = [
        //         'user_firstname' => $event->user_firstname,
        //        'user_lastname' => $event->user_lastname,
        //        'email' => $event->email,
        //        'password' => $event->password,
        //        'user_phone' => $event->user_phone
        //    ];
        //    Mail::send('emails.register', $data, function($message)
        //    {
        //        $message->to('ro@example.com', 'Rolands Zeltins')->subject('Welcome to gomodel.es');
        //    });
    }

}

//    }
//        $this->mailer = $mailer;
