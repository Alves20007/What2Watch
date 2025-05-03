<?php

namespace App\Http\Controllers;

use App\Models\Watchlist;
use App\Models\User;
use App\Models\Film;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\Rule;

class ProfileController extends Controller
{
    public function edit()
    {
        return view('perfil-remake');
    }

    public function update(Request $request)
    {
        $user = Auth::user();

        $request->validate([
            'name' => 'required|string|max:255',
            'email' => ['required', 'string', 'email', 'max:255', Rule::unique('users')->ignore($user->id)],
            'bio' => 'nullable|string|max:500',
            'Foto_Perfil' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        // Processar a imagem se foi enviada
        $image = $request->file('Foto_Perfil');
        $imageName = time() . '.' . $image->extension();     
        $request->image->move(public_path('FP'), $imageName);

        // Atualizar usuário
        $user->update([
            'name' => $request->name,
            'email' => $request->email,
            'bio' => $request->bio,
            'Foto_Perfil' => $imageName,
        ]);

        return redirect()->route('perfil')->with('success', 'Perfil atualizado com sucesso!');
    }
    public function index()
    {
        $user = Auth::user();
        $watchlist = $user->watchlists()->latest()->get(); // relação no modelo User

        return view('profile.index', compact('user', 'watchlists'));
    }
}