<?php

use App\Http\Controllers\ChatController;
use App\Livewire\Chat\Main;
use App\Livewire\Chat\Chatlist;
use App\Livewire\Chat\CreateChat;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Session;







// Route::view('/', 'welcome');
Route::get('/',function(){
    return redirect()->route('register');
})->name('forceRegister');

Route::middleware(['auth'])->group(function () {
    Route::get('/chat', [ChatController::class, 'chat'])->name('chat');
});


Route::get('dashboard', function () {
    return redirect()->route('chat');
})->middleware(['auth', 'verified'])->name('dashboard');


Route::view('profile', 'profile')
    ->middleware(['auth'])
    ->name('profile');

require __DIR__.'/auth.php';


