<?php

namespace App\Livewire;

use App\Models\Funcionario;
use Livewire\Component;

class FuncionarioIndex extends Component
{
    public function render()
    {
        $funcionarios = Funcionario::all();
        return view('livewire.funcionario-index', compact('funcionarios'));
    }
}
