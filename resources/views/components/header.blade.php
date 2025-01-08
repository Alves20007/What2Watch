<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" href="{{ asset('css/header.css') }}">
    <!-- Fonte do Google -->
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;600&display=swap" rel="stylesheet">
    <style>
        .btn {
            text-decoration: none;
            padding: 0.5rem;
            border: 1px solid #ff4800;
            background: #ff4800;
        }

        .btn2 {
            color: black;    
            text-decoration: none;
            padding: 0.5rem;
            border: 1px solid #black;
            background: #black;
            }
    </style>
</head>
<body>


    <header>
        <div class="container">
            <!-- Logo -->
            <div class="logo">
                <a href="{{ url('primeiro') }}">
                    <img src="{{ asset('imagens/novo.png') }}" alt="Logo">
                </a>
            </div>
            
            <!-- Menu de Navegação -->
            <nav class="nav-menu">
                <ul>                    
                    <li class="dropdown">
                        <a href="#" class="dropdown-link">Filmes/series▼</a>
                        <div class="dropdown-content">
                            <a href="{{ url('acao') }}">Data de lançamento</a>
                            <a href="{{ url('aventura') }}">Top 100</a>
                            <a href="{{ url('animacao') }}">Os mais populares</a>
                            <a href="{{ url('comedia') }}">Caixa surpresa</a>
                            <a href="{{ url('acao') }}">Notícias de filmes</a>
                            <a href="{{ url('filmes') }}">Filmes/series</a>
                        </div>
                    </li>
                    <li class="dropdown">
                        <a href="#" class="dropdown-link">Our choice▼</a>
                        <div class="dropdown-content">
                            <a href="{{ url('acao') }}">W2W</a>
                            <a href="{{ url('aventura') }}">Trailers</a>
                            <a href="{{ url('animacao') }}">W2 Escolha</a>
                            <a href="{{ url('animacao') }}">O que está por vir?</a>
                            <a href="{{ url('animacao') }}">Os meus rankings</a>
                        </div>
                    </li>

                    <li class="dropdown">
                        <a href="#" class="dropdown-link">Prêmios</a>
                        <div class="dropdown-content">
                            <a href="{{ url('acao') }}">Oscares</a>
                            <a href="{{ url('aventura') }}">Central de prêmios</a>
                        </div>
                    </li>

                    <li class="dropdown">
                        <a href="#" class="dropdown-link">Artistas▼</a>
                        <div class="dropdown-content">
                            <a href="{{ url('acao') }}">Oscares</a>
                            <a href="{{ url('aventura') }}">Nascidas hoje</a>
                            <a href="{{ url('animacao') }}">As celebridades mais populares</a>
                            <a href="{{ url('animacao') }}">Notícias dos famosos</a>
                            <a href="{{ url('animacao') }}">adesao de atores</a>
                        </div>
                    </li>
                    <li class="dropdown">
                        <a href="#" class="dropdown-link">Criaçao▼</a>
                        <div class="dropdown-content">
                            <a href="{{ url('apload/create') }}">Criar filme</a>
                            <a href="{{ url('apload/Ownfilm') }}">Own film</a>
                            <a href="{{ url('apload/create2') }}">Celebs</a>
                        </div>
                    </li>
                    <div class="sm:flex sm:justify-center lg:justify-start">
                        <div class="rounded-md shadow">
                            <a href=""
                                class="w-full flex items-center justify-center px-8 py-3 border border-transparent text-base font-medium rounded-md text-white bg-orange-600 hover:bg-orange-700 md:py-4 md:text-lg md:px-10">
                                login
                            </a>
                        </div>
                        <div class="mt-3 sm:mt-0 sm:ml-3">
                            <a href=""
                                class="w-full flex items-center justify-center px-8 py-3 border border-transparent text-base font-medium rounded-md text-yellow-600 bg-yellow-700 hover:bg-yellow-200 md:py-4 md:text-lg md:px-10">
                                signup
                            </a>
                        </div>
                    </div>
                      
                    {{-- <div class="search-bar">
                        <input type="text" placeholder="Pesquisar...">
                        <button type="submit">🔍</button>
                    </div> --}}

                    
                </ul>
            </nav>
        </div>
    </header>
</body>
</html>
