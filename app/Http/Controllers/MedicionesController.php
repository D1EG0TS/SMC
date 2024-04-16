<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Medicion;

class MedicionesController extends Controller
{
    public function index()
    {
        $mediciones = Medicion::orderBy('fecha')->get();
        return view('mediciones.index', compact('mediciones'));
    }

    public function grafica()
    {
        $mediciones = Medicion::orderBy('fecha')->get();
        // Verificar los datos obtenidos
        //dd($mediciones);
        return view('grafica', compact('mediciones'));
    }
    
}
