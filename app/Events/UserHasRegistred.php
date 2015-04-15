<?php namespace Modelbook\Events;

use Modelbook\Commands\RegisterUserCommand;
use Modelbook\Events\Event;

use Illuminate\Queue\SerializesModels;
use Modelbook\User;
class UserHasRegistred extends Event {

	use SerializesModels;

	/**
	 * Create a new event instance.
	 *
	 * @return void
	 */
    public $user;
    public $password;
//    public $user_firstname;
  //  public $user_lastname;
    //public $email;
    //
  //  public $user_phone;

    /**
     * @param User $user
     * @param RegisterUserCommand $password
     */
    function __construct(User $user, $password)
    {
        $this->user = $user;
        $this->password = $password;
//        $this->user_firstname = $user_firstname;
  //      $this->user_lastname = $user_lastname;
    //    $this->email = $email;

        //$this->user_phone = $user_phone;

    }

}
