<?php

namespace App\Livewire;

use App\Models\Cliente;
use Livewire\Component;

class ClienteCreate extends Component
{
    public $nome;
    public $endereco;
    public $telefone;
    public $cpf;
    public $email;
    public $senha;

    public function store(){
        Cliente::create([
            'nome' => $this->nome,
            'endereco' => $this->endereco,
            'telefone' => $this->telefone,
            'cpf' => $this->cpf,
            'email' => $this->email,
            'senha' => $this->senha
        ]);

    session()->flash('success', 'Cadastrado');
    return redirect()->route('cliente.index');
    }

    public function render()
    {
        return view('livewire.cliente-create');
    }
}
