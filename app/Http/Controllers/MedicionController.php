este es el controlador: <?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Medicion;

class MedicionController extends Controller
{
    public function index()
    {
        $mediciones = Medicion::all();
        return view('mediciones.index', compact('mediciones'));
    }

    public function create()
    {
        return view('mediciones.create');
    }

    public function store(Request $request)
    {
        $medicion = new Medicion();
        $medicion->peso = $request->input('peso');
        $medicion->talla = $request->input('talla');
        $medicion->imc = $request->input('imc');
        $medicion->temp_objeto = $request->input('temp_objeto');

        $medicion->save();

        return redirect()->route('mediciones.index');
    }

    public function edit($id)
    {
        $medicion = Medicion::findOrFail($id);
        return view('mediciones.edit', compact('medicion'));
    }

    public function update(Request $request, $id)
    {
        $medicion = Medicion::findOrFail($id);
        $medicion->peso = $request->input('peso');
        $medicion->talla = $request->input('talla');
        $medicion->imc = $request->input('imc');
        $medicion->temp_objeto = $request->input('temp_objeto');

        $medicion->save();

        return redirect()->route('mediciones.index');
    }

    public function destroy($id)
    {
        $medicion = Medicion::findOrFail($id);
        $medicion->delete();

        return redirect()->route('mediciones.index');
    }
}