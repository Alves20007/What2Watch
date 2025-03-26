<!DOCTYPE html>
<html lang="pt">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>What2Watch</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-neutral-900 text-gray-300">
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
            
            <!-- Login & Signup -->
            <div class="flex space-x-4 items-center">
                @guest
                    <a href="{{ url('register') }}" class="bg-gray-700 hover:bg-gray-600 text-gray-300 font-medium px-6 py-2 rounded-md">Registrar-se</a>
                    <a href="{{ url('login') }}" class="bg-gray-800 hover:bg-gray-700 text-gray-300 font-medium px-6 py-2 rounded-md">Entrar</a>
                @else
                    <span class="text-gray-300 font-medium">Olá, {{ Auth::user()->name }}</span>
                    <form action="{{ route('logout') }}" method="POST" class="inline">
                        @csrf
                        <button type="submit" class="bg-red-700 hover:bg-red-600 text-white font-medium px-6 py-2 rounded-md">
                            Sair
                        </button>
                    </form>
                @endguest
            </div>
        </div>
    </header>
</body>
</html>
