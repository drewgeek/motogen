<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class Contact extends Mailable
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
                ->markdown('email.contact', [
                   'firstname' => $this->properties['firstname'],
                    'lastname' => $this->properties['lastname'],
                    'email' => $this->properties['email'],
                    'phone' => $this->properties['phone'],
                    'brand' => $this->properties['brand'],
                    'model' => $this->properties['model'],
                    'vin' => $this->properties['vin'],
                    'year' => $this->properties['year'],
                    'part' => $this->properties['part'],
                    'notes' => $this->properties['notes'],
                ]);
    }
}
