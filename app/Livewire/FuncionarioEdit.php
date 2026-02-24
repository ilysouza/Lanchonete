<?php

namespace App\Livewire;

use App\Models\Funcionario;
use Livewire\Component;

class FuncionarioEdit extends Component
{
    public $nome;
    public $cpf;
    public $email;
    public $senha;
    public $funcionarioId;

    public function mount($id){
        $funcionario = Funcionario::find($id);

        $this->funcionarioId = $funcionario->id;
        $this->nome = $funcionario->nome;
        $this->email = $funcionario->email;
        $this->senha = $funcionario->senha;
    }
    public function update(){
    $funcionario = Funcionario::find($this->funcionarioId);

        $funcionario->nome = $this->nome;
        $funcionario->email = $this->email;
        $funcionario->senha = $this->senha;

        $funcionario->save();

        session()->flash('success', 'Atualizado');
        return redirect()->route('funcionario.index');
    }

    public function render()
    {
        return view('livewire.funcionario-edit');
    }
}
