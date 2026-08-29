<?php

namespace App\Services;

use App\Mail\SetPasswordMail;
use App\Models\User;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\URL;

class AuthMailService
{
    public function sendSetPasswordLink(User $user): void
    {
        $url = URL::temporarySignedRoute('auth.set-password', now()->addHours(24), ['user' => $user->user_id]);
        Mail::to($user->email)->send(new SetPasswordMail($user, $url));
    }
}
