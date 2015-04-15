<?php namespace Modelbook\Handlers\Events;

use Illuminate\Support\Facades\Mail;
use Modelbook\Events\UserHasRegistred;

use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldBeQueued;
use Modelbook\Senders\UserMailer;

class EmailRegistredUserPassword {
    /**
     * @var UserMailer
     */
    private $mailer;

    /**
     * Create the event handler.
     *
     * @param UserMailer $mailer
     */
	public function __construct(UserMailer $mailer)
	{
        $this->mailer = $mailer;
    }

	/**
	 * Handle the event.
	 *
	 * @param  UserHasRegistred  $event
	 * @return void
	 */
	public function handle(UserHasRegistred $event)
	{

        $this->mailer->sendWelcomeEmailTo($event->user, $event->password);

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
