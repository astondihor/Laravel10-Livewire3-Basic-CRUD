<?php

namespace App\Livewire\Forms;

use Livewire\Form;
use App\Models\User;
use Illuminate\Validation\Rule;
use Livewire\Attributes\Validate;
use Illuminate\Support\Facades\Hash;

class UserForm extends Form
{
    public ?User $user;

    public $name = '';

    public $email = '';

    public $password = '';

    public $password_confirmation = '';

    public function setUser(User $user)
    {
        $this->user = $user;
        $this->name = $user->name;
        $this->email = $user->email;
    }

    public function store()
    {
        $this->validate([
            'name' => [
                'required',
                Rule::unique(User::class),
            ],
            'email' => 'required|email|min:5',
            'password' => 'required|min:6|confirmed'
        ]);

        User::create([
            'name' => $this->name,
            'email' => $this->email,
            'password' => Hash::make($this->password),
        ]);

        $this->reset();
    }

    public function update()
    {
        $this->validate([
            'name' => [
                'required',
                Rule::unique(User::class)->ignore($this->user),
            ],
            'email' => 'required|email|min:5',
            'password' => 'nullable|min:6|confirmed'
        ]);

        if ($this->password) {
            $this->user->update([
                'name' => $this->name,
                'email' => $this->email,
                'password' => Hash::make($this->password),
            ]);
        } else {
            $this->user->update([
                'name' => $this->name,
                'email' => $this->email,
            ]);
        }

        $this->reset();
    }
}