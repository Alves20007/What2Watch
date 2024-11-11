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
                <a href="{{ url('primeiro') }}">
                    <img src="{{ asset('imagens/logo.png') }}" alt="Logo">
                </a>
            </div>
            
            <!-- Menu de Navegação -->
            <nav class="nav-menu">
                <ul>                    
                    <li class="dropdown">
                        <a href="#" class="dropdown-link">Filmes▼</a>
                        <div class="dropdown-content">
                            <a href="{{ url('acao') }}">Data de lançamento</a>
                            <a href="{{ url('aventura') }}">Top 100 filmes</a>
                            <a href="{{ url('animacao') }}">Os filmes mais populares</a>
                            <a href="{{ url('comedia') }}">Caixa surpresa</a>
                            <a href="{{ url('acao') }}">Bilhetes</a>
                            <a href="{{ url('acao') }}">Notícias de filmes</a>
                        </div>
                    </li>

                    <li class="dropdown">
                        <a href="#" class="dropdown-link">Séries▼</a>
                        <div class="dropdown-content">
                            <a href="{{ url('acao') }}">O que está a dar</a>
                            <a href="{{ url('aventura') }}">Top 100 séries</a>
                            <a href="{{ url('animacao') }}">As séries mais populares</a>
                            <a href="{{ url('comedia') }}">Caixa surpresa</a>
                            <a href="{{ url('acao') }}">Notícias das séries</a>
                        </div>
                    </li>

                    <li class="dropdown">
                        <a href="#" class="dropdown-link">World choice▼</a>
                        <div class="dropdown-content">
                            <a href="{{ url('acao') }}">W2W</a>
                            <a href="{{ url('aventura') }}">Trailers</a>
                            <a href="{{ url('animacao') }}">W2 Escolha</a>
                            <a href="{{ url('animacao') }}">O que está por vir?</a>
                            <a href="{{ url('animacao') }}">Os meus rankings</a>
                        </div>
                    </li>

                    <li class="dropdown">
                        <a href="#" class="dropdown-link">Prêmios e Eventos▼</a>
                        <div class="dropdown-content">
                            <a href="{{ url('acao') }}">Oscares</a>
                            <a href="{{ url('aventura') }}">Central de prêmios</a>
                            <a href="{{ url('animacao') }}">Central de festivais</a>
                            <a href="{{ url('animacao') }}">Todos os eventos</a>
                        </div>
                    </li>

                    <li class="dropdown">
                        <a href="#" class="dropdown-link">Artistas▼</a>
                        <div class="dropdown-content">
                            <a href="{{ url('acao') }}">Oscares</a>
                            <a href="{{ url('aventura') }}">Nascidas hoje</a>
                            <a href="{{ url('animacao') }}">As celebridades mais populares</a>
                            <a href="{{ url('animacao') }}">Notícias dos famosos</a>
                        </div>
                    </li>

                    <li>
                        <a href="{{ url('teste') }}">Categorias</a>
                    </li>
                </ul>
            </nav>
            
            <!-- Barra de Pesquisa -->
            <div class="search-bar">
                <input type="text" placeholder="Pesquisar...">
                <button type="submit">🔍</button>
            </div>
        </div>
    </header>
</body>
</html>
