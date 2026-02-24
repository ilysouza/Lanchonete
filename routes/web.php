<?php

use App\Livewire\ClienteCreate;
use App\Livewire\ClienteEdit;
use App\Livewire\ClienteIndex;
use App\Livewire\FuncionarioCreate;
use App\Livewire\FuncionarioEdit;
use App\Livewire\FuncionarioIndex;
use App\Livewire\ProdutoCreate;
use App\Livewire\ProdutoEdit;
use App\Livewire\ProdutoIndex;
use Illuminate\Support\Facades\Route;

Route::get('cliente/create', ClienteCreate::class)->name('cliente.create');
Route::get('cliente/index', ClienteIndex::class)->name('cliente.index');
Route::get('cliente/edit', ClienteEdit::class)->name('cliente.editar');

Route::get('produto/create', ProdutoCreate::class)->name('produto.create');
Route::get('produto/index', ProdutoIndex::class)->name('produto.index');
Route::get('produto/edit', ProdutoEdit::class)->name('produto.editar');

Route::get('funcionario/create', FuncionarioCreate::class)->name('funcionario.create');
Route::get('funcionario/index', FuncionarioIndex::class)->name('funcionario.index');
Route::get('funcionario/edit', FuncionarioEdit::class)->name('funcionario.editar');