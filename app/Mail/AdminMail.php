<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class AdminMail extends Mailable
{
    use Queueable, SerializesModels;


    protected $BIG_data;
    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($BIG_data)
    {
        $this->BIG_data = $BIG_data;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        $mail = $this->markdown('emails.sm_mail_admin')->subject('Demande de devis de Travaux')->with('BIG_data',$this->BIG_data);

        if(!empty($this->BIG_data["attachments"])){
            foreach($this->BIG_data["attachments"] as $file){
                $mail = $mail->attach(public_path('storage/'.$file));
            }
        } 
         
        return $mail;    
                           
    }
}
