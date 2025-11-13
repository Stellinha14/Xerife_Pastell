<div id="sidebar">
    <img id="cancelar" src="<?php echo BASEURL; ?>assets/img/cancelar.png" alt="logo" class="cancelar">
    <header class="menu-mobile-top">
        <p class="navbar-brand titulo-lateral">Xerife Pastell</p>
        <img src="<?php echo BASEURL; ?>assets/img/icon.png" alt="Logo" class="menu-img-logo-mobile ms-2">
    </header>
    <div class="bottom-mobile">
        <ul class="navbar-links-mobile">
            <hr class="hr-inicial">
            <li class="nav-item-mobile <?=  $current_page == 'index.php' ? 'active' : ''?>">
                <img src="<?php echo BASEURL; ?>assets/img/home.png" alt="logo" class="icon-home">
                <a class="nav-link-mobile" href="<?php echo BASEURL; ?>index.php">Home</a>
            </li>
            <hr>
            <li id="jogos-mobile" class="nav-item-mobile mt-3">
                <a class="nav-link-mobile <?=  ($current_page == 'adivinha.php' || $current_page == 'famosos.php' || $current_page == 'imagens.php' || $current_page == 'quiz.php' || $current_page == 'teste.php' || $current_page == 'resul_fama.php' || $current_page == 'resul_imagens.php' || $current_page == 'resul_quiz.php' || $current_page == 'resultados.php') ? 'active' : '' ?>" href="#"><img src="<?php echo BASEURL; ?>assets/img/game.png" alt="Logo" class="icon-menu me-2">Jogos<span class="sidebar-arrow ms-2"></span></a>
                <ul class="menu-dropdown-mobile">
                    <?php
                    include ("links.php");
                    ?>
                </ul>
            </li>
            <li class="nav-item-mobile <?=  $current_page == 'sobre.php' ? 'active' : ''?>">
                <a class="nav-link-mobile" href="<?php echo BASEURL; ?>views/sobre.php"><img src="<?php echo BASEURL; ?>assets/img/sobre.png" alt="nos" class="icon-menu me-2">Sobre Nós</a>
            </li>
        </ul>
    </div>
</div>
