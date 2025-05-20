<?php

namespace App\Console\Commands;

use App\Models\User;
use App\Models\Conversation;
use App\Models\Message_store;
use Illuminate\Console\Command;

class DeleteInactiveUsersWithoutConversations extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'app:delete-inactive-users-without-conversations';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Delete inactive users without conversations';

    /**
     * Execute the console command.
     */
    public function handle()
    {
        $users = User::where('is_online', 0)->get();

        $users->each(function ($user) {
            $hasConversations = Conversation::where('sender_id', $user->id)
                ->orWhere('receiver_id', $user->id)
                ->get();
            if ($hasConversations->count() > 0) {
                    foreach ($hasConversations as $conversation) {
                        $receiver = null;
                        if ($conversation->receiver_id == $user->id) {
                            $receiver = User::find($conversation->sender_id);
                        } else {
                            $receiver = User::find($conversation->receiver_id);
                        }
                        Message_store::where('conversation_id', $conversation->id)->delete();
                        $conversation->delete();
                    }
                    $user->delete();
                    if($receiver->is_online == 0)$receiver->delete();


            }else{
                $user->delete();
            }
        });
    }
}
