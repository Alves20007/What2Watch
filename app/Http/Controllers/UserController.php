<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;

class UserController extends Controller
{
    public function update(Request $request)
{
    $user = Auth::user();

    $request->validate([
        'name' => 'required|string|max:255',
        'email' => 'required|email|max:255|unique:users,email,' . $user->id,
        'bio' => 'nullable|string|max:500',
        'Foto_Perfil' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
    ]);

    // Se houver nova imagem...
    if ($request->hasFile('Foto_Perfil')) {
        // Apaga imagem antiga (se existir)
        if ($user->Foto_Perfil && file_exists(public_path('FP/' . $user->Foto_Perfil))) {
            unlink(public_path('FP/' . $user->Foto_Perfil));
        }

        // Guarda nova imagem
        $file = $request->file('Foto_Perfil');
        $filename = time() . '.' . $file->getClientOriginalExtension();
        $file->move(public_path('FP'), $filename);

        // Atualiza o caminho da imagem no user
        $user->Foto_Perfil = $filename;
    }

    // Atualiza os restantes campos
    $user->name = $request->input('name');
    $user->email = $request->input('email');
    $user->bio = $request->input('bio');
    $user->save();

    return redirect()->back()->with('success', 'Perfil atualizado com sucesso!');
}

}
