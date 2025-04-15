<?php

use App\Livewire\Chat\Chatlist;
use Illuminate\Support\Facades\Route;
use App\Livewire\Chat\CreateChat;
use App\Livewire\Chat\Main;

Route::get('/users', CreateChat::class)->name('users');
Route::get('/chat', Main::class)->name('chat');
Route::get('/chat/{conversationId}/{receiverId}', Main::class)->name('chatWithUser');




Route::view('/', 'welcome');

Route::view('dashboard', 'dashboard')
    ->middleware(['auth', 'verified'])
    ->name('dashboard');

Route::view('profile', 'profile')
    ->middleware(['auth'])
    ->name('profile');

require __DIR__.'/auth.php';


