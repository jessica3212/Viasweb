<?php

namespace App\Http\Controllers;

use App\Models\Mark;
use App\Models\Via;
use Illuminate\Http\Request;

class MarkController extends Controller
{
    public function save(Via $via, Request $request)
    {
        Mark::create([
            'via_id' => $via->id,
            'data' => $request->data,
        ]);
        session()->flash('flash.banner', '¡Se mapeo con éxito!');
        session()->flash('flash.bannerStyle', 'success');
        return redirect()->route('vias.show', $via);
    }
}
