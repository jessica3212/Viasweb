<?php

namespace App\Http\Livewire;

use App\Models\Maquinaria;
use Livewire\Component;
use Livewire\WithPagination;

class MaquinariaComponent extends Component
{
    use WithPagination;

    protected $queryString =['search' => ['except' => '']];
    public $search = '';
    public $perPage = '10';
    
    public $maquina;

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
        'createForm.municipio' => 'required|string|max:255',
        'createForm.tramo' => 'required|string|max:255',
        'createForm.afirmado' => 'required|numeric',
        'createForm.pavimentada' => 'required|numeric',
        'createForm.terciarias' => 'required|numeric',
    ];

    public function save()
    {
        $this->validate();
        Maquinaria::create($this->createForm);
        $this->reset('createForm');
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
    }

    public function delete(Maquinaria $maquina)
    {
        $maquina->delete();
    }

    public function render()
    {
        return view('livewire.maquinaria-component', ['maquinaria' => Maquinaria::where('municipio', 'LIKE', "%{$this->search}%" )
        ->orWhere('tramo', 'LIKE', "%{$this->search}%")
        ->orderBy('created_at', 'desc')
        ->paginate($this->perPage)]);
    }
}
