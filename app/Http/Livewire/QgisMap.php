<?php

namespace App\Http\Livewire;

use App\Models\Mark;
use Livewire\Component;

class QgisMap extends Component
{
    public $data;

    public function mount(){

        $this->data = Mark::select('data')->get();

    }

    public function render()
    {
        return view('livewire.qgis-map');
    }
}
