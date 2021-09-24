<?php

namespace App\Http\Livewire;

use App\Models\ViasTable as ModelsViasTable;
use Illuminate\Database\Eloquent\Model;
use Livewire\Component;

class ViasTable extends Component
{

    public $vias, $via; 
    // protected $listeners=['delete'];

    public $createForm = [
        'codigo_via' => null, 
        'competencia' => null,
        'responsable' => null,
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
        'pav_total_km' => null,
        'afir_bueno' => null,
        'afir_regular' => null,
        'afir_malo' => null,
        'afir_total_km' => null,
        'tierra_bueno' => null,
        'tierra_regular' => null,
        'tierra_malo' => null,
        'tierra_total_km' => null,
        'mej_bueno' => null,
        'mej_regular' => null,
        'mej_malo' => null,
        'mej_total_km' => null,
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
       
    ];

    public function mount()
    {
        $this->getVias();
    }

    public function getVias()
    {
        $this->vias = ModelsViasTable::all();
    }

    public function save()
    {

        $this->validate();

        $via = ModelsViasTable::create([

            'codigo_via' => $this->createForm['codigo_via'], 
            'competencia' => $this->createForm['competencia'],
            'responsable' => $this->createForm['responsable'],
            'orden_resolucion' => $this->createForm['orden_resolucion'],
            'nombre_via' => $this->createForm['nombre_via'],
            'longitud' => $this->createForm['longitud'],
            'ancho_prom' => $this->createForm['ancho_prom'],

        ]);
        
    }

    public function render()
    {
        return view('livewire.vias-table');
    }
}

