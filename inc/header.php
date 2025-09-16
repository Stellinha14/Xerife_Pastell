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
  <nav class="navbar navbar-expand-lg navbar-light">
    <div class="container">
      <a class="navbar-brand titulo me-5" href="<?php echo BASEURL; ?>index.php">
        Xerife Pastell
        <img src="<?php echo BASEURL; ?>assets/img/icon.png" alt="Logo" width="50" height="50" class="d-inline-block mb-2">
      </a>
      <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav ms-5">
          <li class="nav-item me-3">
            <a class="nav-link active" aria-current="page" href="<?php echo BASEURL; ?>index.php">Home</a>
          </li>
          <li class="nav-item me-3">
            <a class="nav-link" href="<?php echo BASEURL; ?>views/adivinha.php">Números</a>
          </li>
          <li class="nav-item me-3">
            <a class="nav-link" href="<?php echo BASEURL; ?>views/imagens.php">Imagens</a>
          </li>
          <li class="nav-item me-3">
            <a class="nav-link" href="<?php echo BASEURL; ?>views/quiz.php">Quiz</a>
          </li>
          <li class="nav-item me-3">
            <a class="nav-link" href="<?php echo BASEURL; ?>views/famosos.php">Famosos</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>

  <script src="<?php echo BASEURL; ?>assets/js/bootstrap/bootstrap.bundle.min.js"></script>
</body>