<?php

namespace App\Actions\Fortify;

use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Laravel\Fortify\Contracts\CreatesNewUsers;
use Laravel\Jetstream\Jetstream;

class CreateNewUser implements CreatesNewUsers
{
    use PasswordValidationRules;

    /**
     * Validate and create a newly registered user.
     *
     * @param  array<string, string>  $input
     */
    public function create(array $input): User
    {
        Validator::make($input, [
            'name' => ['required', 'string', 'max:255'],
            'birthday' => ['date'],
            'pais' => ['string'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'bio' => 'nullable|string|max:500',
            'Foto_Perfil' => 'nullable|image|mimes:jpeg,png,jpg,gif,jpg|max:2048',
            'password' => $this->passwordRules(),
            'terms' => Jetstream::hasTermsAndPrivacyPolicyFeature() ? ['accepted', 'required'] : '',
        ])->validate();


        if (isset($input['Foto_Perfil'])) {
            $image = $input['Foto_Perfil'];
            $imageName = time() . '.' . $image->getClientOriginalExtension();
            $image->move(public_path('FP'), $imageName);
        } else {
            $imageName = null;
        }

        return User::create([
            'name' => $input['name'],
            'pais' => $input['pais'],   
            'email' => $input['email'],
            'bio' => $input['bio'],
            'Foto_Perfil' => $imageName,
            'birthday' => $input['birthday'],
            'password' => Hash::make($input['password']),
        ]);
    }
}
