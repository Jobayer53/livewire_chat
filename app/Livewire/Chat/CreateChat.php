<?php

namespace App\Livewire\Chat;

use App\Models\User;
use Livewire\Livewire;
use Livewire\Component;
use App\Models\Conversation;
use App\Models\Message_store;

class CreateChat extends Component
{

    public $users;
    public $message = 'hello';

    public function checkconversation($receiverId){
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
            redirect()->route('chatWithUser', [
                'conversationId' => $checkConversation->isEmpty()?$createConvo->id :$checkConversation->first()->id ,
                'receiverId' => $receiverId
            ]);


    }
    public function render()
    {
        $this->users = User::where('id', '!=', auth()->user()->id)
            ->orderBy('name')
            ->get();
        return view('livewire.chat.create-chat')
            ->layout('layouts.app', [
                'title' => 'Users'
            ]);
    }
}
