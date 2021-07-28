<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class FindInstallerMail extends Mailable
{
    use Queueable, SerializesModels;

    protected $user;
    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($user)
    {
        $this->user = $user;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->from('contact@motongen.com')
            ->markdown('email.installer', [
                'firstname' => $this->user['firstname'],
                'lastname' => $this->user['lastname'],
                'email' => $this->user['email'],
                'phone' => $this->user['phone'],
                'state' => $this->user['state'],
                'city' => $this->user['city'],
                'brand' => $this->user['brand'],
                'model' => $this->user['model'],
                'vin' => $this->user['vin'],
                'year' => $this->user['year'],
                'part' => $this->user['part'],
                'kits' => $this->user['kits'] ? 'Include Kits' : 'Dont include kits',
                'notes' => $this->user['notes'],
            ]);

    }
}
