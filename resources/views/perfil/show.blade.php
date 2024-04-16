@extends('layouts.app')

@section('content')
<style>
    body {
        background-image: url('/resources/img/cli7.png');
        background-size: cover;
    }
</style>

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">
                    <center><h1 class="text-white text-5xl font-bold">Datos del Usuario</h1></center>
                </div>


                <div class="card-body">
                <center><form method="POST" action="{{ route('perfil.update') }}">
                        @csrf
                        @method('PUT')
                        <center><div class="block mx-auto my-12 p-8 bg-Teal  w-1/3 border border-gray-200 rounded-lg shadow-lg text-black">
        <div class="bg-gray-200 p-4 rounded-lg hover:bg-gray-300 transition-colors duration-300">
                        <div class="form-group row">
                            <label for="name" class="col-md-4 col-form-label text-md-right ">Nombre</label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control" name="name" value="{{ $usuario->name }}" required autofocus>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="email" class="col-md-4 col-form-label text-md-right">Correo Electrónico</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control" name="email" value="{{ $usuario->email }}" required>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password" class="col-md-4 col-form-label text-md-right">Nueva Contraseña</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control" name="password">
                            </div>
                        </div>
                        </div>
                        </div></center>
                        <!-- Puedes agregar más campos según sea necesario -->

                        <div class="form-group row mb-0">
    <div class="col-md-6 offset-md-4">
        <button type="submit" class="btn btn-primary" style="background-color: white; border: 1px solid #0000;">
            Guardar Cambios
        </button>
    </div>
</div>

                    </form></center>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
