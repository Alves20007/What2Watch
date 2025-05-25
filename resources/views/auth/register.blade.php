{!! NoCaptcha::renderJs() !!}
<x-guest-layout>
    <x-authentication-card>
        <x-slot name="logo">
            {{--A minha imagem estra no authentication card--}}
            <x-authentication-card-logo />
        </x-slot>

        <x-validation-errors class="mb-4" />

        <form method="POST" action="{{ route('register') }}" enctype="multipart/form-data cl">
            @csrf

            <div>
                <x-label for="name" value="{{ __('Name') }}" />
                <x-input id="name" class="block mt-1 w-full bg-neutral-100" type="text" name="name" :value="old('name')" required autofocus autocomplete="name" />
            </div>

            {{-- <div>
                <x-label for="bio" value="{{ __('bio') }}" />
                <x-input id="bio" class="block mt-1 w-full" type="text" name="bio" :value="old('bio')" required autofocus autocomplete="bio" />
            </div>
            <div>
                <x-label for="Foto_Perfil" value="{{ __('Foto_Perfil') }}" />
                <x-input id="Foto_Perfil" class="block mt-1 w-full" type="file" name="Foto_Perfil" :value="old('Foto_Perfil')" required autofocus autocomplete="Foto_Perfil" />
            </div>
            <br>

            <div>
                <x-label for="pais" value="{{ __('País') }}" />
                <select id="pais" name="pais" class="block mt-1 w-full" required>
                    <option value="">Selecione um país...</option>
                    <option value="Portugal">Portugal </option>
                </select>
            </div>
            
            <br>

            <div>
                <x-label for="birthday" value="{{ __('Birthday') }}" />
                <x-input id="birthday" class="block mt-1 w-full" type="date" name="birthday" :value="old('birthday')" required autofocus autocomplete="bday" />
            </div> --}}

            <div class="mt-4">
                <x-label for="email" value="{{ __('Email') }}" />
                <x-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autocomplete="username" />
            </div>

            <div class="mt-4">
                <x-label for="password" value="{{ __('Password') }}" />
                <x-input id="password" class="block mt-1 w-full" type="password" name="password" required autocomplete="new-password" />
            </div>

            <div class="mt-4">
                <x-label for="password_confirmation" value="{{ __('Confirm Password') }}" />
                <x-input id="password_confirmation" class="block mt-1 w-full" type="password" name="password_confirmation" required autocomplete="new-password" />
            </div>

            <div class="mt-4">
                {!! NoCaptcha::display() !!}
                @error('g-recaptcha-response')
                    <span class="text-red-500 text-sm">{{ $message }}</span>
                @enderror
            </div>
            
            @if (Laravel\Jetstream\Jetstream::hasTermsAndPrivacyPolicyFeature())
                <div class="mt-4">
                    <x-label for="terms">
                        <div class="flex items-center">
                            <x-checkbox name="terms" id="terms" required />

                            <div class="ms-2">
                                {!! __('I agree to the :terms_of_service and :privacy_policy', [
                                        'terms_of_service' => '<a target="_blank" href="'.route('terms.show').'" class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">'.__('Terms of Service').'</a>',
                                        'privacy_policy' => '<a target="_blank" href="'.route('policy.show').'" class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">'.__('Privacy Policy').'</a>',
                                ]) !!}
                            </div>
                        </div>
                    </x-label>
                </div>
            @endif

            <div class="flex items-center justify-end mt-4">
                <a class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500" href="{{ route('login') }}">
                    {{ __('Already registered?') }}
                </a>

                <x-button class="ms-4">
                    {{ __('Register') }}
                </x-button>
            </div>

            <script>
                // fetch('https://restcountries.com/v3.1/all')
                //     .then(response => response.json())
                //     .then(data => {
                //         const select = document.getElementById('pais');
                //         data.forEach(pais => {
                //             const option = document.createElement('option');
                //             option.value = pais.name.common;
                //             option.textContent = pais.name.common;
                //             select.appendChild(option);
                //         });
                //     })
                //     .catch(error => console.error('Erro ao carregar os países:', error));
            </script>
        </form>
    </x-authentication-card>
</x-guest-layout>
