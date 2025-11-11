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
    <!-- <div id="sidebar"> -->
      <!-- <img id="cancelar" src="<?php echo BASEURL; ?>assets/img/cancelar.png" alt="logo" class="cancelar"> -->
      <!-- <header class="menu-mobile-top" type="button">
        <p class="navbar-brand titulo-lateral">Xerife Pastell</p>
        <img src="<?php echo BASEURL; ?>assets/img/icon.png" alt="Logo" class="menu-img-logo-mobile ms-2">
      </header> -->
      <!-- <div class="bottom-mobile"> -->
        <ul class="navbar-links-desktop">
          <!-- <hr class="hr-inicial"> -->
          <li class="nav-item me-3">
            <img src="<?php echo BASEURL; ?>assets/img/home.png" alt="logo" class="icon-home">
            <a class="nav-link active" aria-current="page" href="<?php echo BASEURL; ?>index.php">Home</a> 
          </li>
          <hr>
          <li class="nav-item me-3">
            <a class="nav-link" href="<?php echo BASEURL; ?>views/adivinha.php">Jogos</a>

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
                <a class="nav-link-drop" href="<?php echo BASEURL; ?>views/famosos.php"><img src="<?php echo BASEURL; ?>assets/img/i_teste.png" alt="Logo" class="icon-menu">Teste Tibetano</a>
              </li>
            </ul>
          </li>
          <li class="nav-item me-3">
            <a class="nav-link" href="<?php echo BASEURL; ?>views/sobre.php">Sobre Nós</a>
          </li>
        </ul>

      <!-- </div> -->
    <!-- </div> -->
  </nav>
  <div id="overlay"></div>
  <script src="<?php echo BASEURL; ?>assets/js/bootstrap/bootstrap.bundle.min.js"></script>
  <script src="<?php echo BASEURL; ?>assets/js/custom/menu.js"></script>
</body>