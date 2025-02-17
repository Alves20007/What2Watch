<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" href="{{ asset('css/header.css') }}">
    <!-- Fonte do Google -->
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;600&display=swap" rel="stylesheet">
</head>
<body>


    <header>
        <div class="container">
            <!-- Logo -->
            <div class="logo">
                <a href="{{ url('/') }}">
                    <img src="{{ asset('imagens/novo.png') }}" alt="Logo">
                </a>
            </div>
            
            <!-- Menu de Navegação -->
            <nav class="nav-menu">
                <ul>                    
                    <li class="dropdown">
                        <a href="#" class="dropdown-link">Filmes/series▼</a>
                        <div class="dropdown-content">
                            <a href="{{ url('filmes') }}">Filmes/series</a>
                            <a href="{{ url('Lançamentos') }}">Noticias</a> <!--tem as ultimas noticias dos filmes/series etc-->
                            <a href="{{ url('escolhido') }}">Top 100</a> 
                            <a href="{{ url('CaixaSurpresa') }}">Caixa surpresa</a>                      
                        </div>
                    </li>
                    <li class="dropdown">
                        <a href="#" class="dropdown-link">Our choice▼</a>
                        <div class="dropdown-content">
                            <a href="{{ url('animacao') }}">W2 Escolha</a> <!--5 filmes da minha escolha de diferentes generos -->
                            <a href="{{ url('animacao') }}">Os meus rankings</a>
                        </div>
                    </li>

                    <li class="dropdown">
                        <a href="#" class="dropdown-link">Prêmios▼</a>
                        <div class="dropdown-content">
                            <a href="{{ url('acao') }}">Oscares</a>
                            <a href="{{ url('aventura') }}">Central de prêmios</a>
                        </div>
                    </li>

                    <li class="dropdown">
                        <a href="#" class="dropdown-link">Artistas▼</a>
                        <div class="dropdown-content">
                            <a href="{{ url('atores')}}">Famosos</a>
                            <a href="{{ url('Oscares') }}">Oscares</a>
                            <a href="{{ url('aventura') }}">Nascidas hoje</a>
                            <a href="{{ url('animacao') }}">As celebridades mais populares</a>
                            <a href="{{ url('noticias') }}">Notícias dos famosos</a>
                        </div>
                    </li>
                    <li class="dropdown">
                        <a href="#" class="dropdown-link">Criaçao▼</a>
                        <div class="dropdown-content">
                            <a href="{{ url('CriacaoFilmes') }}">Criar filme</a>
                            <a href="{{ url('Users') }}">Own film</a>
                            <a href="{{ url('CriarCelebs') }}">Celebs</a>
                            <a href="{{ url('apload/create2') }}">watch list</a>
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
