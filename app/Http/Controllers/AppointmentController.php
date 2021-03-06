<?php

namespace App\Http\Controllers;

use App\User;
use App\Appointment;
use Aopp\Mail\AppointmentReminder;
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
use Carbon\Carbon;

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

        $dogs = DB::table('dogs')->where('user_id', $currentUser->id)->get();

        return View::make('createappointment')->with('dogs', $dogs);
    }

    public function showEditAppointment($id)
    {
        $appointment = Appointment::find($id);
        $date = Carbon::parse($appointment->date_time)->format('Y-m-d');
        $user = Session::get('session-user');
        $bookedTimes = DB::table('appointments')->whereDate('date_time', $date)->get();
            // date_default_timezone_set('America/New_York');
            $time1 = new DateTime($date . 'T09:00:00');
            $time2 = new DateTime($date  . 'T10:30:00');
            $time3 = new DateTime($date . 'T13:00:00');
            $time4 = new DateTime($date . 'T14:30:00');
            $time5 = new DateTime($date . 'T16:00:00');
            $time6 = new DateTime($date . 'T17:30:00');

            $schedules = array($time1, $time2, $time3,$time4, $time5, $time6);
            $availableTimes = array();
            $result = "";
            $i = 0;
            foreach($schedules as $schedule) {
                $flag = true;
                foreach($bookedTimes as $bookedTime) {
                    // $result = $bookedTime->date_time;
                   
                    $timeSchedule = $schedule->format('Y-m-d H:i:s');
                    $timeBooked = $bookedTime->date_time;
                      
                    if ($timeSchedule == $timeBooked) {
                        $flag = false;
                        break;
                    }
                }

                if ($flag == true) {
                    array_push($availableTimes,$schedule->format('Y-m-d H:i:s'));
                }
            }

        return View::make('updateAppointment')->with('appointment', $appointment)->with('times', $availableTimes)->with('user', $user);
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

          
            $schedules = array($time1, $time2, $time3,$time4, $time5);
            $availableTimes = array();
            $result = "";
            $i = 0;
            foreach($schedules as $schedule) {
                $flag = true;
                foreach($bookedTimes as $bookedTime) {
                    // $result = $bookedTime->date_time;
                   
                    $timeSchedule = $schedule->format('Y-m-d H:i:s');
                    $timeBooked = $bookedTime->date_time;
                      
                    if ($timeSchedule == $timeBooked) {
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
    }

    public function createNewAppointment()
    {
        $user = Session::get('session-user');
        $currentUser = User::find($user->id);
        $request = Input::all();
        $appointment = new Appointment();
        $appointment->date_time = $request["schedules"];
        $appointment->comment = $request["comment"] ;
        var_dump($request);
        $appointment->dog_id =  $request["dogs"];
        $appointment->user_id = $currentUser->id;
        $appointment->service = $request["services"];
        $appointment->send_reminder = 0;

       $appointment->save();

       return redirect('homepage');
    }


    public function updateAppointment($id, Request $request)
    {
        $appointment = Appointment::find($id);
        $request = Input::all();
        $appointment->date_time = $request["schedules"];
        $appointment->send_reminder = 0;

        $appointment->save();
        return redirect('homepage');
    }

    public function destroy($id) {
        Appointment::destroy($id);
        return redirect('homepage')->with('cancel', 'Appointment cancelled');;
    }
}
