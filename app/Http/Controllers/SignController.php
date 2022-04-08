<?php

namespace App\Http\Controllers;

use App\Models\Sign;
use Illuminate\Http\Request;
use Spatie\Permission\Commands\Show;

class SignController extends Controller
{
    public function show(Sign $sign)
    {
        $data = $sign->cordenadas;
        return view('signs.show', compact('sign', 'data'));
    }
}
