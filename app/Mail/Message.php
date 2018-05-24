<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;

class Message extends Mailable
{
    use Queueable, SerializesModels;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public $message;
    public function __construct($message)
    {
        //
        $this->message = $message;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
      $email = $this->message['email'];
      $name = $this->message['name'];
      $body = $this->message['message'];
      return $this->from($email)
                  ->view( 'emails.message' , compact('name', 'body'));
    }
}
