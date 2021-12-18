<?php

namespace App\Http\Livewire;

use App\Models\Via;
use Livewire\Component;

class UpdateViaComponent extends Component
{
   public $via;

   public $editForm = [

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
        'editForm.codigo_via' => 'required',
        'editForm.competencia' => 'required',
        'editForm.responsable' => 'required',
        'editForm.orden_resolucion' => 'required',
        'editForm.nombre_via' => 'required',
        'editForm.longitud' => 'required',
        'editForm.ancho_prom' => 'required',

        'editForm.pr_inicio' => 'required',
        'editForm.pr_final' => 'required',

        'editForm.ubicacion_desde' => 'required',
        'editForm.ubicacion_hasta' => 'required',

        'editForm.pav_bueno' => 'required',
        'editForm.pav_regular' => 'required',
        'editForm.pav_malo' => 'required',
        
        'editForm.afir_bueno' => 'required',
        'editForm.afir_regular' => 'required',
        'editForm.afir_malo' => 'required',
     
        'editForm.tierra_bueno' => 'required',
        'editForm.tierra_regular' => 'required',
        'editForm.tierra_malo' => 'required',
    
        'editForm.mej_bueno' => 'required',
        'editForm.mej_regular' => 'required',
        'editForm.mej_malo' => 'required',
    
        'editForm.inicio_longitud' => 'required',
        'editForm.inicio_latitud' => 'required',
        'editForm.inicio_altura' => 'required',

        'editForm.fin_longitud' => 'required',
        'editForm.fin_latitud' => 'required',
        'editForm.fin_altura' => 'required',       
    ];

   public function mount(Via $via)
    {
        $this->via = $via;

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
        $this->validate();

        $this->via->update($this->editForm);

        session()->flash('flash.banner', '¡ la vía se ha modificado correctamente !');
        session()->flash('flash.bannerStyle', 'success');

        return redirect()->route('vias.index');
        
        
    }

    public function render()
    {
        return view('livewire.update-via-component');
    }
}
