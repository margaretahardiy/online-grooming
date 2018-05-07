<?php

namespace App\Console\Commands;


use Illuminate\Console\Command;
use App\User;
use Mail;
use App\Mail\AppointmentReminder;

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

          Mail::to('margareta.hardi@gmail.com')->send(new AppointmentReminder);
        // $this->info('Test has fired.');
    }
}
