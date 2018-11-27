<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;

class ContactMail extends Mailable
{
    use Queueable, SerializesModels;

    /**
     * Create a new message instance.
     *
     * @return void
     */

    public $messageMail;
    public $fromMail;
    public $nameMail;
    public $telpMail;
    //public $fromSubject;

    public function __construct($messageMail, $fromMail, $nameMail, $telpMail)
    {
        $this->messageMail = $messageMail;
        $this->fromMail = $fromMail;
        $this->nameMail = $nameMail;
        $this->telpMail = $telpMail;
        //$this->fromSubject = $fromSubject;
    }

    /**
     * Build the bodyMessage.
     *
     * @return $this
     */
    public function build()
    {
        return $this->from($this->fromMail)->view('frontend.mail.format');
    }
}
