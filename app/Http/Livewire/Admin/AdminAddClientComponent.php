<?php

namespace App\Http\Livewire\Admin;

use Livewire\Component;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class AdminAddClientComponent extends Component
{
    public $name;
    public $email;
    public $password;
    public $password_confirmation; // Add this property for password confirmation

    public function create()
    {
        $this->validate([
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required'],
            // 'password' => ['required'], // Adjust the minimum length as needed
        ]);

        User::create([
            'name' => $this->name,
            'email' => $this->email,
            'password' => Hash::make($this->password),
        ]);

        session()->flash('message', 'Client has been created successfully !!');

        // Clear the form fields after successful submission
        $this->resetForm();
    }

    public function resetForm()
    {
        $this->name = '';
        $this->email = '';
        $this->password = '';
        $this->password_confirmation = '';
    }

    public function render()
    {
        return view('livewire.admin.admin-add-client-component')->layout('layouts.base');
    }
}
