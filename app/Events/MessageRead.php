<?php

namespace App\Events;

use Illuminate\Broadcasting\Channel;
use Illuminate\Broadcasting\InteractsWithSockets;
use Illuminate\Broadcasting\PresenceChannel;
use Illuminate\Broadcasting\PrivateChannel;
use Illuminate\Contracts\Broadcasting\ShouldBroadcast;
use Illuminate\Foundation\Events\Dispatchable;
use Illuminate\Queue\SerializesModels;

class MessageRead implements ShouldBroadcast
{
    use Dispatchable, InteractsWithSockets, SerializesModels;

    public $conversation_id;
    public $receiver_id;
    public function __construct($conversation_id, $receiver_id)
    {
        $this->conversation_id = $conversation_id;
        $this->receiver_id = $receiver_id;
    }
    public function broadcastAs()
    {
        return 'MessageRead';  // Explicit event name
    }
    public function broadcastWith()
    {
        return [
            'conversation_id' => $this->conversation_id,
            'receiver_id' => $this->receiver_id,
        ];
    }

    public function broadcastOn()
    {
        error_log($this->conversation_id);
        error_log($this->receiver_id);
        return new PrivateChannel('chat.'.$this->receiver_id);
    }
}
