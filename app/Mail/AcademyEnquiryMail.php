<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class AcademyEnquiryMail extends Mailable
{
    use Queueable, SerializesModels;

    public $properties;
    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($properties)
    {
        $this->properties = $properties;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->from('contact@motongen.com')
        ->markdown('email.academy', [
           'firstname' => $this->properties['firstname'],
            'lastname' => $this->properties['lastname'],
            'email' => $this->properties['email'],
            'phone' => $this->properties['phone'],
            'address' => $this->properties['address'],
            'startDate' => $this->properties['startDate'],
            'duration' => $this->properties['duration'],
            'notes' => $this->properties['notes'],
        ]);
    }
}
