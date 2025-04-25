<?php

namespace App\Livewire\Auth;

use Livewire\Component;
use App\Livewire\Actions\Logout;

class LogoutButton extends Component
{
    

    public function render()
    {
        return view('livewire.auth.logout-button');
    }
}
