<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;

class ContactMail extends Mailable
{
    use Queueable, SerializesModels;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($contact_form)
    {
        $this->mail_data = $contact_form;
    }
    
    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->to($this->mail_data['email'])
            ->from('6354pfun@jcom.home.ne.jp', 'Izo info')
            ->subject('お問い合わせありがとうございます')
            ->text('contact_mail')
            ->with([
                'name' => $this->mail_data['name'],
                'genre' => $this->mail_data['genre'],
                'contact_message' => $this->mail_data['message'],//'message'にすると、Illuminate\Mail\Messageのインスタンスとして渡されてエラー
            ])
            ->bcc(['neripapa16@gmail.com']); // BCCの受信者を指定
    }
}
