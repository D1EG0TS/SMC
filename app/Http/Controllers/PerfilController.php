<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;

class PerfilController extends Controller
{
    public function show()
    {
        $usuario = Auth::user();
        return view('perfil.show', compact('usuario'));
    }

    public function update(Request $request)
    {
        $usuario = Auth::user();
        $usuario->name = $request->input('name');
        $usuario->email = $request->input('email');

        // Manejar la carga y almacenamiento del avatar si se proporciona una nueva imagen
        if ($request->hasFile('avatar')) {
            // Guardar la imagen en la carpeta 'public/avatars' y obtener la ruta
            $avatarPath = $request->file('avatar')->store('avatars', 'public');
            // Actualizar el campo 'avatar' en el modelo de usuario con la ruta de la imagen
            $usuario->avatar = $avatarPath;
        }

        // Verificar si se ha proporcionado una nueva contraseña y actualizarla si es así
        $password = $request->input('password');
        if ($password) {
            $usuario->password = bcrypt($password);
        }

        $usuario->save();

        return redirect()->route('perfil.show')->with('success', 'Perfil actualizado correctamente');
    }
}
