<?php

namespace App\Livewire;

use App\Models\Funcionario;
use Livewire\Component;

class FuncionarioCreate extends Component
{
    public $nome;
    public $cpf;
    public $email;
    public $senha;

    public function store(){
        Funcionario::create([
            'nome' => $this->nome,
            'cpf' => $this->cpf,
            'email' => $this->email,
            'senha' => $this->senha,

        ]);

    session()->flash('success', 'Cadastrado');
    return redirect()->route('funcionario.index');
    }
    public function render()
    {
        return view('livewire.funcionario-create');
    }
}
