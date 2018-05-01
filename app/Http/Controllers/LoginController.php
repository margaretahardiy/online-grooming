<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use View;
use Illuminate\Support\Facades\Input;
use DB;
use Hash;

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
        return View::make('login');
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
                echo 'You are login as : '.$user->email;
                return View::make('welcome');
            }
            else {
                return redirect()->back()->with('alert', 'Wrong password!');
            }
        }
      
    }
}
