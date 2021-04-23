<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class ResetPasswordMail extends Mailable
{
    use Queueable, SerializesModels;

    
    public $admin;

    public function __construct($admin)
    {
        $this->admin = $admin;
        
    }

   

    public function build()
    {
        $admin = $this->admin;

        return $this->view('mail.reset_password',compact('admin'));
    }
}
