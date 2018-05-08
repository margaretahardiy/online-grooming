<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;

class GroomerAppointmentReminder extends Mailable
{
    use Queueable, SerializesModels;

    protected $time;
    protected $address;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($time, $address)
    {
        $this->address = $address;
        $this->time = $time;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->view('groomeremailreminder')->with('time',$this->time)->with('address', $this->address)->from('admin@onlinegrooming.com');
    }
}
