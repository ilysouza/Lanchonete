<?php

namespace App\Livewire;

use App\Models\Cliente;
use Livewire\Component;

class ClienteIndex extends Component
{
    public function render()
    {
        $clientes = Cliente::all();
        return view('livewire.cliente-index', compact('clientes'));
    }
}
