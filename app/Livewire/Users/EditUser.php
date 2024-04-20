<?php

namespace App\Livewire\Users;

use App\Models\User;
use Livewire\Component;
use App\Livewire\Forms\UserForm;

class EditUser extends Component
{
    public UserForm $form;

    public $editMode = true;

    public function mount(User $user)
    {
        $this->form->setUser($user);
    }

    public function save()
    {
        $this->form->update();

        session()->flash( 'success', 'User updated successfully!!');

        return $this->redirect('/users');
    }

    public function render()
    {
        return view('livewire.users.create-user');
    }
}