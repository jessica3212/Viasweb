<?php

use App\Http\Controllers\PlanVial;
use App\Http\Controllers\QgisController;
use App\Http\Controllers\ViaController;
use App\Http\Livewire\MaquinariaComponent;
use App\Http\Livewire\ProjectComponent;

use App\Http\Livewire\ViaComponent;

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

Route::get('entidad', function () {
    return view('entidad');
})->name('entidad');

Route::middleware(['auth:sanctum', 'verified'])->get('/inicio', function () {
    return view('dashboard');
})->name('dashboard');


Route::resource('biblioteca/vias', ViaController::class)->names('vias');

Route::resource('biblioteca/plan_vial', PlanVial::class)->names('plan_vial');

Route::resource('biblioteca/GIS', QgisController::class)->names('GIS');

Route::get('proyectos', ProjectComponent::class)->name('proyectos');


Route::get('maquinaria', MaquinariaComponent::class)->name('maquinaria');