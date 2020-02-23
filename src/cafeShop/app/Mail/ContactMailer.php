<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Mail;
use App\Mail\ContactMailer;

class ContactMailer extends Mailable
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
        $email = $this->data['email'];
        return $this->from(env('MAIL_FROM_ADDRESS', 'trinh0963594847@gmail.com'), env('MAIL_FROM_NAME', 'Coffee Sunflower'))
            ->replyTo($email)
            ->subject("Có khách $email vừa liên hệ")
            ->view('emails.contact-email')
            ->with('data', $this->data);
    }
}
