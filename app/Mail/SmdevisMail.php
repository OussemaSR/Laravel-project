<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class SmdevisMail extends Mailable
{
    use Queueable, SerializesModels;


    protected $Client;
    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($Client)
    {
        $this->Client = $Client;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->markdown('emails.sm_mail_client')->with('Client',$this->Client);
                           
    }
}
