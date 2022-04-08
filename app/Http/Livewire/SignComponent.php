<?php

namespace App\Http\Livewire;

use App\Models\Sign;
use App\Models\Via;
use Livewire\Component;
use Livewire\WithPagination;

class SignComponent extends Component
{
    use WithPagination;

    protected $queryString =['search' => ['except' => '']];
    public $search = '';
    public $perPage = '10';
    public $vias, $sign;
    public $open = false;

    protected $listeners = ['delete'];

    public $createForm = [
        'abscisa',
        'costado',
        'descripcion',
        'estado_tablero',
        'estado_paral',
        'dimensiones',
        'leyenda',
        'observaciones',
        'cordenadas' => '',
        'via_id' => '',
    ];

    public $editForm = [
        'id',
        'abscisa',
        'costado',
        'descripcion',
        'estado_tablero',
        'estado_paral',
        'dimensiones',
        'leyenda',
        'observaciones',
        'cordenadas',
        'via_id',
    ];

    public $editFormRules = [
        'editForm.abscisa' => 'required|max:255',
        'editForm.costado' => 'required|string|max:255',
        'editForm.descripcion' => 'required|string|max:255',
        'editForm.estado_tablero' => 'required',
        'editForm.estado_paral' => 'required',
        'editForm.dimensiones' => 'required|max:255',
        'editForm.leyenda' => 'required|string|max:255',
        'editForm.observaciones' => 'required|string|max:255',
        'editForm.cordenadas' => 'required',
        'editForm.via_id' => 'required|integer',
    ];

    public function rules(){
        return [
            'createForm.abscisa' => 'required|max:255',
            'createForm.costado' => 'required|string|max:255',
            'createForm.descripcion' => 'required|string|max:255',
            'createForm.estado_tablero' => 'required',
            'createForm.estado_paral' => 'required',
            'createForm.dimensiones' => 'required|max:255',
            'createForm.leyenda' => 'required|string|max:255',
            'createForm.observaciones' => 'required|string|max:255',
            'createForm.cordenadas' => 'required',
            'createForm.via_id' => 'required|integer',
        ];
    }

    public function mount(){
        $this->vias = Via::all();
    }

    public function save(){
        $this->validate();
        Sign::create($this->createForm);
        $this->reset('createForm');
        $this->emit('saved');
    }

    public function edit(Sign $sign){
        $this->open = true;
        $this->resetValidation();
        $this->sign = $sign;
        $this->editForm = $sign->toArray();
    }

    public function update(){
        $this->validate($this->editFormRules);
        $this->sign->update($this->editForm);
        $this->reset('editForm', 'open');
        $this->emit('updated');
    }

    public function delete(Sign $sign){
        $sign->delete();
    }

    public function render()
    {
        return view('livewire.sign-component', ['signs' => Sign::where('abscisa', 'LIKE', "%{$this->search}%")
        ->orWhere('leyenda', 'LIKE', "%{$this->search}%")->orWhere('descripcion', 'LIKE', "%{$this->search}%")
        ->orderByDesc('created_at')
        ->paginate($this->perPage)]);
    }
}
