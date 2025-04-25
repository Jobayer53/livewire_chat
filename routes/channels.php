<?php

use App\Models\User;
use Illuminate\Support\Facades\Broadcast;

Broadcast::channel('App.Models.User.{id}', function ($user, $id) {
    return (int) $user->id === (int) $id;
});

Broadcast::channel('chat.{receiver}', function (User $user, $receiver) {
    return (int) $user->id === (int) $receiver;
});
Broadcast::channel('users', function ($user) {
    return true; // Allow all users (authenticated or not) to listen
});
