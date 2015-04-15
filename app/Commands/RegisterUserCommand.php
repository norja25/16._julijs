<?php namespace Modelbook\Commands;

use Modelbook\Commands\Command;

class RegisterUserCommand extends Command {

    public $user_firstname;
    public $user_lastname;
    public $email;
    public $password;
    public $user_phone;

    /**
     * Create a new command instance.
     *
     * @param $user_firstname
     * @param $user_lastname
     * @param $email
     * @param $user_phone
     */
	public function __construct($user_firstname, $user_lastname, $email, $user_phone)
	{
        $password = str_random(6);
        $this->user_firstname = $user_firstname;
        $this->user_lastname = $user_lastname;
        $this->email = $email;
        $this->user_phone = $user_phone;
        $this->password = $password;
	}


}
