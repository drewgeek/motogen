<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class ThankYouMail extends Mailable
{
    use Queueable, SerializesModels;

    public $firstname;
    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($firstname)
    {
        $this->firstname = $firstname;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->from('info@motongen.com')
                ->subject('MOTONGEN: Your Mail Acknowledgement')
                ->replyTo('info@motongen.com')
                ->markdown('email.thankyou', [
                    'firstname' => ucfirst(strtolower($this->firstname)),
                ]);
    }
}
