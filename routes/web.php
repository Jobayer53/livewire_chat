<?php

use App\Livewire\Chat\Main;
use App\Livewire\Chat\Chatlist;
use App\Livewire\Chat\CreateChat;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Session;

Route::get('/users', CreateChat::class)->name('users');
Route::get('/chat', Main::class)->name('chat');
Route::get('/chat/{conversationId}/{receiverId}', Main::class)->name('chatWithUser');
// Route::get('test/{conversation_id}/{receiver_id}', function ($conversation_id, $receiver_id) {
//     return app(Chatlist::class)->test($conversation_id, $receiver_id);
// })->name('test');




// Route::view('/', 'welcome');
Route::get('/',function(){
    return redirect()->route('register');
})->name('forceRegister');

Route::post('/logout', function () {
    return app(CreateChat::class)->logoutUser();
})->name('logout');
// Route::post('/logout', function () {
//     Auth::guard('web')->logout();
//     Session::invalidate();
//     Session::regenerateToken();
//     return redirect('/');
// })->name('logout');


Route::view('dashboard', 'dashboard')
    ->middleware(['auth', 'verified'])
    ->name('dashboard');

Route::view('profile', 'profile')
    ->middleware(['auth'])
    ->name('profile');

require __DIR__.'/auth.php';


