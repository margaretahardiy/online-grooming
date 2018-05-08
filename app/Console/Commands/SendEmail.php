<?php

namespace App\Console\Commands;


use Illuminate\Console\Command;
use App\User;
use Mail;
use App\Mail\AppointmentReminder;
use App\Appointment;
use \DateTime;
use \DateTimeZone;


class SendEmail extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'send:email';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Command description';

    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * Execute the console command.
     *
     * @return mixed
     */
    public function handle()
    {
        // $currentUser = User::find(1);
        // $currentUser->name = "M";
        // $currentUser->save();
        // echo 'Something went wrong!';
        $appointments = Appointment::all();
        foreach($appointments as $appointment) {
            date_default_timezone_set("Australia/Melbourne");   
            $dateappointment  = (new DateTime($appointment->date_time))->format("Y-m-d h:i:s");
            $time = strtotime( $dateappointment);
            
            $day = new DateTime(); 
            $datenow = $day->format("Y-m-d h:i:00");

            $now = strtotime($datenow);
            $timeAppointment = (new DateTime($appointment->date_time))->format("h:i a");
        
            $this->info('now' .$now. ' '.$datenow);
            $this->info('time'.$time. ' '. $appointment->date_time);
            $this->info('nojjw' .round(($time-$now)/ 60));
            
              if (($time-$now)/ 60 == 1440 && $appointment->send_reminder == false) {
                    $email = $appointment->user->email;
                    Mail::to($email)->send(new AppointmentReminder($timeAppointment, $appointment->user->name));
                    // $currentappointment = Appointment::find($appointment->id);
                    $appointment->send_reminder = 1;
                    $appointment->save();
                 }
        }
        // Mail::to($email)->send(new AppointmentReminder);
        //  Mail::to('margareta.hardi@gmail.com')->send(new AppointmentReminder);
        // $this->info('Test has fired.');
    }
}
