<div id="sidebar">
    <img id="cancelar" src="<?php echo BASEURL; ?>assets/img/cancelar.png" alt="logo" class="cancelar">
    <header class="menu-mobile-top">
        <p class="navbar-brand titulo-lateral">Xerife Pastell</p>
        <img src="<?php echo BASEURL; ?>assets/img/icon.png" alt="Logo" class="menu-img-logo-mobile ms-2">
    </header>
    <div class="bottom-mobile">
        <ul class="navbar-links">
            <hr class="hr-inicial">
            <li class="nav-item me-3">
                <img src="<?php echo BASEURL; ?>assets/img/home.png" alt="logo" class="icon-home">
                <a class="nav-link active" href="<?php echo BASEURL; ?>index.php">Home</a>
            </li>
            <hr>
            <li class="nav-item me-3">
                <a class="nav-link" href="<?php echo BASEURL; ?>views/adivinha.php">Jogos</a>
                <ul class="menu-dropdown">
                    <li class="nav-item">
                        <a class="nav-link-drop" href="<?php echo BASEURL; ?>views/adivinha.php">
                            <img src="<?php echo BASEURL; ?>assets/img/numeros.png" alt="Logo" class="icon-menu">Números
                        </a>
                    </li>
                    <!-- resto dos itens -->
                </ul>
            </li>
            <li class="nav-item me-3">
                <a class="nav-link" href="<?php echo BASEURL; ?>views/sobre.php">Sobre Nós</a>
            </li>
        </ul>
    </div>
</div>
<div id="overlay"></div>