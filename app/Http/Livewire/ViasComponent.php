<?php

namespace App\Http\Livewire;

use App\Models\Via;
use Livewire\Component;
use Livewire\WithPagination;

class ViasComponent extends Component
{
    use WithPagination;

    protected $queryString =['search' => ['except' => '']];
    public $search = '';
    public $perPage = '10';

    // public $vias, $via;

    protected $listeners = ['delete'];

    public $createForm = [

        'codigo_via' => null, 
        'competencia' => null,
        'responsable' => 'Casanare',
        'orden_resolucion' => null,
        'nombre_via' => null,
        'longitud' => null,
        'ancho_prom' => null,

        'pr_inicio' => null,
        'pr_final' => null,

        'ubicacion_desde' => null,
        'ubicacion_hasta' => null,

        'pav_bueno' => null,
        'pav_regular' => null,
        'pav_malo' => null,
        
        'afir_bueno' => null,
        'afir_regular' => null,
        'afir_malo' => null,
     
        'tierra_bueno' => null,
        'tierra_regular' => null,
        'tierra_malo' => null,
    
        'mej_bueno' => null,
        'mej_regular' => null,
        'mej_malo' => null,
    
        'inicio_longitud' => null,
        'inicio_latitud' => null,
        'inicio_altura' => null,

        'fin_longitud' => null,
        'fin_latitud' => null,
        'fin_altura' => null,

    ];

    protected $rules = [     
        'createForm.codigo_via' => 'required',
        'createForm.competencia' => 'required',
        'createForm.responsable' => 'required',
        'createForm.orden_resolucion' => 'required',
        'createForm.nombre_via' => 'required',
        'createForm.longitud' => 'required',
        'createForm.ancho_prom' => 'required',

        'createForm.pr_inicio' => 'required',
        'createForm.pr_final' => 'required',

        'createForm.ubicacion_desde' => 'required',
        'createForm.ubicacion_hasta' => 'required',

        'createForm.pav_bueno' => 'required',
        'createForm.pav_regular' => 'required',
        'createForm.pav_malo' => 'required',
        
        'createForm.afir_bueno' => 'required',
        'createForm.afir_regular' => 'required',
        'createForm.afir_malo' => 'required',
     
        'createForm.tierra_bueno' => 'required',
        'createForm.tierra_regular' => 'required',
        'createForm.tierra_malo' => 'required',
    
        'createForm.mej_bueno' => 'required',
        'createForm.mej_regular' => 'required',
        'createForm.mej_malo' => 'required',
    
        'createForm.inicio_longitud' => 'required',
        'createForm.inicio_latitud' => 'required',
        'createForm.inicio_altura' => 'required',

        'createForm.fin_longitud' => 'required',
        'createForm.fin_latitud' => 'required',
        'createForm.fin_altura' => 'required',       
    ];

    // public function mount()
    // {
    //     $this->getVias();
    // }

    // public function getVias()
    // {
    //     $this->vias = Via::paginate(10)->get();
    // }

    public function save(){

        $this->validate();

        Via::create($this->createForm);
    
        $this->reset('createForm');
    }

    public function delete(Via $via)
    {
        $via->delete();
    }

    public function render()
    {
        return view('livewire.vias-component', ['vias' => Via::where('codigo_via', 'LIKE', "%{$this->search}%" )
        ->orWhere('nombre_via', 'LIKE', "%{$this->search}%")->orWhere('longitud', 'LIKE', "%{$this->search}%")
        ->orderBy('codigo_via')
        ->paginate($this->perPage)]);
    }
}
