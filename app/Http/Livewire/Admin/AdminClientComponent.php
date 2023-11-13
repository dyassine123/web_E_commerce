<?php

namespace App\Http\Livewire\Admin;

use App\Models\User;
use Livewire\Component;

class AdminClientComponent extends Component
{
    public function render()
    {
        $clients = User::where('utype', 'USR')
            ->orderBy('created_at', 'DESC')
            ->paginate(12);

        return view('livewire.admin.admin-client-component', ['clients' => $clients])
            ->layout('layouts.base');
    }
}


