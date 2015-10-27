<?php namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class HomeController extends Controller {

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
		$this->middleware('auth');
	}

	/**
	 * Show the application dashboard to the user.
	 *
	 * @return Response
	 */
	public function index()
	{
		$userscount = DB::select('select count(*) as count from users where status = ?', ['Y']);
		$pinduinscount = $userscount[0]->count;

		return view('home',compact('pinduinscount'));
	}
	
    public function memberprofile()
    {
        // Just testing
		$membersInfo = ['Coach', 'Infamusk72', 'The General'];
		//$members = DB::select('select * from members where type = ?', ['earlybird']);
		//$users = DB::select('select * from users where status = ?', ['Y']);
		//$membersInfo = DB::select('select * from users, members where users.id = members.id_users and users.status = ?', ['Y']);
//		var_dump($membersInfo);
//		var_dump(compact('members', 'users'));
		//var_dump (compact('members'));
		//exit;
		return view('members.home',compact('membersInfo'));
    }
}
