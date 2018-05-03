<?php

namespace App\Http\Controllers;

use App\User;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;
use Illuminate\Foundation\Auth\RegistersUsers;
use View;
use Illuminate\Support\Facades\Input;
use Session;
use Hash;
use DB;

class ProfileController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Profile Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users as well as their
    | validation and creation. By default this controller uses a trait to
    | provide this functionality without requiring any additional code.
    |
    */
    public function showProfile()
    {
    // show the form
        $user = Session::get('session-user');
        $currentUser = User::find($user->id);

        echo 'You live at: '.$currentUser->address;
        return View::make('profile')->with('user', $currentUser);
    }

    public function updateProfile()
    {
        $user = Session::get('session-user');
        
        $currentUser = User::find($user->id);
        $currentUser->email = Input::get('email');
        $currentUser->address = Input::get('address');
        $currentUser->name = Input::get('name');
        $currentUser->mobile_number = Input::get('mobile');
        $currentUser->work_number = Input::get('work');
        $currentUser->home_number = Input::get('home');

        $currentUser->save();
        echo 'Your profile has been updated!'.$currentUser->name;
        return View::make('profile')->with('user', $currentUser);
    }


}
