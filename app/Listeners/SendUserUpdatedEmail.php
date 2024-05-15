<?php

namespace App\Listeners;

use App\Events\UserUpdated;
use Illuminate\Support\Facades\Mail;
use App\Mail\UserUpdatedEmail;

class SendUserUpdatedEmail
{
    
    /**
     * Handle the event.
     */
    public function handle(UserUpdated $event): void
    {
        $invite = $event->invite;
        Mail::to($event->invite->email)->send(new UserUpdatedEmail($invite));
    }
}
