<?php

namespace App\Livewire\Chat;

use App\Models\Conversation;
use App\Models\User;
use Livewire\Component;
use Livewire\Volt\Compilers\Mount;

class Chatlist extends Component
{
    public $auth_id;
    public $conversations;
    public $receiverInstance;
    public $name;
    public $selectedConversation;
    public $singleConvo, $singleConversation = null, $singleReceiver;


    protected $listeners = ['chatUserSelected', 'refresh','resetChat','userSelected','test'];


    public function resetChat(){
        $this->selectedConversation = null;
        $this->receiverInstance = null;
        $this->singleConversation = null;
    }
     public function refresh(){
        $this->singleConversation = null;
        $this->mount();
    }
    // public function test($conversation_id, $receiver_id){
    //     // dd('asdf');
    //     // dd($conversation_id, $receiver_id);
    //     $this->dispatch('userSelected',
    //         conversation: $conversation_id,
    //         receiver_id: $receiver_id
    //     )->to('chat.chatlist');
    // }
    // protected $listeners = ['demoTest'];
    public function userSelected($conversation, $receiver_id){
        // dd('here');
        $data = Conversation::find($conversation);
        if(!$data->message->first()){

            $this->singleConversation = Conversation::find($conversation);
        }
        // if($this->singleConvo ){
        //     $this->singleConversation = Conversation::where('id', $this->singleConvo)
        //     ->orderBy('last_time_message', 'desc')
        //     ->get();
        // }

        $this->chatUserSelected($conversation, $receiver_id);
    }


    public function chatUserSelected( $conversation, $receiver_id){
// dd('asdfasdf');
        $conversation = Conversation::find($conversation);
        $this->selectedConversation = $conversation;
        $receiverInstance = User::find($receiver_id);
        $this->dispatch('loadConversation',
            conversation: $this->selectedConversation,
            receiver: $receiverInstance
            )->to('chat.chatbox');
        $this->dispatch('updateSendMessage',conversation:$this->selectedConversation,receiver:$receiverInstance)->to('chat.send-message');

    }


    public function getChatUserInstance(Conversation $conversation, $request){
        $this->auth_id = auth()->id();
        if($conversation->sender_id == $this->auth_id){
            $this->receiverInstance = User::firstWhere('id', $conversation->receiver_id);
        }else{
            $this->receiverInstance = User::firstWhere('id', $conversation->sender_id);
        }
        if(isset($request)){
            return $this->receiverInstance->$request;
        }
    }
  
    public function mount(){
        $this->auth_id = auth()->id();
        $this->conversations = Conversation::where('receiver_id', $this->auth_id)
            ->orWhere('sender_id', $this->auth_id)
            ->orderBy('last_time_message', 'desc')
            ->get();



    }

    public function render()
    {
        $users = User::
        where('id', '!=', auth()->id())
        ->get();
        // $this->dispatch('chatUserSelected');
        return view('livewire.chat.chatlist',[
            'users' => $users,

        ])->layout('layouts.app', [
            'title' => 'Chat List'
        ]);
    }
}
