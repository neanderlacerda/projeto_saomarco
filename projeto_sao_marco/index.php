<?php

// if(isset($_GET['pagina'])){
//   $pagina = $_GET['pagina'];
// }
// else{
//   $pagina = 'inicio';
// }

$pagina = (isset($_GET['pagina'])) ? $_GET['pagina'] : 'inicio';

?>

<html>
  <head>
    <title>São Marco</title>

    <meta charset="utf-8" />

    
    <!-- CSS do Bootstrap -->
    <link rel="stylesheet" href="./css/bootstrap.min.css">
    <!-- CSS do projeto -->
    <link href="./css/estilo.css" rel="stylesheet">

  </head>

  <body>

    <!-- Container Principal do Site -->
    <div class="container">

      <!-- Cabeçalho -->
      <div id="header">
        <img src="logo2.png" alt="falha ao carregar logo" align="center">

        <!-- <div class="jumbotron jumbotron-fluid">
          <div class="container">
            <img src="logo2.png" alt="falha ao carregar logo">
            <h1 class="display-4">São Marco</h1>
            <p class="lead">Indústria e Comércio LTDA</p>
          </div> -->
        </div>
        
      </div>

      <!-- Menu -->
      <nav class="navbar navbar-expand-lg navbar-light shadow p-3 mb-0" style="background-color: #FF8C00;">
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarText" aria-controls="navbarText" aria-expanded="true" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarText">
          <ul class="navbar-nav">
            <li class="nav-item <?= ($pagina == 'inicio')?'active':'' ?>">
              <a class="nav-link" href="?pagina=inicio">Início</a>
            </li>
            <li class="nav-item <?= ($pagina == 'sobre')?'active':'' ?>">
              <a class="nav-link" href="?pagina=sobre">Meus Chamados</a>
            </li>
            <li class="nav-item <?= ($pagina == 'abrir_chamado')?'active':'' ?>">
              <a class="nav-link" href="?pagina=abrir_chamado">Abrir Chamado</a>
            </li>
            <!-- <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown"aria-haspopup="true" aria-expanded="false">
                Abrir Chamado
              </a>
              <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                <a class="dropdown-item" href="#">Computador/Impressora</a>
                <a class="dropdown-item" href="#">Impressora</a>
                <a class="dropdown-item" href="#">Outro</a>
                <div class="dropdown-divider"></div>
                <a class="dropdown-item" href="#">Totvs/Microsiga</a>
              </div>
            </li> -->
          </ul>
        </div>
      </nav>

      <!-- Breadcrumbs -->
  <!--     <nav aria-label="breadcrumb" style="background-color: #FF8C00;">
        <ol class="breadcrumb">
          <li class="breadcrumb-item active" aria-current="page">Início</li>
        </ol>
      </nav> -->

      <!-- Área Principal -->
      <div id="main">

        <?php

          include("./paginas/$pagina.php");
        
        ?>

      </div>

      <!-- Rodapé -->
      <div id="footer">

      <div class="jumbotron jumbotron-fluid" style="background-color: #FB7900;">
          <div class="container">
            <p>Todos os direitos reservados</p>
            <p>São Marco Indústria e Comércio LTDA</p>
          </div>
        </div>

      </div>

  </div>


  <!-- Scripts JS do Bootstrap -->
  <script src="./js/jquery-3.4.1.slim.min.js"></script>
  <script src="./js/popper.min.js"></script>
  <script src="./js/bootstrap.min.js"></script>
  
  </body>

</html>