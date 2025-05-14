<?php

namespace App\Livewire\Chat;

use App\Models\User;
use Livewire\Component;
use App\Models\Conversation;
use App\Models\Message_store;
use App\Events\MessageSent;
use App\Events\MessageRead;
use GuzzleHttp\Psr7\Message;
use Illuminate\Support\Facades\Broadcast;

class Chatbox extends Component
{
    public $selectedConversation;
    public $receiverInstance;
    public $messageCount;
    public $messages;
    public $paginateVar = 10;
    public $body;
    public $auth, $createdMessage;


    // public $body;

    // public $name;
    // protected $listeners = ['loadConversation', 'pushMessage', 'loadMoreMessages'];

    public function getListeners()
    {
        $auth_id = $this->auth->id;
        return [
            "echo-private:chat.{$auth_id},.MessageSent" => 'broadcastedMessageReceived',
            "echo-private:chat.{$auth_id},.MessageRead" => 'broadcastedMessageRead',
            'loadConversation',
            'pushMessage',
            'broadcastMessageRead',
            'resetChat',
            'resetBodyData',
            'nullMessages'

        ];
    }

    public function broadcastedMessageRead($event)
    {
        if ($this->selectedConversation) {
            if ((int)$this->selectedConversation->id === (int)$event['conversation_id']) {
                $this->dispatch('markAsRead');
            }
        }
    }
    public function resetChat()
    {
        $this->selectedConversation = null;
        $this->receiverInstance = null;
        $this->messages =null;
    }
    public function broadcastedMessageReceived($event)
    {
        $this->dispatch('refresh')->to('chat.chatlist');
        $broadcastMessage = Message_store::find($event['message_id']);
        if ($this->selectedConversation) {
            if ((int)$this->selectedConversation->id == (int)$event['conversation_id']) {
                $broadcastMessage->read = 1;
                $broadcastMessage->save();
                $this->pushMessage($broadcastMessage->id);
                $this->dispatch('broadcastMessageRead')->to('chat.chatbox');
            }
        }
        if ($broadcastMessage->read == 0) {
            $this->dispatch('newMessage', true);
        } else {
            $this->dispatch('newMessage', false);
        }
    }
    public function broadcastMessageRead()
    {

        Broadcast(new MessageRead($this->selectedConversation->id, $this->receiverInstance->id));
    }
    // public function loadMoreMessages()
    // {
    //     $this->paginateVar += 10;
    //     $this->messageCount = Message_store::where('conversation_id', $this->selectedConversation->id)
    //         ->count();

    //     $this->messages = Message_store::where('conversation_id', $this->selectedConversation->id)
    //         ->skip($this->messageCount - $this->paginateVar)
    //         ->take($this->paginateVar)
    //         ->get();

    // }


    public function pushMessage(Message_store $message)
    {
        // $createdMessage = Message_store::find($message_id);
        $this->messages->push($message);
        $this->dispatch('rowChatToBottom');
    }


    public function loadConversation(Conversation $conversation, User $receiver)
    {

        $this->selectedConversation = $conversation;
        $this->receiverInstance = $receiver;

        $query = Message_store::where('conversation_id', $this->selectedConversation->id);
        $this->messageCount = $query->count();
        $this->messages = $query->get();

        if ($this->messageCount > 0) {
            $this->dispatch('chatSelected');
          $query
                ->where('receiver_id', $this->auth->id)
                ->where('read', 0)
                ->update(['read' => 1]);
            $this->dispatch('newMessage', false);
            $this->dispatch('refresh')->to('chat.chatlist');
            $this->broadcastMessageRead();
        }
    }


    public function sendMessage()
    {

        if ($this->body == null) {
            return null;
        }
        $createdMessage = new Message_store();
        $createdMessage->body = $this->body;

        $createdMessage->conversation_id = $this->selectedConversation->id;
        $createdMessage->sender_id = $this->auth->id;
        $createdMessage->receiver_id = $this->receiverInstance->id;
        $createdMessage->save();
        $this->pushMessage($createdMessage);
        $this->selectedConversation->last_time_message = $createdMessage->created_at;
        $this->selectedConversation->save();
        $this->createdMessage = $createdMessage;

        $this->dispatch('refresh')->to('chat.chatlist');
        $this->reset('body');
        // $this->dispatch('resetBodyData')->to('chat.chatbox');
        $this->dispatchMessageSent();
    }
    public function dispatchMessageSent(){
        Broadcast(new MessageSent(
           $this->auth,
            $this->createdMessage,
            $this->selectedConversation,
            $this->receiverInstance
        ));
    }

    public function mount()
    {
        $this->auth = auth()->user();
    }

    public function render()
    {
        return view('livewire.chat.chatbox')->layout('layouts.app');
    }
}
