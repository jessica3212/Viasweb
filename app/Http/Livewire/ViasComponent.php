<?php

namespace App\Http\Livewire;

use App\Models\Via;
use Livewire\Component;

class ViasComponent extends Component
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

    public function mount()
    {
        $this->getVias();
    }

    public function getVias()
    {
        $this->vias = Via::all();
    }

    public function save(){

        $this->validate();

        Via::create($this->createForm);
    
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
        return view('livewire.vias-component');
    }
}
