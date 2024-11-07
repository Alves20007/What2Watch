<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nome do Site</title>
    <link rel="stylesheet" href="{{ asset('css/header.css') }}">
</head>
<body>
    <!-- Header do Site -->
    <header>
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
                    <li><a href="sobre.html">GR</a></li> <!-- Global rating-->
                    <li><a href="servicos.html">MR</a></li> <!-- My rating-->
                    <li><a href="contato.html">2W</a></li> <!-- 2 watch (é tipo filmes e series guardados para ver depois))-->
                    
                    <!-- Dropdown Simplificado 
                    Nota depois acredito que cada "link" tenha de ser associado a data base-->
                    <li class="dropdown">
                        <a href="#" class="dropdown-link">Filmes</a>
                        <div class="dropdown-content">
                            <a href="{{ url('acao') }}">Data de lançamento</a>
                            <a href="{{ url('aventura') }}">Top 100 filmes</a>
                            <a href="{{ url('animacao') }}">Os filmes mais populares</a>
                            <a href="{{ url('comedia') }}">Caixa  surpresa</a>
                            <a href="{{ url('acao') }}">bilhetes</a> <!--Talvez compra e agendamento de filmes -->
                            <a href="{{ url('acao') }}">Noticias de filmes</a>
                        </div>
                    </li>
                    
                    <li class="dropdown">
                        <a href="#" class="dropdown-link">Series</a>
                        <div class="dropdown-content">
                            <a href="{{ url('acao') }}">O que está a dar</a>
                            <a href="{{ url('aventura') }}">Top 100 series</a>
                            <a href="{{ url('animacao') }}">As series mais populares</a>
                            <a href="{{ url('comedia') }}">Caixa  surpresa</a>
                            <a href="{{ url('acao') }}">Noticias das series</a>

                    <li class="dropdown">
                        <a href="#" class="dropdown-link">W2</a>
                        <div class="dropdown-content">
                            <a href="{{ url('acao') }}">W2W</a>
                            <a href="{{ url('aventura') }}">Trailers</a>
                            <a href="{{ url('animacao') }}">W2 Escolha</a>
                        </div>
                    </li>

                    <li class="dropdown">
                        <a href="#" class="dropdown-link">Gêneros</a>
                        <div class="dropdown-content">
                            <a href="{{ url('acao') }}">Ação</a>
                            <a href="{{ url('aventura') }}">Aventura</a>
                            <a href="{{ url('animacao') }}">Animação</a>
                            <a href="{{ url('comedia') }}">Comédia</a>
                            <a href="{{ url('Drama') }}">Drama</a>
                            <a href="{{ url('Documentario') }}">Documentário</a>
                            <a href="{{ url('fantasia') }}">Fantasia</a>
                            <a href="{{ url('Fc') }}">Ficção Científica</a>
                            <a href="{{ url('Guerra') }}">Guerra</a>
                            <a href="{{ url('Musical') }}">Musical</a>
                            <a href="{{ url('Romance') }}">Romance</a>
                            <a href="{{ url('suspense') }}">Suspense</a>
                            <a href="{{ url('terror') }}">Terror</a>
                            <a href="{{ url('western') }}">Western</a> <!-- pelo que eu entendi velho oeste -->
                        </div>
                    </li>
                </ul>
            </nav>
        </div>
    </header>
</body>
</html>

