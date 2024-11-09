<html>
    <body>
        <header>
            <link href="{{ asset('css/header.css') }}" rel="stylesheet"> 
            <div class="container">
                <!-- Logo -->
                <div class="logo">
                    <a href="index.html">
                        <img src="{{ asset('imagens/logo.png') }}" alt="Logo">
                    </a>
                </div>
                
                <!-- Menu de Navegação -->
                <nav class="nav-menu">
                    <ul>                    
                        <!-- Dropdown Simplificado -->
                        <li class="dropdown">
                            <a href="#" class="dropdown-link">Filmes▼</a>
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
                                <a href="{{ url('acao') }}">W2W</a> <!-- o que ver -->
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

                        <li class="dropdown">
                            <a href="#" class="dropdown-link">Gêneros▼</a>
                            <div class="dropdown-content">
                                <a href="{{ url('acao') }}">► Ação</a>
                                <a href="{{ url('aventura') }}">► Aventura</a>
                                <a href="{{ url('animacao') }}">► Animação</a>
                                <a href="{{ url('western') }}">► anime</a>
                                <a href="{{ url('Comedia') }}">► Comédia</a>
                                <a href="{{ url('Drama') }}">► Drama</a>
                                <a href="{{ url('Documentario') }}">► Documentário</a>
                                <a href="{{ url('fantasia') }}">► Fantasia</a>
                                <a href="{{ url('Fc') }}">► Ficção Científica</a>
                                <a href="{{ url('Guerra') }}">► Guerra</a>
                                <a href="{{ url('Musical') }}">► Musical</a>
                                <a href="{{ url('Romance') }}">► Romance</a>
                                <a href="{{ url('suspense') }}">► Suspense</a>
                                <a href="{{ url('terror') }}">► Terror</a>
                                <a href="{{ url('maca') }}">► 🍏</a>
                                <a href="{{ url('western') }}">► Western</a> <!-- Pelo que eu entendi, velho oeste -->
                            </div>
                        </li>
                        <!-- Barra de Pesquisa -->
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
