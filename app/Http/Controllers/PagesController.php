<?php namespace Modelbook\Http\Controllers;

class PagesController extends Controller {

	/*
	|--------------------------------------------------------------------------
	| Home Controller
	|--------------------------------------------------------------------------
	|
	| This controller renders your application's "dashboard" for users that
	| are authenticated. Of course, you are free to change or remove the
	| controller as you wish. It is just here to get your app started!
	|
	*/

	/**
	 * Create a new controller instance.
	 *
	 * @return void
	 */
	public function __construct()
	{
		
	}

	/**
	 * Show the application dashboard to the user.
	 *
	 * @return Response
	 */
	public function index()
	{
		$this->middleware('auth');
		return view('home');
	}

	public function home()
	{
		return view('pages.homepage');
	}

    public function login()
    {
        return view('auth.login');
    }

    public function messages()
    {
        return view('pages.messages');
    }

    public function createProcedure()
    {
        return view('pages.procedure.create');
    }

    public function indexModel()
    {
        return view('pages.model.index');
    }
}
