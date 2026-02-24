<?php

namespace App\Livewire;

use App\Models\Produto;
use Livewire\Component;

class ProdutoIndex extends Component
{
    public function delete($id)
    {
        Produto::find($id)->delete();
        session()->flash('message', 'Produto deletado.');
    }
    public function render()
    {
        $produtos = Produto::all();
        return view('livewire.produto-index', compact('produtos'));
    }
}
