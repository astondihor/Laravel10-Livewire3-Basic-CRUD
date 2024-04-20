<?php

namespace App\Livewire\Users;

use App\Models\User;
use Livewire\Component;
use Livewire\WithPagination;

class UsersIndex extends Component
{
    use WithPagination;

    public function destroy(User $user)
    {
        $user->delete();
    }

    public function render()
    {

        return view('livewire.users.users-index', [
            'users' => User::latest()->paginate(10)
        ]);
    }
}