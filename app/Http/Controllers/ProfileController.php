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
    public function mostrar($id)
    {
        $user = User::findOrFail($id);

        $videos = Film::where('criadores', $user->id)->get();

        $comentarios = Watchlist::where('user_id', $user->id)->get();

        $isOwner = auth()->check() && auth()->id() === $user->id;

        // Supondo que já tens uma relação chamada 'watchlist' no User
        $watchlist = $isOwner ? $user->watchlist : null;

        return view('perfil', compact('user', 'videos', 'comentarios', 'watchlist', 'isOwner'));
    }
}