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

    public $users, $auth;
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
        $this->mount();
        $this->dispatch('refresh')->to('chat.chatlist');
    }


    public function checkconversation($receiverId)
    {
        // dd($receiverId);
        $conversation = Conversation::where(function ($query) use ($receiverId) {
            $query->where('receiver_id', $this->auth->id)
                ->where('sender_id', $receiverId);
        })->orWhere(function ($query) use ($receiverId) {
                $query->where('receiver_id', $receiverId)
                    ->where('sender_id', $this->auth->id);
        })
        ->first();

        if (!$conversation) {
            $conversation = new Conversation();
            $conversation->sender_id = $this->auth->id;
            $conversation->receiver_id = $receiverId;
            $conversation->last_time_message = now();
            $conversation->save();
        }



        $this->dispatch('chatUserSelected', conversation: $conversation->id,  receiver: $receiverId)->to('chat.chatlist');
    }


    public function mount()
    {
        $this->auth = auth()->user();
        $this->users = User::where('id', '!=', $this->auth->id)
            ->where('is_online', true)
            ->orderByRaw("country = ? DESC", [$this->auth->country])
            ->orderBy('name')
            ->get();
    }



    public function render()
    {

        return view('livewire.chat.create-chat')
            ->layout('layouts.app',);
    }
}
