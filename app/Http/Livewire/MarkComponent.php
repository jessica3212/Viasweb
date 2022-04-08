<?php

namespace App\Http\Livewire;

use App\Models\Via;
use Livewire\Component;

class MarkComponent extends Component
{
    public $via;

    public function mount(Via $via)
    {
        $this->via = $via;
    }

    public function render()
    {
        return view('livewire.mark-component');
    }
}
