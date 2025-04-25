<?php

namespace App\Events;

use App\Models\Conversation;
use App\Models\Message_store;
use App\Models\User;
use Illuminate\Broadcasting\Channel;
use Illuminate\Broadcasting\InteractsWithSockets;
use Illuminate\Broadcasting\PresenceChannel;
use Illuminate\Broadcasting\PrivateChannel;
use Illuminate\Contracts\Broadcasting\ShouldBroadcast;
use Illuminate\Foundation\Events\Dispatchable;
use Illuminate\Queue\SerializesModels;

class MessageSent implements ShouldBroadcast
{
    use Dispatchable, InteractsWithSockets, SerializesModels;

    public $user;
    public $message;
    public $conversation;
    public $receiver;
    public function __construct(User $user, Message_store $message, Conversation $conversation, User $receiver)
    {
        $this->user = $user;
        $this->message = $message;
        $this->conversation = $conversation;
        $this->receiver = $receiver;
    }
    public function broadcastAs()
    {
        return 'MessageSent';  // Explicit event name
    }

    public function broadcastWith()
    {
        return [
            'user_id' => $this->user->id,
            'message_id' => $this->message->id,
            'conversation_id' => $this->conversation->id, // fixed spelling
            'receiver_id' => $this->receiver->id,
        ];
    }

    public function broadcastOn()
    {
      
        error_log($this->user);
        error_log($this->receiver);
        return new PrivateChannel('chat.' . $this->receiver->id);
    }
}
