<?php

namespace App\Livewire\Chat;

use App\Models\User;
use Livewire\Component;
use App\Events\MessageSent;
use App\Models\Conversation;
use App\Models\Message_store;

class SendMessage extends Component
{
    // public $selectedConversation;
    // public $receiverInstance;
    // public $body;
    // public $createdMessage;
    // public $auth;
    // protected $listeners = ['updateSendMessage','dispatchMessageSent','resetChat', 'sendMessage'];

    // public function resetChat(){
    //     $this->selectedConversation = null;
    //     $this->receiverInstance = null;
    // }

    // public function updateSendMessage(Conversation $conversation, User $receiver)
    // {

    //     $this->selectedConversation = $conversation;
    //     $this->receiverInstance = $receiver;

    // }
    // public function sendMessage()
    // {

    //     if ($this->body == null) {
    //         return null;
    //     }
    //     $createdMessage = new Message_store();
    //     $createdMessage->body = $this->body;

    //     $createdMessage->conversation_id = $this->selectedConversation->id;
    //     $createdMessage->sender_id = $this->auth->id;
    //     $createdMessage->receiver_id = $this->receiverInstance->id;
    //     $createdMessage->save();
    //     $this->dispatch('pushMessage',$createdMessage->id);
    //     $this->selectedConversation->last_time_message = $createdMessage->created_at;
    //     $this->selectedConversation->save();
    //     $this->createdMessage = $createdMessage;

    //     $this->dispatch('refresh')->to('chat.chatlist');
    //     $this->reset('body');
    //     // $this->dispatch('resetBodyData')->to('chat.chatbox');
    //     $this->dispatch('dispatchMessageSent');

    // }
    // public function dispatchMessageSent(){
    //     Broadcast(new MessageSent(
    //        $this->auth,
    //         $this->createdMessage,
    //         $this->selectedConversation,
    //         $this->receiverInstance
    //     ));
    // }
    // public function mount(){
    //     $this->auth = auth()->user();
    // }
    // public function render()
    // {
    //     return view('livewire.chat.send-message')->layout('layouts.app');
    // }
}
