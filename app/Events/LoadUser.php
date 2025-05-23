<?php

namespace App\Events;

use App\Models\User;
use Illuminate\Broadcasting\Channel;
use Illuminate\Broadcasting\InteractsWithSockets;
use Illuminate\Broadcasting\PresenceChannel;
use Illuminate\Broadcasting\PrivateChannel;
use Illuminate\Contracts\Broadcasting\ShouldBroadcast;
use Illuminate\Foundation\Events\Dispatchable;
use Illuminate\Queue\SerializesModels;

class LoadUser implements ShouldBroadcast
{

    use Dispatchable, InteractsWithSockets, SerializesModels;
    // public $user;
    /**
     * Create a new event instance.
     */
    public function __construct()
    {

    }
    // public function broadcastWith()
    // {
    //     return [
    //         'id' => $this->user->id,
    //         'name' => $this->user->name,
    //     ];
    // }
    // public function broadcastAs()
    // {
    //     return 'LoadUser';  // Explicit event name
    // }

    public function broadcastOn()
    {
        return new Channel('users');
        // return [
        //      new Channel('newUser'),
        // ];
    }
}
