<body>
    <header>
        <link href="{{ asset('css/header.css') }}" rel="stylesheet">
        <div class="container">
            <!-- Logo -->
            <div class="logo">
                <a href="index.html">
                    <img src="logo.png" alt="Logo do Site">
                </a>
            </div>
            
            <!-- Menu de Navegação -->
            <nav class="nav-menu">
                <ul>                    
                    <!-- Dropdown Simplificado -->
                    <li class="dropdown">
                        <a href="#" class="dropdown-link">Filmes</a>
                        <div class="dropdown-content">
                            <a href="{{ url('acao') }}">Data de lançamento</a>
                            <a href="{{ url('aventura') }}">Top 100 filmes</a>
                            <a href="{{ url('animacao') }}">Os filmes mais populares</a>
                            <a href="{{ url('comedia') }}">Caixa surpresa</a>
                            <a href="{{ url('acao') }}">Bilhetes</a> <!-- Tal vez compra e agendamento de filmes -->
                            <a href="{{ url('acao') }}">Notícias de filmes</a>
                        </div>
                    </li>

                    <li class="dropdown">
                        <a href="#" class="dropdown-link">Séries</a>
                        <div class="dropdown-content">
                            <a href="{{ url('acao') }}">O que está a dar</a>
                            <a href="{{ url('aventura') }}">Top 100 séries</a>
                            <a href="{{ url('animacao') }}">As séries mais populares</a>
                            <a href="{{ url('comedia') }}">Caixa surpresa</a>
                            <a href="{{ url('acao') }}">Notícias das séries</a>
                        </div>
                    </li>

                    <li class="dropdown">
                        <a href="#" class="dropdown-link">W2</a>
                        <div class="dropdown-content">
                            <a href="{{ url('acao') }}">W2W</a>
                            <a href="{{ url('aventura') }}">Trailers</a>
                            <a href="{{ url('animacao') }}">W2 Escolha</a>
                            <a href="{{ url('animacao') }}">O que está por vir?</a>
                        </div>
                    </li>

                    <li class="dropdown">
                        <a href="#" class="dropdown-link">Prêmios e Eventos</a>
                        <div class="dropdown-content">
                            <a href="{{ url('acao') }}">Oscares</a>
                            <a href="{{ url('aventura') }}">Central de prêmios</a>
                            <a href="{{ url('animacao') }}">Central de festivais</a>
                            <a href="{{ url('animacao') }}">Todos os eventos</a>
                        </div>
                    </li>

                    <li class="dropdown">
                        <a href="#" class="dropdown-link">Celebridades</a>
                        <div class="dropdown-content">
                            <a href="{{ url('acao') }}">Oscares</a>
                            <a href="{{ url('aventura') }}">Nascidas hoje</a>
                            <a href="{{ url('animacao') }}">As celebridades mais populares</a>
                            <a href="{{ url('animacao') }}">Notícias dos famosos</a>
                        </div>
                    </li>

                    <li class="dropdown">
                        <a href="#" class="dropdown-link">Gêneros</a>
                        <div class="dropdown-content">
                            <a href="{{ url('acao') }}">Ação</a>
                            <a href="{{ url('aventura') }}">Aventura</a>
                            <a href="{{ url('animacao') }}">Animação</a>
                            <a href="{{ url('comedia') }}">Comédia</a>
                            <a href="{{ url('acao') }}">Drama</a>
                            <a href="{{ url('acao') }}">Documentário</a>
                            <a href="{{ url('acao') }}">Fantasia</a>
                            <a href="{{ url('acao') }}">Ficção Científica</a>
                            <a href="{{ url('acao') }}">Guerra</a>
                            <a href="{{ url('acao') }}">Musical</a>
                            <a href="{{ url('acao') }}">Romance</a>
                            <a href="{{ url('acao') }}">Suspense</a>
                            <a href="{{ url('acao') }}">Terror</a>
                            <a href="{{ url('acao') }}">Western</a> <!-- Pelo que eu entendi, velho oeste -->
                        </div>
                    </li>
                </ul>
            </nav>
        </div>
    </header>
</body>
</html>
