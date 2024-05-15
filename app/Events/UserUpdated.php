<?php

namespace App\Events;

use Illuminate\Broadcasting\InteractsWithSockets;
use Illuminate\Foundation\Events\Dispatchable;
use Illuminate\Queue\SerializesModels;
use App\Models\Invite;

class UserUpdated
{
    use Dispatchable, InteractsWithSockets, SerializesModels;

    public $invite;

    /**
     * Create a new event instance.
     */
    public function __construct(Invite $invite)
    {
        $this->invite = $invite;
    }
}
