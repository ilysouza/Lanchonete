<?php

namespace App\Livewire;

use App\Models\Cliente;
use App\Models\Produto;
use Livewire\Component;

class ClienteIndex extends Component
{
    public function delete($id)
    {
        Cliente::find($id)->delete();
        session()->flash('message', 'Cliente deletado.');
    }
    public function render()
    {
        $clientes = Cliente::all();
        return view('livewire.cliente-index', compact('clientes'));
    }
}
