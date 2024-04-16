@extends('layouts.app')

@section('title', 'Crear Nueva Medición')

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
                    <div class="font-bold text-xl mb-2">Crear Nueva Medición</div>

                    <!-- Formulario de creación -->
                    <form action="{{ route('mediciones.store') }}" method="POST">
                        @csrf

                        <div class="mb-4">
                            <label for="peso" class="block text-gray-700 text-sm font-bold mb-2">Peso:</label>
                            <input type="text" name="peso" id="peso" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">
                        </div>

                        <div class="mb-4">
                            <label for="talla" class="block text-gray-700 text-sm font-bold mb-2">Talla:</label>
                            <input type="text" name="talla" id="talla" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">
                        </div>

                        <div class="mb-4">
                            <label for="imc" class="block text-gray-700 text-sm font-bold mb-2">IMC:</label>
                            <input type="text" name="imc" id="imc" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">
                        </div>

                        <div class="flex items-center justify-between">
                            <button type="submit" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline">Crear</button>
                            <a href="{{ route('mediciones.index') }}" class="inline-block align-baseline font-bold text-sm text-blue-500 hover:text-blue-800">Cancelar</a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
