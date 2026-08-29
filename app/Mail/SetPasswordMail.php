<?php

namespace App\Mail;

use App\Models\User;
use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;

class SetPasswordMail extends Mailable
{
    use Queueable;

    public function __construct(public User $user, public string $setPasswordUrl)
    {
    }

    public function envelope(): Envelope
    {
        return new Envelope(subject: 'Set your Team 3 Concert Ticketing System password');
    }

    public function content(): Content
    {
        return new Content(view: 'emails.set-password');
    }
}
