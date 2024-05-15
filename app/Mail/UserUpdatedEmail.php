<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use App\Models\Invite;

class UserUpdatedEmail extends Mailable
{
    use Queueable, SerializesModels;


    public $invite;
    /**
     * Create a new message instance.
     */
    public function __construct($invite)
    {
        $this->invite = $invite;
    }

    public function build()
    {
        return $this->markdown('emails.invitation') // Assuming your view file is named invitation.blade.php
                ->subject('Invite Confirmation');
    }

    
}
