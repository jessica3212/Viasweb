<?php

use App\Http\Controllers\ViaController;
use App\Http\Livewire\ProjectComponent;
use App\Http\Livewire\ShowVia;
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


Route::resource('biblioteca/vias', ViaController::class)->names('vias');

Route::get('proyectos', ProjectComponent::class)->name('proyectos');