@extends('layouts.app')

@section('title', 'Register')

@section('content')

<style>
    body {
        background-image: url('/resources/img/cli7.png');
        background-size: cover;
    }
</style>



<div class="block mx-auto my-12 w-1/3 border border-gray-200 
rounded-lg shadow-lg">

<div class=" p-4 rounded-lg hover:bg-gray-300 transition-colors duration-300">

  <h1 class="text-3xl text-center font-bold text-white">Registrate</h1>

  <form class="mt-4" method="POST" action="">
    @csrf

    <input type="text" class="border border-gray-200 rounded-md bg-gray-200 w-full
    text-lg placeholder-gray-900 p-2 my-2 focus:bg-white" placeholder="Nombre"
    id="name" name="name">

    @error('name')        
      <p class="border border-red-500 rounded-md bg-red-100 w-full
      text-red-600 p-2 my-2">* {{ $message }}</p>
    @enderror

    <input type="email" class="border border-gray-200 rounded-md bg-gray-200 w-full
    text-lg placeholder-gray-900 p-2 my-2 focus:bg-white" placeholder="Correo"
    id="email" name="email">

    @error('email')        
      <p class="border border-red-500 rounded-md bg-red-100 w-full
      text-red-600 p-2 my-2">* {{ $message }}</p>
    @enderror

    <input type="password" class="border border-gray-200 rounded-md bg-gray-200 w-full
    text-lg placeholder-gray-900 p-2 my-2 focus:bg-white" placeholder="Contraseña"
    id="password" name="password">

    @error('password')        
      <p class="border border-red-500 rounded-md bg-red-100 w-full
      text-red-600 p-2 my-2">* {{ $message }}</p>
    @enderror

    <input type="password" class="border border-gray-200 rounded-md bg-gray-200 
    w-full text-lg placeholder-gray-900 p-2 my-2 focus:bg-white" 
    placeholder="Confirma tu contraseña" id="password_confirmation" 
    name="password_confirmation">

    <button type="submit" class="rounded-md bg-indigo-500 w-full text-lg
    text-white font-semibold p-2 my-3 hover:bg-indigo-600">Registrarme</button>


  </form>


</div>

@endsection