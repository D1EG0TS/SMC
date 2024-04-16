@extends('layouts.app')

@section('content')
<style>
    body {
        background-image: url('/resources/img/cli7.png');
        background-size: cover;
    }
</style> 
<div class="block mx-auto my-12 p-8 w-2/3 border border-gray-200 rounded-lg shadow-lg">
    <div class=" p-4 rounded-lg hover:bg-gray-300 transition-colors duration-300">
                <div class="px-6 py-4">
                    <div class="font-bold text-xl mb-2">Lista de Mediciones</div>

                    <div class="overflow-x-auto">
                        <table class="table-auto w-full">
                            <thead>
                                <tr>
                                    <th class="px-4 py-2">ID</th>
                                    <th class="px-4 py-2">Peso</th>
                                    <th class="px-4 py-2">Talla</th>
                                    <th class="px-4 py-2">Temperatura</th>

                                    <th class="px-4 py-2">IMC</th>
                                    <th class="px-4 py-2">Fecha</th>
                                    <th class="px-4 py-2">Acciones</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($mediciones as $medicion)
                                <tr>
                                    <td class="border px-4 py-2">{{ $medicion->id }}</td>
                                    <td class="border px-4 py-2">{{ $medicion->peso }}</td>
                                    <td class="border px-4 py-2">{{ $medicion->talla }}</td>
                                    <td class="border px-4 py-2">{{ $medicion->temp_objeto }}</td>

                                    <td class="border px-4 py-2">{{ $medicion->imc }}</td>
                                    <td class="border px-4 py-2">{{ $medicion->fecha }}</td>
                                    <td class="border px-4 py-2">
                                        <a href="{{ route('mediciones.edit', $medicion->id) }}" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">Editar</a>
                                        <form action="{{ route('mediciones.destroy', $medicion->id) }}" method="POST" style="display: inline;">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="bg-red-500 hover:bg-red-700 text-white font-bold py-2 px-4 rounded">Eliminar</button>
                                        </form>
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>

                    <div class="mt-4">
                        <a href="{{ route('mediciones.create') }}" class="bg-green-500 hover:bg-green-700 text-white font-bold py-2 px-4 rounded">Crear Nueva Medición</a>
                        <a href="{{ route('admin.index') }}" class="bg-yellow-500 hover:bg-yellow-700 text-white font-bold py-2 px-4 rounded ml-4">Volver al Administrador</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
