<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class confirm_Mail extends Mailable
{
    use Queueable, SerializesModels;
    public $mailDetail;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($mailDetail)
    {
        //
        $this->mailDetail = $mailDetail;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->subject('Email Confirmation')->view('mail.emailConfirmation');
    }
}
