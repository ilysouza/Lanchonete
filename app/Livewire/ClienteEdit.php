<?php

namespace App\Livewire;

use App\Models\Cliente;
use Livewire\Component;

class ClienteEdit extends Component
{
    public $nome;
    public $endereço;
    public $telefone;
    public $cpf;
    public $email;
    public $senha;
    public $clienteId;

    public function mount($id){
        $cliente = Cliente::find($id);

        $this->clienteId = $cliente->id;
        $this->nome = $cliente->nome;
        $this->endereço = $cliente->endereço;
        $this->telefone = $cliente->telefone;
    }

    public function update(){
        $cliente = Cliente::find($this->clienteId);

        $cliente->nome = $this->nome;
        $cliente->endereço = $this->endereço;
        $cliente->telefone = $this->telefone;
        $cliente->email = $this->email;
        $cliente->senha = $this->senha;

        $cliente->save();

        session()->flash('success', 'Atualizado');
        return redirect()->route('cliente.index');
    }

    public function render()
    {
        return view('livewire.cliente-edit');
    }
}
