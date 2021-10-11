<?php

use App\Http\Controllers\PlanVial;
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

Route::get('normatividad', function () {
    return view('normatividad');
})->name('normatividad');

Route::middleware(['auth:sanctum', 'verified'])->get('/inicio', function () {
    return view('dashboard');
})->name('dashboard');


Route::resource('biblioteca/vias', ViaController::class)->names('vias');

Route::resource('biblioteca/plan_vial', PlanVial::class)->names('plan_vial');

Route::get('proyectos', ProjectComponent::class)->name('proyectos');