<?php

use App\Http\Livewire\ViasTable;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('acercade', function () {
    return view('acercade');
})->name('acercade');

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');

// Route::get('/vias', ViasTable::class)->name('vias');

Route::get('vias', ViasTable::class)->name('vias');