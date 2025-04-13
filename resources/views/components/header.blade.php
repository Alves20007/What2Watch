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
    <header class="bg-neutral-900 shadow-md py-4">
        <div class="container mx-auto flex justify-between items-center px-4">
            <!-- Logo -->
            <div>
                <a href="{{ url('/') }}">
                    <img src="{{ asset('imagens/novo.png') }}" alt="Logo" class="w-32 hover:scale-110 transition-transform">
                </a>
            </div>
            
            <!-- Menu de Navegação -->
            <nav class="hidden md:flex space-x-6">
                @foreach ([
                    'Filmes/series' => [['filmes', 'Filmes/series'], ['top-100', 'Top 100'], ['CaixaSurpresa', 'Caixa surpresa']],
                    'W2 World' => [['escolhido', 'W2 Escolha'], ['NoticiasFilmes', 'Notícias']],
                    'Prêmios' => [['/noticias/oscares', 'Oscares'], ['/noticias/premios', 'Central de prêmios']],
                    'Artistas' => [['atores', 'Famosos'], ['Oscares/artistas', 'Oscares'], ['/atores/aniversariantes', 'Nascidos hoje'], ['top', 'Celebridades populares']],
                    'Criação' => [['CriacaoFilmes', 'Criar filme'], ['CriarCelebs', 'Celebs'], ['/filmes/Ver/Mais/tarde', 'Watch list']]              
                    ] as $title => $links)
                <div class="relative group">
                    <button class="text-gray-300 font-semibold px-4 py-2 focus:outline-none">{{ $title }} ▼</button>
                    <div class="absolute left-0 hidden group-hover:block bg-gray-700 shadow-md rounded-md mt-1 py-2 w-48">
                        @foreach ($links as [$url, $name])
                            <a href="{{ url($url) }}" class="block px-4 py-2 text-sm hover:bg-gray-600 text-gray-300">{{ $name }}</a>
                        @endforeach
                    </div>
                </div>
                @endforeach 
            </nav>
            
            <!-- Foto de Perfil com Dropdown -->
            <div class="flex items-center space-x-4">
                @auth
                <a href="/editar-perfil" class="bg-blue-500 text-white px-4 py-2 rounded-md hover:bg-blue-600 transition-colors">Editar Perfil</a>
                    <!-- Foto de Perfil Clicável com Dropdown -->
                    <div class="relative">
                        <!-- Foto de Perfil -->
                        <button id="profile-img-btn" class="focus:outline-none">
                            <img src="{{ asset('FP/' . Auth::user()->Foto_Perfil ?? 'https://via.placeholder.com/150') }}"
                                class="w-10 h-10 rounded-full object-cover cursor-pointer hover:scale-110 transition-transform"
                                alt="Foto de Perfil" id="profile-img">

                        </button>
                        
                        <!-- Menu Dropdown -->
                        <div id="profile-dropdown" class="absolute right-0 mt-2 w-48 bg-gray-700 text-gray-300 rounded-md shadow-lg hidden">
                            <a href="/editar-perfil" class="block px-4 py-2 text-sm hover:bg-gray-600">Editar Perfil</a>
                            <a href="{{ route('logout') }}" class="block px-4 py-2 text-sm hover:bg-gray-600">Sair</a>
                        </div>
                    </div>
                    
                    <!-- Botão Clicável ao lado -->

                @endauth
                @guest
                    <a href="{{ url('register') }}" class="bg-gray-700 hover:bg-gray-600 text-gray-300 font-medium px-6 py-2 rounded-md">Registrar-se</a>
                    <a href="{{ url('login') }}" class="bg-gray-800 hover:bg-gray-700 text-gray-300 font-medium px-6 py-2 rounded-md">Entrar</a>
                @endguest
            </div>
        </div>
    </header>

    <!-- Script para mostrar o menu dropdown e mover a foto de perfil para baixo -->
    <script>
        const profileImgBtn = document.getElementById('profile-img-btn');
        const profileDropdown = document.getElementById('profile-dropdown');
        const profileImg = document.getElementById('profile-img');
        
        profileImgBtn.addEventListener('click', () => {
            // Alterna a visibilidade do menu dropdown
            profileDropdown.classList.toggle('hidden');
            
            // Move a foto de perfil para baixo e depois volta para o seu lugar
            profileImg.classList.toggle('translate-y-2');  // Aplica o deslocamento para baixo
        });
    </script>

</body>
</html>
