<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;

class TestEmail extends Mailable
{
    use Queueable, SerializesModels;

    public $data;

    public function __construct($data)
    {
        $this->data = $data;
    }

    public function build()
    {
        $address = env('MAIL_FROM_ADDRESS');
        $subject = 'This is a demo!';
        $name = 'Mythika-ARPG';

        return $this->view('emails/test')
                    ->from("$address", $name)
                    ->cc($address, $name)
                    ->bcc($address, $name)
                    ->replyTo($address, $name)
                    ->subject($subject)
                    ->with([ 'test_message' => $this->data['message'] ]);
    }
}

// class TestEmail extends Mailable
// {
//     use Queueable, SerializesModels;

//     /**
//      * Create a new message instance.
//      *
//      * @return void
//      */
//     public function __construct()
//     {
//         //
//     }

//     /**
//      * Get the message envelope.
//      *
//      * @return \Illuminate\Mail\Mailables\Envelope
//      */
//     public function envelope()
//     {
//         return new Envelope(
//             subject: 'Test Email',
//         );
//     }

//     /**
//      * Get the message content definition.
//      *
//      * @return \Illuminate\Mail\Mailables\Content
//      */
//     public function content()
//     {
//         return new Content(
//             view: 'view.name',
//         );
//     }

//     /**
//      * Get the attachments for the message.
//      *
//      * @return array
//      */
//     public function attachments()
//     {
//         return [];
//     }
// }
