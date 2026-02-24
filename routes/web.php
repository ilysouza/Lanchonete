<?php

use App\Livewire\ClienteCreate;
use Illuminate\Support\Facades\Route;

Route::get('cliente/create', ClienteCreate::class)->name('cliente.create');