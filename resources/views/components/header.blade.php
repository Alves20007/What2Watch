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
                            <a href="{{ url('acao') }}">Criar filme</a>
                            <a href="{{ url('aventura') }}">Own film</a>
                            <a href="{{ url('animacao') }}">Celebs</a>
                        </div>
                    </li>
                    <a class="btn" href="{{ url('acao') }}">
                        Login
                      </a>
                  
                      <a class="btn2" href="{{ url('acao') }}">
                        Login
                      </a>
                      
                    <div class="search-bar">
                        <input type="text" placeholder="Pesquisar...">
                        <button type="submit">🔍</button>
                    </div>
                </ul>
            </nav>
        </div>
    </header>
</body>
</html>
