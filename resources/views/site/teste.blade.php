
<x-header />
<html lang="pt">
<head>
    <link href="{{ asset('css/teste.css') }}" rel="stylesheet"> 
</head>
<body>
  <header>
    <nav>
      <!-- Navegação aqui -->
    </nav>
  </header>
  <div class="container">
    <?php
      // Array de filmes para cada categoria, com o campo 'url' para o link de cada filme
      $movies = [
          'Aventura' => [
              ['src' => 'imagens/filmes/IJ.jpg', 'title' => 'Aventura', 'url' => url('acao')],
              ['src' => 'imagens/filmes/inception.png', 'title' => 'Aventura Epica', 'url' => url('acao')],
              ['src' => 'imagens/filmes/dune.png', 'title' => 'Aventura no Deserto', 'url' => url('acao/acao')],
              ['src' => 'imagens/filmes/dino.jpg', 'title' => 'Aventura Jurasica', 'url' => url('acao/acao')],
              ['src' => 'imagens/filmes/jumanji.png', 'title' => 'Aventura na Selva', 'url' => url('acao/acao')],
              ['src' => 'imagens/filmes/007.png', 'title' => 'Aventura pelo Globo', 'url' => url('acao/acao')],               
              ['src' => 'imagens/filmes/everest.png', 'title' => 'Aventura na Montanha', 'url' => url('acao/acao')],
              ['src' => 'imagens/filmes/Oz.png', 'title' => 'Jornada', 'url' => url('acao/acao')],
              ['src' => 'imagens/filmes/green book.png', 'title' => 'Viagem', 'url' => url('acao/acao')],
              ['src' => 'imagens/filmes/Pi.jpg', 'title' => 'Aventura no Mar', 'url' => url('acao/acao')],
              ['src' => 'imagens/filmes/sword.jpg', 'title' => 'Mestres de espadas', 'url' => url('acao/acao')],
              ['src' => 'imagens/filmes/back to the future.png', 'title' => 'Aventuras Jovenies', 'url' => url('acao/acao')],
              ['src' => 'imagens/filmes/miles.png', 'title' => 'Aventura Urbanas', 'url' => url('acao/acao')],
          ],
          'comedy' => [
              ['src' => 'comedia.jpg', 'title' => 'Comedy Movie 1', 'url' => url('acao/acao')],
              ['src' => 'comedy_movie2.jpg', 'title' => 'Comedy Movie 2', 'url' => url('acao/acao')],
              ['src' => 'comedy_movie3.jpg', 'title' => 'Comedy Movie 3', 'url' => url('acao/acao')],
              ['src' => 'comedy_movie4.jpg', 'title' => 'Comedy Movie 4', 'url' => url('acao/acao')],
              ['src' => 'comedy_movie5.jpg', 'title' => 'Comedy Movie 5', 'url' => url('acao/acao')],
              ['src' => 'comedy_movie6.jpg', 'title' => 'Comedy Movie 6', 'url' => url('acao/acao')],
          ],
      ];

      // Função para exibir uma categoria de filmes
      function displayMovies($movies, $category) {
          $totalMovies = count($movies);
          $perPage = 4;

          // Determina a página e ajusta para o índice de início circular
          $page = isset($_GET[$category . '_page']) ? (int)$_GET[$category . '_page'] : 0;

          // Garante que o índice seja circular
          $start = ($page * $perPage) % $totalMovies;

          echo "<div class='section' id='{$category}'>";
          echo "<h2>" . ucfirst($category) . "</h2>";
          echo "<div class='grid'>";

          // Exibe 4 filmes de forma circular
          for ($i = 0; $i < $perPage; $i++) {
              $index = ($start + $i) % $totalMovies;
              $movie = $movies[$index];

              echo "<div class='movie'>
                      <a href='{$movie['url']}' target='_blank'>
                        <img src='{$movie['src']}' alt='{$movie['title']}'>
                      </a>
                      <p>{$movie['title']}</p>
                    </div>";
          }

          echo "</div>";

          // Botões de navegação circular
          echo "<div class='nav-buttons'>";
          
          // Botão Anterior (indo para a página anterior)
          $prevPage = $page > 0 ? $page - 1 : ceil($totalMovies / $perPage) - 1;
          echo "<a href='?{$category}_page={$prevPage}' class='nav-button prev'>
                  <span>&lt;</span> <!-- Seta para a esquerda -->
                </a>";

          // Botão Próximo (indo para a próxima página)
          $nextPage = $page + 1;
          echo "<a href='?{$category}_page={$nextPage}' class='nav-button next'>
                  <span>&gt;</span> <!-- Seta para a direita -->
                </a>";

          echo "</div>";
          echo "</div>";
      }

      // Exibe as categorias
      foreach ($movies as $category => $movieList) {
          displayMovies($movieList, $category);
      }
    ?>
  </div>
</body>
<x-footer />
</html>
