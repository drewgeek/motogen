<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class PartnerMail extends Mailable
{
    use Queueable, SerializesModels;

    public $data;
    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($data)
    {
        $this->data = $data;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->from('info@motongen.com')
            ->markdown('email.partner', [
                'name' => $this->data['name'] ?? '',
                'email' => $this->data['email'] ?? '',
                'phone' => $this->data['phone'] ?? '',
                'state' => $this->data['state'] ?? '',
                'city' => $this->data['city'] ?? '',
                'workshop' => $this->data['workshop'] ?? '',
                'address' => $this->data['address'] ?? '',
                'notes' => $this->data['notes'] ?? '',
            ]);

    }
}
