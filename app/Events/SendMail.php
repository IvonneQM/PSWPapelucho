<?php

namespace App\Events;

use App\Events\Event;
use App\Interfaces\SendmailInterface;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Broadcasting\ShouldBroadcast;

class SendMail extends Event
{
    use SerializesModels;

    public $sendmail;

    public $type;

    /**
     * Create a new event instance.
     *
     * @return void
     */
    public function __construct(SendmailInterface $sendmail)
    {
        $this->sendmail = $sendmail;
    }

    /**
     * Get the channels the event should be broadcast on.
     *
     * @return array
     */
    public function broadcastOn()
    {
        return [];
    }
}
