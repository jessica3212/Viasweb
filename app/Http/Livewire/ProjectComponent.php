<?php

namespace App\Http\Livewire;

use App\Models\contrato_proyectos;
use App\Models\Via;
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
        $this->vias = Via::all();
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
    
    public function delete($id)
    {
        $documento = contrato_proyectos::find($id);
        Storage::delete($documento->url_file);
        $documento->delete();
        $this->getDocumentos();
    }
    
    public function render()
    {
        return view('livewire.project-component');
    }
}
