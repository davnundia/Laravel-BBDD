<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Pastel_controller extends Controller
{
    public function __invoke(Request $request){
        

        return view('listar', compact('pastel'));
    }
}
