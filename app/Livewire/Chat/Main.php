<?php

namespace App\Livewire\Chat;

use Livewire\Component;

class Main extends Component
{

public $conversationId;
public $receiverId;
protected $listeners = ['mainConvo'];
public function mainConvo($conversation, $receiver_id){
    $this->dispatch('userSelected',
        conversation: $conversation,
        receiver_id: $receiver_id
    )->to('chat.chatlist');
    // dd('asdfdf');
    $this->conversationId = null;
    $this->receiverId = null;
}

    public function render()
    {
        if($this->conversationId && $this->receiverId){
            $this->dispatch('mainChat',
                conversation: $this->conversationId,
                receiver_id: $this->receiverId
            );
        }
        return view('livewire.chat.main')->layout('layouts.app');
    }


}
