<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class SendMailable extends Mailable
{
    use Queueable, SerializesModels;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($data)
    {
        $this->data = $data;
    }

    public function build()
    {
        $address = env('MAIL_FROM_ADDRESS');
        $subject = 'Obrigado por se inscrever no Prime Drink!';
        $name = env('MAIL_FROM_NAME');

        return $this->markdown('mail.register')
            ->from($address, $name)
            ->replyTo($address, $name)
            ->subject($subject)
            ->with([ 'name' => $this->data['toName'] ]);

    }
}
