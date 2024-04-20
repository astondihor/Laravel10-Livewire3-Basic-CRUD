<?php

namespace App\Livewire\Users;

use App\Models\User;
use Livewire\Component;

class ShowUser extends Component
{
    public User $user;

    public function mount($user)
    {
        $this->user = $user;
    }

    public function render()
    {
        return view('livewire.users.show-user');
    }
}