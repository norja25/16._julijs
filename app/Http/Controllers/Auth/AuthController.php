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
//        $client = new Guzzle();
//        $response = $client->get('http://sms.lv',[
//            'query'=>[
//                'x'=>'BhMEA3UFeBBvbxUJb25sBXppY3s=',
//                'num'=>'+37127831183',
//                'ajax'=>1
//            ]
//        ]);
//        $result = $response->getBody();
//
//        $carier = preg_match('/alert\(\s*"(.+?)"\s*\)/', $result, $matches);
//
//        switch($matches[1]) {
//            case 'Latvijas Mobilais Telefons':
//                return 'Latvijas Mobilais Telefons case';
//                break;
//            case 'Tele2':
//                $smsGateway = new SmsGateway('rolands.zeltins@gmail.com', 'kasirkoa123321');
//                $user_first_last_name = $event->user->user_firstname . ' ' . $event->user->user_lastname;
//                $smsGateway->createContact($user_first_last_name,  $event->user->user_phone);
//                $data[] = [
//                    'device' => 6507,
//                    'number' => $event->user->user_phone,
//                    'message' => $event->user->user_firstname . '! Wellcome to gomodel.es your registration have been sucesful! Please replay us back to this SMS with your email address, to confirm your emails, mobile phone number.',
//                ];
//
//                $data[] = [
//                    'device' => 6507,
//                    'number' => $event->user->user_phone,
//                    'message' => 'Login in to your profile using thea'.'s' . ' credentials. Email:' . $event->user->email . ' Password:' . $event->password . ' Your gomodel.es team!',
//                ];
//
//                $data[] = [
//                    'device' => 6507,
//                    'number' => $event->user->user_phone,
//                    'message' => 'You can save this number as gomodel.es so you know next time from who these messages are! gomodel.es super-team!',
//                    'send_at' => strtotime('+1 minutes'),
//                ];
//                $result = $smsGateway->sendManyMessages($data);
//                break;
//            case 'BITE Latvija':
//                return 'BITE Latvija case';
//                break;
//            default:
//                return 'Other case';
//        }
//        //return $matches[1];
//
//
    return User::all();
    }


}
