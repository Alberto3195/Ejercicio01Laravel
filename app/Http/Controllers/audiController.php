<?php

namespace App\Http\Controllers;

use App\modelos;
use Illuminate\Http\Request;

class audiController extends Controller
{
    // public function cargaCoche($modelo)
    // {
    //     return view('pagina02')->with('modelo', modelos::where('Tipo', $modelo)
    //         ->with('Nº Puertas', $modelo)->with('Año de Produccion', $modelo));
    // }

    public function devuelveModelos(){
        return view('pagina02')->with('modelo', modelos::all());
    }
}