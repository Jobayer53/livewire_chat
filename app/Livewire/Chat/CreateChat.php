<?php

namespace App\Livewire\Chat;

use Log;
use App\Models\User;
use Livewire\Livewire;
use Livewire\Component;
use App\Models\Conversation;
use App\Models\Message_store;

class CreateChat extends Component
{

    public $users;
    public $message = 'hello';
    // protected $listeners = ['echo:users,LoadUser' => 'refreshUserList',];

    public function getListeners()
    {

        return [
           "echo:users,LoadUser" => "refreshUserList"
        ];
    }
    public function refreshUserList($playload)
    {
        $this->dispatch('usersUpdated');
    }


    public function checkconversation($receiverId)
    {

        $checkConversation = Conversation::where('receiver_id', auth()->user()->id)
            ->where('sender_id', $receiverId)
            ->orWhere('receiver_id', $receiverId)
            ->where('sender_id', auth()->user()->id)
            ->get();
        $createConvo = null;
        if ($checkConversation->isEmpty()) {

            // dd('No conversation found');
            $createConvo = new Conversation();
            $createConvo->sender_id = auth()->user()->id;
            $createConvo->receiver_id = $receiverId;
            $createConvo->last_time_message = now();
            $createConvo->save();
            //message
            // $createMessage = new Message_store();
            // $createMessage->conversation_id = $createConvo->id;
            // $createMessage->sender_id = auth()->user()->id;
            // $createMessage->receiver_id = $receiverId;
            // $createMessage->body = $this->message;
            // $createMessage->save();

            // $createConvo->last_time_message = $createMessage->created_at;
            // $createConvo->save();


        }

        // dd('checkConversation', $checkConversation, 'createConvo', $createConvo);
        //    return $this->redirect(route('chatWithUser', [
        //         'conversationId' => $checkConversation->isEmpty()?$createConvo->id :$checkConversation->first()->id ,
        //         'receiverId' => $receiverId
        //     ]), navigate: true );
        //    return $this->redirect(route('test',[  'conversation_id' => $checkConversation->isEmpty()?$createConvo->id :$checkConversation->first()->id ,    'receiver_id' => $receiverId ]), navigate: true );
        // $this->dispatch('test',conversation_id: $checkConversation->isEmpty()?$createConvo->id :$checkConversation->first()->id, receiver_id: $receiverId)->to('chat.chatlist');
        $this->dispatch(
            'userSelected',
            conversation: $checkConversation->isEmpty() ? $createConvo->id : $checkConversation->first()->id,
            receiver_id: $receiverId
        )->to('chat.chatlist');
    }

    public function mount(){
        $this->users = User::where('id', '!=', auth()->id())
        ->orderByRaw("country = ? DESC", [auth()->user()->country])
        ->orderBy('name')
        ->get();
    }



    public function render()
    {

        return view('livewire.chat.create-chat')
            ->layout('layouts.app', [
                'title' => 'Users'
            ]);
    }
}
