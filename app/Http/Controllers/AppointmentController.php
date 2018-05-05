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
use Request;
use DateTime;

class AppointmentController extends Controller
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
    public function showNewAppointment()
    {
    // show the form
        $user = Session::get('session-user');
        $currentUser = User::find($user->id);

        return View::make('createappointment');
    }

    public function checkAvailableTime($date) {
        
        // if ($request->isMethod('post')){   
            // dd($request);

            $bookedTimes = DB::table('appointments')->whereDate('date_time', $date)->get();
            // date_default_timezone_set('America/New_York');
            $time1 = new DateTime($date . 'T09:00:00');
            $time2 = new DateTime($date  . 'T10:30:00');
            $time3 = new DateTime($date . 'T13:00:00');
            $time4 = new DateTime($date . 'T14:30:00');
            $time5 = new DateTime($date . 'T16:30:00');

            // var_dump($date);
            $schedules = array($time1, $time2, $time3,$time4, $time5);
            $availableTimes = array();

            foreach($schedules as $schedule) {
                $flag = true;
                foreach($bookedTimes as $bookedTime) {
                    if ($bookedTime == $schedule) {
                        $flag = false;
                        break;
                    }
                }

                if ($flag == true) {
                    array_push($availableTimes,$schedule);
                }
            }

            $response = array(
                'status' => 'success',
                'msg' => $availableTimes
            );
            return \Response::json($response);
            
        // }

    }


}
