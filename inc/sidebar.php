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
                <a class="nav-link" href="#">Jogos</a>
                <ul class="menu-dropdown">
                    <?php
                    include ("links.php");
                    ?>
                </ul>
            </li>
            <li class="nav-item me-3">
                <a class="nav-link" href="<?php echo BASEURL; ?>views/sobre.php">Sobre Nós</a>
            </li>
        </ul>
    </div>
</div>
