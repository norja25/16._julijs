<?php namespace Modelbook\Handlers\Commands;

use Modelbook\Commands\RegisterUserCommand;

use Illuminate\Queue\InteractsWithQueue;
use Modelbook\Repositories\UserRepository;
use Modelbook\User;

class RegisterUserCommandHandler {

    protected $repository;

    /**
     * @param UserRepository $repository
     */
    function __construct(UserRepository $repository)
    {
        $this->repository = $repository;
    }

    /**
	 * Create the command handler.
	 *
	 * @return void
	 */


	/**
	 * Handle the command.
	 *
	 * @param  RegisterUserCommand  $command
	 * @return void
	 */
	public function handle(RegisterUserCommand $command)
	{
        $user = User::register(
            $command->user_firstname,
            $command->user_lastname,
            $command->email,
            $command->password,
            $command->user_phone
        );

      $this->repository->save($user);

        return $user;
	}

}
