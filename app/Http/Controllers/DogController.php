<?php

namespace App\Http\Controllers;

use App\User;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;
use View;
use Illuminate\Support\Facades\Input;
use Session;
use Hash;
use DB;

class DogController extends Controller
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
    public function showDogList()
    {
        $currentUser = Session::get('session-user');
      
        $dogs = DB::table('dogs')->where('user_id', $currentUser->id)->get();
        return View::make('dogs')->with('dogs', $dogs);
    }


}