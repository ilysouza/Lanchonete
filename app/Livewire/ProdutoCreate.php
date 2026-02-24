<?php

namespace App\Livewire;

use App\Models\Produto;
use Livewire\Component;

class ProdutoCreate extends Component
{
    public $nome;
    public $ingredientes;
    public $valor;

    public function store(){
        Produto::create([
            'nome' => $this->nome,
            'ingredientes' => $this->ingredientes,
            'valor' => $this->valor,
        ]);

    session()->flash('success', 'Produto cadastrado');
    return redirect()->route('produto.index');
    }

    public function render()
    {
        return view('livewire.produto-create');
    }
}
