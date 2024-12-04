<!DOCTYPE html>
<html lang="pt">
<head>
    <link rel="stylesheet" href="{{ asset('css/teste2.css') }}">
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;600&display=swap" rel="stylesheet">
</head>
<body>
    <header>
        <div class="container">
            <!-- Logo -->
            <div class="logo">
                <a href="{{ url('primeiro') }}">
                    <img src="{{ asset('imagens/logo2.png') }}" alt="Logo">
                </a>
            </div>

            <!-- Menu de Navegação -->
            <nav class="nav-menu">
                <ul>
                    <li class="dropdown">
                        <a href="#" class="dropdown-link">Explorar ▼</a>
                        <div class="mega-menu">
                            <div class="menu-column">
                                <h3>Filmes</h3>
                                <a href="{{ url('acao') }}">Data de lançamento</a>
                                <a href="{{ url('aventura') }}">Top 100 filmes</a>
                                <a href="{{ url('animacao') }}">Os filmes mais populares</a>
                                <a href="{{ url('comedia') }}">Caixa surpresa</a>
                                <a href="{{ url('acao') }}">Bilhetes</a>
                                <a href="{{ url('acao') }}">Notícias de filmes</a>
                            </div>
                            <div class="menu-column">
                                <h3>Séries</h3>
                                <a href="{{ url('acao') }}">O que está a dar</a>
                                <a href="{{ url('aventura') }}">Top 100 séries</a>
                                <a href="{{ url('animacao') }}">As séries mais populares</a>
                                <a href="{{ url('comedia') }}">Caixa surpresa</a>
                                <a href="{{ url('acao') }}">Notícias das séries</a>
                            </div>
                            <div class="menu-column">
                                <h3>World Choice</h3>
                                <a href="{{ url('acao') }}">W2W</a>
                                <a href="{{ url('aventura') }}">Trailers</a>
                                <a href="{{ url('animacao') }}">W2 Escolha</a>
                                <a href="{{ url('animacao') }}">O que está por vir?</a>
                                <a href="{{ url('animacao') }}">Os meus rankings</a>
                            </div>
                            <div class="menu-column">
                                <h3>Prêmios e Eventos</h3>
                                <a href="{{ url('acao') }}">Oscares</a>
                                <a href="{{ url('aventura') }}">Central de prêmios</a>
                                <a href="{{ url('animacao') }}">Central de festivais</a>
                                <a href="{{ url('animacao') }}">Todos os eventos</a>
                            </div>
                            <div class="menu-column">
                                <h3>Artistas</h3>
                                <a href="{{ url('acao') }}">Oscares</a>
                                <a href="{{ url('aventura') }}">Nascidas hoje</a>
                                <a href="{{ url('animacao') }}">As celebridades mais populares</a>
                                <a href="{{ url('animacao') }}">Notícias dos famosos</a>
                            </div>
                        </div>
                    </li>

                    <!-- Barra de Pesquisa Simples -->
                    <li class="search-bar">
                        <input type="text" placeholder="Pipocas...">
                        <button type="submit">🔍</button> 
                    </li>   

                    <!-- Categoria -->
                    <li>
                        <a href="{{ url('teste') }}">Categorias</a>
                    </li>
                </ul>
            </nav>
        </div>
    </header>
</body>
</html>