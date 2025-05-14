<?php

namespace App\Livewire\Chat;

use App\Models\Conversation;
use App\Models\User;
use Livewire\Component;
use Livewire\Volt\Compilers\Mount;

class Chatlist extends Component
{
    public $auth;
    public $conversations;
    public $receiverInstance;
    public $name;
    public $selectedConversation;
    public $singleConvo, $singleConversation = null, $singleReceiver;


    protected $listeners = ['chatUserSelected', 'refresh','resetChat','userSelected'];


    public function resetChat(){
        $this->selectedConversation = null;
        $this->receiverInstance = null;
        $this->singleConversation = null;
    }
     public function refresh(){
        $this->singleConversation = null;
        $this->mount();
    }



        public function chatUserSelected(Conversation $conversation, User $receiver){


            $this->dispatch('loadConversation', conversation: $conversation->id,  receiver: $receiver->id)->to('chat.chatbox');

            // if(!$conversation->message->first()){
            //     $this->singleConversation = $conversation;
            // }
            $this->receiverInstance = $receiver;
            $this->selectedConversation = $conversation;
   



        }


    // public function getChatUserInstance(Conversation $conversation, $request){

    //     if($conversation->sender_id == $this->auth->id){
    //         $this->receiverInstance = User::firstWhere('id', $conversation->receiver_id);
    //     }else{
    //         $this->receiverInstance = User::firstWhere('id', $conversation->sender_id);
    //     }
    //     if(isset($request)){
    //         return $this->receiverInstance->$request;
    //     }
    // }
    public function getChatUserInstance(Conversation $conversation)
{
    return $conversation->sender_id == $this->auth->id
        ? User::find($conversation->receiver_id)
        : User::find($conversation->sender_id);
}

    public function mount(){
        $this->auth = auth()->user();
        $this->conversations = Conversation::where(function ($query) {
            $query->where('receiver_id', $this->auth->id)
                  ->orWhere('sender_id', $this->auth->id);
        })
        ->whereHas('message') // Apply whereHas AFTER grouping
        ->orderBy('last_time_message', 'desc')
        ->get();

        $this->prepareConversations();



    }
    public $chatReceivers = [];
    public function prepareConversations()
{
    foreach ($this->conversations as $conversation) {
        $this->chatReceivers[$conversation->id] = $this->getChatUserInstance($conversation);
    }
}

    public function render()
    {
        return view('livewire.chat.chatlist')->layout('layouts.app');
    }
}
