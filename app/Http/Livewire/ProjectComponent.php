<?php

namespace App\Http\Livewire;

use App\Models\contrato_proyectos;
use App\Models\ViasTable;
use Illuminate\Support\Facades\Storage;
use Livewire\Component;
use Livewire\WithFileUploads;

class ProjectComponent extends Component
{
    use WithFileUploads;

    public $documentos, $documento, $vias, $rand;

    protected $listeners = ['delete'];

    public $createForm=[
        'nombre' => null,
        'url_file' => null,
        'estado' => null,
        'tipo' => null,
        'via_id' => '',
    ];

    // public $editForm=[
    //     'open' => false,
    //     'nombre' => null,
    //     'url_file' => null,
    //     'estado' => null,
    //     'tipo' => null,
    //     'via_id' => null,
    // ];

    public $rules=[
        'createForm.nombre' => 'required',
        'createForm.url_file' => 'required|file|max:2048',
        'createForm.estado' => 'required',
        'createForm.tipo' => 'required',
        'createForm.via_id' => 'required',
    ];


    public function mount()
    {
        $this->getDocumentos();
        $this->getVias();
        $this->rand = rand();
    }

    public function getDocumentos()
    {
        $this->documentos = contrato_proyectos::all();
    }

    public function getVias()
    {
        $this->vias = ViasTable::all();
    }

    public function save()
    {
        $this->validate();

        $file = $this->createForm['url_file']->store('documentos');

        contrato_proyectos::create([
            'nombre' => $this->createForm['nombre'],
            'estado' => $this->createForm['estado'],
            'tipo' => $this->createForm['tipo'],
            'via_id' => $this->createForm['via_id'],
            'url_file' => $file,
        ]);

        $this->rand=rand();

        $this->reset('createForm');

        $this->getDocumentos();
    }

    // public function edit(contrato_proyectos $documento)
    // {
    //     $this->maquina = $maquina;
    //     $this->editForm['open'] = true;
    //     $this->editForm['municipio'] = $maquina->municipio;
    //     $this->editForm['tramo'] = $maquina->tramo;
    //     $this->editForm['afirmado'] = $maquina->afirmado;
    //     $this->editForm['pavimentada'] = $maquina->pavimentada;
    //     $this->editForm['terciarias'] = $maquina->terciarias;
    // }

    // public function update()
    // {
    //    $this->validate([
    //     'editForm.municipio' => 'required',
    //     'editForm.tramo' => 'required',
    //     'editForm.afirmado' => 'required',
    //     'editForm.pavimentada' => 'required',
    //     'editForm.terciarias' => 'required',
    //    ]); 

    //    $this->maquina->update($this->editForm);
    //    $this->reset('editForm');
    //    $this->getMaquinaria();
    // }

    // public function delete(Maquinaria $maquina)
    // {
    //     $maquina->delete();
    //     $this->getMaquinaria();
    // }
    
    
    public function render()
    {
        return view('livewire.project-component');
    }
}
