<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="utf-8">
  <title>Xerife Pastell</title>
  <meta name="description" content="">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="<?php echo BASEURL; ?>assets/css/bootstrap/bootstrap.min.css">
  <link rel="stylesheet" href="<?php echo BASEURL; ?>assets/css/custom/global.css">
  <link rel="stylesheet" href="<?php echo BASEURL; ?>assets/css/custom/home.css">
  <link rel="icon" href="<?php echo BASEURL; ?>assets/img/logo.png" type="image/png">
</head>

<body>
  <nav class="navbar">
    <div class="brand-container">
      <div id="abrir-menu" type="button">
        <img src="<?php echo BASEURL; ?>assets/img/barra-de-menu.png" alt="menu" class="menu me-2">
      </div>
      <a class="navbar-brand titulo" href="<?php echo BASEURL; ?>index.php">
        Xerife Pastell
        <img src="<?php echo BASEURL; ?>assets/img/icon.png" alt="Logo" id="img-menu" class="menu-img-logo mb-2">
      </a>
    </div>
    <?php include("sidebar.php"); ?>
        <ul class="navbar-links-desktop">
          <li class="nav-item">
            <img src="<?php echo BASEURL; ?>assets/img/home.png" alt="logo" class="icon-home">
            <a class="nav-link" aria-current="page" href="<?php echo BASEURL; ?>index.php"><img src="<?php echo BASEURL; ?>assets/img/home.png" alt="Logo" class="icon-menu-home">Home</a> 
          </li>
          <hr>
          <li class="nav-item me-3">
            <a id="dropdown" class="nav-link" href=#><img src="<?php echo BASEURL; ?>assets/img/game.png" alt="Logo" class="icon-menu">Jogos</a>

            <ul class="menu-dropdown">
              <li class="nav-item">
                <a class="nav-link-drop" href="<?php echo BASEURL; ?>views/adivinha.php"><img src="<?php echo BASEURL; ?>assets/img/numeros.png" alt="Logo" class="icon-menu">Números</a>
              </li>

              <li class="nav-item">
                <a class="nav-link-drop" href="<?php echo BASEURL; ?>views/imagens.php"><img src="<?php echo BASEURL; ?>assets/img/galeria.png" alt="Logo" class="icon-menu">Imagens</a>
              </li>

              <li class="nav-item">
                <a class="nav-link-drop" href="<?php echo BASEURL; ?>views/quiz.php"><img src="<?php echo BASEURL; ?>assets/img/quiz.png" alt="Logo" class="icon-menu">Quiz</a>
              </li>

              <li class="nav-item">
                <a class="nav-link-drop" href="<?php echo BASEURL; ?>views/famosos.php"><img src="<?php echo BASEURL; ?>assets/img/fama.png" alt="Logo" class="icon-menu">Famosos</a>
              </li>

              <li class="nav-item">
                <a class="nav-link-drop" href="<?php echo BASEURL; ?>views/teste.php"><img src="<?php echo BASEURL; ?>assets/img/i_teste.png" alt="Logo" class="icon-menu">Teste Tibetano</a>
              </li>
            </ul>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="<?php echo BASEURL; ?>views/sobre.php"><img src="<?php echo BASEURL; ?>assets/img/sobre.png" alt="Logo" class="icon-menu">Sobre Nós</a>
          </li>
        </ul>
  </nav>
  <div id="overlay"></div>
  <script src="<?php echo BASEURL; ?>assets/js/bootstrap/bootstrap.bundle.min.js"></script>
  <script src="<?php echo BASEURL; ?>assets/js/custom/menu.js"></script>
</body>