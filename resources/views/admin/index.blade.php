@extends('layouts.app')

@section('title', 'Bienvenido Administrador')

@section('content')
<style>
    body {
        background-image: url('/resources/img/cli7.png');
        background-size: cover;
    }
</style> 
    <h1 class="text-5xl text-center pt-24 text-white">¡Bienvenido Administrador!</h1>

    <!-- Información del administrador -->
    <center><div class="mt-12">
        <h2 class="text-3xl text-center mb-4 text-white">Información del Administrador</h2>
        <ul class="list-disc list-inside text-lg">
            <li><h3 class= "text-white">Nombre: Diego Armando Terrzas Salinas</h3></li>
            <li><h3 class= "text-white">Dirección: Av. Principal 123, Ciudad, País</h3></li>
            <li><h3 class= "text-white">Edad: 23 años</h3></li>
            <li><h3 class= "text-white">Teléfono: +1234567890</h3></li>
        </ul>
    </div></center>

    <!-- Sección de imágenes -->
    <div class="flex justify-center mt-8">
        <img src="{{ asset('resources/img/vitalis.png') }}" alt="Bienvenido Administrador" class="w-96 rounded-lg shadow-lg">
    </div>
    </div>

    


    <!-- Sección de botón CRUD -->
    <div class="flex justify-center mt-8">
        <a href="{{ route('mediciones.index') }}" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded-full text-center">
            Vayamos al CRUD
        </a>
    </div>


    <center><div class="mt-12">
        
            <li><h3 class= "text-white">.</h3></li>
            <li><h3 class= "text-white">.</h3></li>
            <li><h3 class= "text-white">.</h3></li>
            <li><h3 class= "text-white">.</h3></li>
        
    </div></center>
</div>
    </div>
@endsection


