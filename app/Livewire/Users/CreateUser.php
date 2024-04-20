<?php

namespace App\Livewire\Users;

use Livewire\Component;
use App\Livewire\Forms\UserForm;

class CreateUser extends Component
{
    public UserForm $form;

    public $editMode = false;

    public function save()
    {
        $this->form->store();

        session()->flash( 'success', 'User created successfully!!');

        return $this->redirect('/users');
    }

    public function render()
    {
        return view('livewire.users.create-user');
    }
}