<?php namespace Modelbook\Providers;

use Illuminate\Contracts\Events\Dispatcher as DispatcherContract;
use Illuminate\Foundation\Support\Providers\EventServiceProvider as ServiceProvider;
use Modelbook\Events\UserHasRegistred;
use Modelbook\Handlers\Events\EmailRegistredUserPassword;
use Modelbook\Handlers\Events\SendSmsPasswordToRegistredUser;
class EventServiceProvider extends ServiceProvider {

	/**
	 * The event handler mappings for the application.
	 *
	 * @var array
	 */
	protected $listen = [
		'event.name' => [
			'EventListener',
		],
        UserHasRegistred::class => [
            SendSmsPasswordToRegistredUser::class,
        ],
	];

	/**
	 * Register any other events for your application.
	 *
	 * @param  \Illuminate\Contracts\Events\Dispatcher  $events
	 * @return void
	 */
	public function boot(DispatcherContract $events)
	{
		parent::boot($events);

		//
	}

}
