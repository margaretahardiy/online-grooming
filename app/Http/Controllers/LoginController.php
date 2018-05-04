<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use View;
use Illuminate\Support\Facades\Input;
use DB;
use Hash;
use Session;

class LoginController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Login Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles authenticating users for the application and
    | redirecting them to your home screen. The controller uses a trait
    | to conveniently provide its functionality to your applications.
    |
    */

    use AuthenticatesUsers;

    /**
     * Where to redirect users after login.
     *
     * @var string
     */
    protected $redirectTo = '/home';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }

    public function showLogin()
    {
    // show the form
        return View::make('login2');
    }

    public function doLogin()
    {
    // show the form
        $email = Input::get('email');
        $password = Input::get('password');

        $user = DB::table('users')->where('email', $email)->first();
        if($user == null)
        {
            return redirect()->back()->with('alert', 'Failed to login!');
        }
        else {
            if (Hash::check($password,$user->password)) {
                echo 'You are login as : '.$user->name;
                Session::put('session-user', $user);

                return redirect('homepage');
            }
            else {
                return redirect()->back()->with('alert', 'Wrong password!');
            }
        }
      
    }
}
