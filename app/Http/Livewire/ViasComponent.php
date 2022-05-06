<?php

namespace App\Http\Livewire;

use App\Models\Municipio;
use App\Models\Via;
use Livewire\Component;
use Livewire\WithPagination;

class ViasComponent extends Component
{
    use WithPagination;

    protected $queryString =['search' => ['except' => '']];
    public $search = '';
    public $perPage = '10';
    public $municipios;

    // public $vias, $via;

    protected $listeners = ['delete'];

    public $createForm = [

        'codigo_via' => null, 
        'competencia' => 'Departamento',
        'responsable' => 'Casanare',
        'orden_resolucion' => 'Segundo',
        'nombre_via' => null,
        'longitud' => null,
        'ancho_prom' => null,

        'pr_inicio' => null,
        'pr_final' => null,

        'ubicacion_desde_id' => "",
        'ubicacion_hasta_id' => "",

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
        'createForm.longitud' => 'required|numeric',
        'createForm.ancho_prom' => 'required|numeric',

        'createForm.pr_inicio' => 'required|numeric',
        'createForm.pr_final' => 'required|numeric',

        'createForm.ubicacion_desde_id' => 'required',
        'createForm.ubicacion_hasta_id' => 'required',

        'createForm.pav_bueno' => 'required|numeric',
        'createForm.pav_regular' => 'required|numeric',
        'createForm.pav_malo' => 'required|numeric',
        
        'createForm.afir_bueno' => 'required|numeric',
        'createForm.afir_regular' => 'required|numeric',
        'createForm.afir_malo' => 'required|numeric',
     
        'createForm.tierra_bueno' => 'required|numeric',
        'createForm.tierra_regular' => 'required|numeric',
        'createForm.tierra_malo' => 'required|numeric',
    
        'createForm.mej_bueno' => 'required|numeric',
        'createForm.mej_regular' => 'required|numeric',
        'createForm.mej_malo' => 'required|numeric',
    
        'createForm.inicio_longitud' => 'required|numeric',
        'createForm.inicio_latitud' => 'required|numeric',
        'createForm.inicio_altura' => 'required|numeric',

        'createForm.fin_longitud' => 'required|numeric',
        'createForm.fin_latitud' => 'required|numeric',
        'createForm.fin_altura' => 'required|numeric',       
    ];

    public function mount()
    {
        $this->municipios = Municipio::all();
    }

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
        ->orderByDesc('created_at')
        ->paginate($this->perPage)]);
    }
}
