<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;

class AppointmentReminder extends Mailable
{
    use Queueable, SerializesModels;

    protected $time;
    protected $name;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($time, $name)
    {
        $this->name = $name;
        $this->time = $time;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->view('emailreminder')->with('time',$this->time)->with('name', $this->name)->from('tom@onlinegrooming.com');
    }
}
