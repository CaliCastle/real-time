<?php

namespace App\Events;

use App\Events\Event;
use App\User;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Broadcasting\ShouldBroadcast;

class NewMessage extends Event implements ShouldBroadcast
{
    use SerializesModels;
    
    public $message;

    /**
     * Create a new event instance.
     *
     * @return void
     */
    public function __construct($message)
    {
        $this->message = $message;
    }

    /**
     * Get the channels the event should be broadcast on.
     *
     * @return array
     */
    public function broadcastOn()
    {
        return ['everyone'];
    }

    /**
     * @return array
     */
    public function broadcastWith()
    {
        return [
//            'user' => User::first(),
//            'message' => $this->message
        ];
    }

    /**
     * Get the message.
     * 
     * @return mixed
     */
    public function getMessage()
    {
        return $this->message;
    }
}
