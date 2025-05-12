<!DOCTYPE html>
<html lang="pt">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>What2Watch</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-neutral-900 text-gray-300">

    <!-- Header com Navegação -->
    <header class="bg-neutral-900 shadow-md py-4 z-50 relative">
        <div class="container mx-auto flex justify-between i    ms-center px-4">
            <!-- Logo -->
            <div>
                <a href="{{ url('/') }}">
                    <img src="{{ asset('imagens/novo.png') }}" alt="Logo" class="w-32 hover:scale-110 transition-transform">
                </a>
            </div>
            
            <!-- Menu de Navegação -->
            @php
                $menus = [
                    'Filmes/series' => [['filmes', 'Filmes/series'], ['top-100', 'Top 100'], ['CaixaSurpresa', 'Caixa surpresa']],
                    'W2 World' => [['escolhido', 'W2 Escolha'], ['noticias', 'Notícias']],
                    'Prêmios' => [['/noticias/premios', 'Central de prêmios']],
                    'Artistas' => [['atores', 'Famosos'], ['/atores/aniversariantes', 'Nascidos hoje']],
                ];

                if (Auth::check()) {
                    $menus['Criação'] = [['CriacaoFilmes', 'Criar filme'], ['CriarCelebs', 'Celebs'], ['/filmes/Ver/Mais/tarde', 'Watch list']];
                }
            @endphp

            <nav class="hidden md:flex space-x-6">
                @foreach ($menus as $title => $links)
                    <div class="relative group">
                        <button class="text-gray-300 font-semibold px-4 py-2 focus:outline-none">{{ $title }} ▼</button>
                        <div class="absolute left-0 hidden group-hover:block bg-neutral-700 shadow-md rounded-md mt-1 py-2 w-48 hover:text-orange-600">
                            @foreach ($links as [$url, $name])
                                <a href="{{ url($url) }}" class="block px-4 py-2 text-sm hover:bg-neutral-600 hover:text-orange-50 text-gray-300">{{ $name }}</a>
                            @endforeach
                        </div>
                    </div>
                @endforeach 
            </nav>
            
            <!-- Ações do Usuário -->
            <div class="flex items-center space-x-4">
                @auth
                <!-- Botão de Notificações -->
                <div class="relative">
                    <button id="notification-btn" class="relative focus:outline-none hover:scale-110 transition-transform">
                        <!-- Ícone do Sino -->
                        <svg class="w-6 h-6 text-gray-300" fill="none" stroke="currentColor" stroke-width="2"
                            viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                d="M15 17h5l-1.405-1.405A2.032 2.032 0 0118 14.158V11a6.002 6.002 0 00-4-5.659V5a2 2 0 00-4 0v.341C7.67 6.165 6 8.388 6 11v3.159c0 .538-.214 1.055-.595 1.436L4 17h5m6 0v1a3 3 0 11-6 0v-1m6 0H9"></path>
                        </svg>
                        <!-- Badge -->
                        <span class="absolute top-0 right-0 block h-2 w-2 rounded-full ring-2 ring-neutral-900 bg-red-500"></span>
                    </button>

                    <!-- Dropdown Notificações -->
                    <div id="notification-dropdown" class="absolute right-0 mt-2 w-64 bg-gray-700 text-gray-300 rounded-md shadow-lg hidden z-50">
                        <div class="p-4 border-b border-gray-600 font-semibold">Notificações</div>
                        <ul class="max-h-60 overflow-y-auto">
                            <li class="px-4 py-2 hover:bg-gray-600 text-sm">🎉 Bem-vindo de volta, {{ Auth::user()->name }}!</li>
                            <li class="px-4 py-2 hover:bg-gray-600 text-sm">📺 Novo filme adicionado: “Exemplo 1”.</li>
                            <li class="px-4 py-2 hover:bg-gray-600 text-sm">🔔 Você tem recomendações novas.</li>
                        </ul>
                    </div>
                </div>

                <!-- Foto de Perfil com Dropdown -->
                <div class="relative">
                    <button id="profile-img-btn" class="focus:outline-none">
                        <img src="{{ asset('FP/' . Auth::user()->Foto_Perfil ?? 'https://via.placeholder.com/150') }}"
                            class="w-10 h-10 rounded-full object-cover cursor-pointer hover:scale-110 transition-transform"
                            alt="Foto de Perfil" id="profile-img">
                    </button>
                    <div id="profile-dropdown" class="absolute right-0 mt-2 w-48 bg-gray-700 text-gray-300 rounded-md shadow-lg hidden">
                        <a href="/editar-perfil" class="block px-4 py-2 text-sm hover:bg-gray-600">Editar Perfil</a>
                        <form method="POST" action="{{ route('logout') }}">
                            @csrf
                            <button type="submit" class="w-full text-left block px-4 py-2 text-sm hover:bg-gray-600">
                                Sair
                            </button>
                        </form>
                    </div>
                </div>
                @endauth

                @guest
                    <a href="{{ url('register') }}" class="bg-gray-700 hover:bg-gray-600 text-gray-300 font-medium px-6 py-2 rounded-md">Registrar-se</a>
                    <a href="{{ url('login') }}" class="bg-gray-800 hover:bg-gray-700 text-gray-300 font-medium px-6 py-2 rounded-md">Entrar</a>
                @endguest
            </div>
        </div>
    </header>

    <!-- Scripts para dropdowns -->
    <script>
        const profileImgBtn = document.getElementById('profile-img-btn');
        const profileDropdown = document.getElementById('profile-dropdown');
        const profileImg = document.getElementById('profile-img');

        const notificationBtn = document.getElementById('notification-btn');
        const notificationDropdown = document.getElementById('notification-dropdown');

        // Alternar dropdown do perfil
        profileImgBtn?.addEventListener('click', () => {
            profileDropdown.classList.toggle('hidden');
            profileImg.classList.toggle('translate-y-2');
            // Fecha notificações
            notificationDropdown?.classList.add('hidden');
        });

        // Alternar dropdown de notificações
        notificationBtn?.addEventListener('click', () => {
            notificationDropdown.classList.toggle('hidden');
            // Fecha perfil
            profileDropdown?.classList.add('hidden');
        });

        // Fechar dropdowns ao clicar fora
        document.addEventListener('click', function (event) {
            if (!notificationBtn.contains(event.target) && !notificationDropdown.contains(event.target)) {
                notificationDropdown.classList.add('hidden');
            }
            if (!profileImgBtn.contains(event.target) && !profileDropdown.contains(event.target)) {
                profileDropdown.classList.add('hidden');
            }
        });
    </script>

</body>
</html>
