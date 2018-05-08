<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Session;
use DB;
use View;
use App\Appointment;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    public function redirectHomepage() 
    {
        $currentUser = Session::get('session-user');
        $dogs = DB::table('dogs')->where('user_id', $currentUser->id)->get();
        // $appointments = DB::table('appointments')->where('user_id', $currentUser->id)->get();
        if ($currentUser->client_status == false) {
            $appointments =  Appointment::all();
        }
        else {
            $appointments = Appointment::with('dog')->where('user_id', $currentUser->id)->get();
        }
       
        
        return View::make('homepage')->with('dogs', $dogs)->with('appointments', $appointments)->with('user', $currentUser);
    }
}

