<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Contact; // Add this line to import the Contact model

class ContatComponent extends Component
{
    public $name;
    public $email;
    public $phone;
    public $comment;

    public function updated($fields)
    {
        $this->validateOnly($fields, [
            'name' => 'required',
            'email' => 'required|email',
            'phone' => 'required',
            'comment' => 'required'
        ]);
    }

    public function sendMessage()
    {
        $this->validate([
            'name' => 'required',
            'email' => 'required|email',
            'phone' => 'required',
            'comment' => 'required'
        ]);

        $contact = new Contact();
        $contact->name = $this->name;
        $contact->email = $this->email;
        $contact->phone = $this->phone;
        $contact->comment = $this->comment;
        $contact->save();
        
        session()->flash('message', 'Thanks, Your message has been sent successfully!');
        
        // Clear input fields after sending the message
        $this->reset(['name', 'email', 'phone', 'comment']);
    }

    public function render()
    {
        return view('livewire.contat-component')->layout('layouts.base');
    }
}
