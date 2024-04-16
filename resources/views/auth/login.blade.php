@extends('layouts.app')

@section('title', 'Login')

@section('content')
<style>
    body {
        background-image: url('/resources/img/cli7.png');
        background-size: cover;
    }
</style>

<div class="block mx-auto my-12 p-8 w-1/3 border border-gray-200 
rounded-lg shadow-lg">
<div class="bg-200 p-4 rounded-lg hover:bg-gray-300 transition-colors duration-300">
  <h1 class="text-3xl text-center font-bold text-white">Acceso SMC</h1>

  <form class="mt-4" method="POST" action="">
    @csrf

    <input type="email" class="border border-gray-200 rounded-md bg-gray-200 w-full
    text-lg placeholder-gray-900 p-2 my-2 focus:bg-white" placeholder="Correo Electronico"
    id="email" name="email">

    <input type="password" class="border border-gray-200 rounded-md bg-gray-200 w-full
    text-lg placeholder-gray-900 p-2 my-2 focus:bg-white" placeholder="Contraseña"
    id="password" name="password">
    
    @error('message')        
      <p class="border border-red-500 rounded-md bg-red-100 w-full
      text-red-600 p-2 my-2">* {{ $message }}</p>
    @enderror

    <button type="submit" class="rounded-md bg-green-500 w-full text-lg
    text-white font-semibold p-2 my-3 hover:bg-green-600">Iniciar sesion</button>


  </form>


</div>

@endsection