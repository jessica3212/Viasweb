<?php

namespace App\Http\Livewire;

use App\Models\Via;
use Livewire\Component;

class ViasTable extends Component
{

    public $vias, $via; 

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

    public $editForm = [

        'open' => false,

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
       
    ];

    public function mount()
    {
        $this->getVias();
    }

    public function getVias()
    {
        $this->vias = Via::all();
    }

    public function save()
    {

        $this->validate();

        Via::create([

            'codigo_via' => $this->createForm['codigo_via'], 
            'competencia' => $this->createForm['competencia'],
            'responsable' => $this->createForm['responsable'],
            'orden_resolucion' => $this->createForm['orden_resolucion'],
            'nombre_via' => $this->createForm['nombre_via'],
            'longitud' => $this->createForm['longitud'],
            'ancho_prom' => $this->createForm['ancho_prom'],

            'pr_inicio' => $this->createForm['pr_inicio'],
            'pr_final' => $this->createForm['pr_final'],

            'ubicacion_desde' => $this->createForm['ubicacion_desde'],
            'ubicacion_hasta' => $this->createForm['ubicacion_hasta'],

            'pav_bueno' => $this->createForm['pav_bueno'],
            'pav_regular' => $this->createForm['pav_regular'],
            'pav_malo' => $this->createForm['pav_malo'],

            'afir_bueno' => $this->createForm['afir_bueno'],
            'afir_regular' => $this->createForm['afir_regular'],
            'afir_malo' => $this->createForm['afir_malo'],

            'tierra_bueno' => $this->createForm['tierra_bueno'],
            'tierra_regular' => $this->createForm['tierra_regular'],
            'tierra_malo' => $this->createForm['tierra_malo'],

            'mej_bueno' => $this->createForm['mej_bueno'],
            'mej_regular' => $this->createForm['mej_regular'],
            'mej_malo' => $this->createForm['mej_malo'],

            'inicio_longitud' => $this->createForm['inicio_longitud'],
            'inicio_latitud' => $this->createForm['inicio_latitud'],
            'inicio_altura' => $this->createForm['inicio_altura'],

            'fin_longitud' => $this->createForm['fin_longitud'],
            'fin_latitud' => $this->createForm['fin_latitud'],
            'fin_altura' => $this->createForm['fin_altura'],

        ]);

        $this->reset('createForm');
        $this->getVias();

    }

    public function edit(Via $via)
    {
        $this->via = $via;

        $this->editForm['open'] = true;

        $this->editForm['codigo_via'] = $via->codigo_via;
        $this->editForm['competencia'] = $via->competencia;
        $this->editForm['responsable'] = $via->responsable;
        $this->editForm['orden_resolucion'] = $via->orden_resolucion;
        $this->editForm['nombre_via'] = $via->nombre_via;
        $this->editForm['longitud'] = $via->longitud;
        $this->editForm['ancho_prom'] = $via->ancho_prom;

        $this->editForm['pr_inicio'] = $via->pr_inicio;
        $this->editForm['pr_final'] = $via->pr_final;

        $this->editForm['ubicacion_desde'] = $via->ubicacion_desde;
        $this->editForm['ubicacion_hasta'] = $via->ubicacion_hasta;

        $this->editForm['pav_bueno'] = $via->pav_bueno;
        $this->editForm['pav_regular'] = $via->pav_regular;
        $this->editForm['pav_malo'] = $via->pav_malo;

        $this->editForm['afir_bueno'] = $via->afir_bueno;
        $this->editForm['afir_regular'] = $via->afir_regular;
        $this->editForm['afir_malo'] = $via->afir_malo;

        $this->editForm['tierra_bueno'] = $via->tierra_bueno;
        $this->editForm['tierra_regular'] = $via->tierra_regular;
        $this->editForm['tierra_malo'] = $via->tierra_malo;

        $this->editForm['mej_bueno'] = $via->mej_bueno;
        $this->editForm['mej_regular'] = $via->mej_regular;
        $this->editForm['mej_malo'] = $via->mej_malo;

        $this->editForm['inicio_longitud'] = $via->inicio_longitud;
        $this->editForm['inicio_latitud'] = $via->inicio_latitud;
        $this->editForm['inicio_altura'] = $via->inicio_altura;

        $this->editForm['fin_longitud'] = $via->fin_longitud;
        $this->editForm['fin_latitud'] = $via->fin_latitud;
        $this->editForm['fin_altura'] = $via->fin_altura;
    
    }

    public function update()
    {
       $this->via->update($this->editForm);
       $this->reset('editForm');
       $this->getVias();
    }

    public function delete(Via $via)
    {
        $via->delete();
        $this->getVias();
    }

    public function render()
    {
        return view('livewire.vias-table');
    }
}

