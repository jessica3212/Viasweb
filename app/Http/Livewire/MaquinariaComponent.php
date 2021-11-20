<?php

namespace App\Http\Livewire;

use App\Models\Maquinaria;
use Livewire\Component;

class MaquinariaComponent extends Component
{
    
    public $maquinaria, $maquina;

    protected $listeners = ['delete'];

    public $createForm=[
        'municipio' => null,
        'tramo' => null,
        'afirmado' => null,
        'pavimentada' => null,
        'terciarias' => null,
    ];

    public $editForm=[
        'open' => false,
        'municipio' => null,
        'tramo' => null,
        'afirmado' => null,
        'pavimentada' => null,
        'terciarias' => null,
    ];

    public $rules=[
        'createForm.municipio' => 'required',
        'createForm.tramo' => 'required',
        'createForm.afirmado' => 'required',
        'createForm.pavimentada' => 'required',
        'createForm.terciarias' => 'required',
    ];



    public function mount()
    {
        $this->getMaquinaria();
    }

    public function getMaquinaria()
    {
        $this->maquinaria = Maquinaria::all();
    }

    public function save()
    {
        $this->validate();
        Maquinaria::create($this->createForm);
        $this->reset('createForm');
        $this->getMaquinaria();
    }

    public function edit(Maquinaria $maquina)
    {
        $this->maquina = $maquina;
        $this->editForm['open'] = true;
        $this->editForm['municipio'] = $maquina->municipio;
        $this->editForm['tramo'] = $maquina->tramo;
        $this->editForm['afirmado'] = $maquina->afirmado;
        $this->editForm['pavimentada'] = $maquina->pavimentada;
        $this->editForm['terciarias'] = $maquina->terciarias;
    }

    public function update()
    {
       $this->validate([
        'editForm.municipio' => 'required',
        'editForm.tramo' => 'required',
        'editForm.afirmado' => 'required',
        'editForm.pavimentada' => 'required',
        'editForm.terciarias' => 'required',
       ]); 

       $this->maquina->update($this->editForm);
       $this->reset('editForm');
       $this->getMaquinaria();
    }

    public function delete(Maquinaria $maquina)
    {
        $maquina->delete();
        $this->getMaquinaria();
    }

    public function render()
    {
        return view('livewire.maquinaria-component');
    }
}
