<?php

namespace App\Livewire;

use App\Models\Produto;
use Livewire\Component;

class ProdutoEdit extends Component
{
    public $nome;
    public $ingredientes;
    public $valor;
    public $produtoId;

    public function mount($id){
        $produto = Produto::find($id);

        $this->produtoId = $produto->id;
        $this->nome = $produto->nome;
        $this->ingredientes = $produto->ingredientes;
        $this->valor = $produto->valor;
    }

    public function update(){
        $produto = Produto::find($this->produtoId);

        $produto->nome = $this->nome;
        $produto->ingredientes = $this->ingredientes;
        $produto->valor = $this->valor;

        $produto->save();

        session()->flash('success', 'Produto atualizado');
        return redirect()->route('produto.index');
    }

    public function render()
    {
        return view('livewire.produto-edit');
    }
}
