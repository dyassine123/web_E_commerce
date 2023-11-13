<?php

namespace App\Http\Livewire\Admin;

use Livewire\Component;
use App\Models\Contact;

class AdminContatComponent extends Component
{
    public function render()
    {
        $contacts = Contact::paginate(12);
        return view('livewire.admin.admin-contat-component', ['contacts' => $contacts])->layout('layouts.base');
    }
}

