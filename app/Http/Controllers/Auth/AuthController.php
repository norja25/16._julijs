<?php namespace Modelbook\Http\Controllers\Auth;

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Input;
use Laracasts\Flash\Flash;
use Modelbook\Http\Controllers\Controller;
use Illuminate\Contracts\Auth\Guard;
use Illuminate\Contracts\Auth\Registrar;
use Illuminate\Foundation\Auth\AuthenticatesAndRegistersUsers;
use Modelbook\User;
use Modelbook\Http\Requests\UserRequest;

use Modelbook\Commands\RegisterUserCommand;
use Modelbook\Http\Requests;
use Illuminate\Http\Request;
use GuzzleHttp\Client as Guzzle;

class AuthController extends Controller {

	/*
	|--------------------------------------------------------------------------
	| Registration & Login Controller
	|--------------------------------------------------------------------------
	|
	| This controller handles the registration of new users, as well as the
	| authentication of existing users. By default, this controller uses
	| a simple trait to add these behaviors. Why don't you explore it?
	|
	*/

	use AuthenticatesAndRegistersUsers;

	/**
	 * Create a new authentication controller instance.
	 *
	 * @param  \Illuminate\Contracts\Auth\Guard  $auth
	 * @param  \Illuminate\Contracts\Auth\Registrar  $registrar
	 * @return void
	 */
	public function __construct(Guard $auth, Registrar $registrar)
	{
		$this->auth = $auth;
		$this->registrar = $registrar;

		$this->middleware('guest', ['except' => 'getLogout']);
	}
     /**
      * Show a form to register the user
      *
      * @return \Illuminate\View\View
      * @return Response
      */
    public function create() {
        return view('auth.register');
    }


    /**
     *Creating a new Modelbook user
     *
     * @param UserRequest $request
     * UserRequest is where register form is validated
     * ***Modelbook/Http/Requests/UserRequest
     * If validation successful form data is passed to DTO(DataTransferObject) UserRegistredCommand
     * ***Modelbook/Commands/UserRegistred
     * After that to do the registration logic inside UserRegistredCommandHandler
     * ***Modelbook/Handlers/Commands
     * @return \Illuminate\View\View
     */
    public function store(UserRequest $request)
    {
        $user = $this->dispatch(new RegisterUserCommand(
            $user_firstname = $request->input('user_firstname'),
            $user_lastname = $request->input('user_lastname'),
            $email = $request->input('email'),
            $user_phone  = $request->input('user_phone'),
            $password  = $request->input('password')
        ));
//        Flash::success('You have registred! Your login credentials will be sent to your mobile phone number');
        return redirect('login');
    }

    public function destroy($id)
    {
        $userid = $id;
        User::destroy($userid);
        return 'User ' . $userid . ' deleted';
    }

    /**
     * @return mixed
     */
    public function all()
    {
        return User::all();
    }


}
