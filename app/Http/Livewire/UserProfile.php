<?php

namespace App\Http\Livewire;

use Livewire\Component;

class UserProfile extends Component
{
    public $user;

    public function render()
    {
        return view('livewire.user-profile');
    }
}
