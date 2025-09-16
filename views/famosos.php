<?php
include("../config.php");
include HEADER_TEMPLATE;
?>
<div class="container">
    <div class="fundotxt p-1 mt-3 mb-3">
        <h1 class="tit text-center">Qual famoso você seria? - Versão dos xerifinhos</h1>
    </div>
    <p class="text-center txtadivinha tit font1"><span class="font2">Tá preparado, Xerife?</span> Descubra agora a sua <span class="font2">versão estrelada!</span> Cada persona tem um estilo único — <span class="font2">escolha a que mais combina com você</span> e descubra qual celebridade é a sua cara!</p>
</div>
<!-- carrosel e lista de opções -->
<form id="famoso" action="resul_fama.php" method="POST">
    <div class="container container_car mt-4">
        <div id="carouselExample" class="carousel slide car" data-bs-ride="carousel">
            <div class="carousel-indicators">
                <button type="button" data-bs-target="#carouselExample" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                <button type="button" data-bs-target="#carouselExample" data-bs-slide-to="1" aria-label="Slide 2"></button>
                <button type="button" data-bs-target="#carouselExample" data-bs-slide-to="2" aria-label="Slide 3"></button>
                <button type="button" data-bs-target="#carouselExample" data-bs-slide-to="3" aria-label="Slide 3"></button>
                <button type="button" data-bs-target="#carouselExample" data-bs-slide-to="4" aria-label="Slide 3"></button>
            </div>
            <div class="carousel-inner">
                <!-- imagem 1 -->
                <div class="carousel-item active" data-bs-interval="5000">
                    <img src="<?php echo BASEURL; ?>assets/img/nba.png" class="d-block img_car" alt="...">
                    <div class="carousel-caption d-none d-md-block">
                        <h4 class="san font3">Pastell Jordan</h4>
                        <p class="font_op">Apaixonado por esportes, principalmente por basquete. E claro, fã da NBA!</p>
                    </div>
                </div>
                <!-- imagem 2 -->
                <div class="carousel-item" data-bs-interval="5000">
                    <img src="<?php echo BASEURL; ?>assets/img/rock.png" class="d-block img_car" alt="...">
                    <div class="carousel-caption d-none d-md-block">
                        <h4 class="san font3">Rock in Pastell</h4>
                        <p class="font_op">Rock é com ele mesmo! Amante da música, e de uma boa guitarra.</p>
                    </div>
                </div>
                <!-- imagem 3 -->
                <div class="carousel-item" data-bs-interval="5000">
                    <img src="<?php echo BASEURL; ?>assets/img/maromba.png" class="d-block img_car" alt="...">
                    <div class="carousel-caption d-none d-md-block">
                        <h4 class="san font3">Muscle Pastell</h4>
                        <p class="font_op">Vive na academia! Para ele o dia sem se exercitar e fortalecer os músculos não tem graça..</p>
                    </div>
                </div>
                <!-- imagem 4 -->
                <div class="carousel-item" data-bs-interval="5000">
                    <img src="<?php echo BASEURL; ?>assets/img/sr.png" class="d-block img_car" alt="...">
                    <div class="carousel-caption d-none d-md-block">
                        <h4 class="san font3">Sra. Pastell</h4>
                        <p class="font_op"> Patricinha. Ama passar horas no salão, sempre sempre impecável e cheia de charme!</p>
                    </div>
                </div>
                <!-- imagem 5 -->
                <div class="carousel-item" data-bs-interval="5000">
                    <img src="<?php echo BASEURL; ?>assets/img/skate.png" class="d-block img_car" alt="...">
                    <div class="carousel-caption d-none d-md-block">
                        <h4 class="san font3">Pastello</h4>
                        <p class="font_op">Skatista nato, cheio de energia e sempre em busca da próxima manobra radical!!
                        <p>
                    </div>
                </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExample" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExample" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>
        <div class="lista_bg ms-3">
            <div class="cont_listas">
                <p class="text-center">Digite abaixo o <span class="font2">número</span> da versão do xeriinho que você mais se identfica:</p>
                <div class="opc_lista mt-3">
                    <ol>
                        <li> Pastell Jordan</li>
                        <li> Rock in Pastell</li>
                        <li> Muscle Pastell</li>
                        <li> Sra. Pastell</li>
                        <li> Pastello</li>
                    </ol>
                </div>
                <input type="number" id="num" name="num" min="1" max="5" class="mt-3 text-center famoso_input" value="1">
            </div>
        </div>
    </div>
    <!-- fim do carrosel e da lista de opções -->

    <div class="d-flex flex-column text-center mt-4">
        <div id="alert" class="container alerta">
            <!-- alerta de erro -->
        </div>
        <h5 class="tit font1"><span class="font2">E aí, xerife!</span> Preparado(a) para descobrir sua <span class="font2">versão famosa!?</span></h5>

        <div class="carta justify-content-center mb-4">
            <!-- não é visível para o usuário, guarda um valor invisível para enviar junto com o formulário -->
            <input type="hidden" name="img" id="img">
            <input type="hidden" name="nome" id="opc">
            <input type="hidden" name="fama" id="fama">
            <button type="submit" class="btn-en tit">Enviar</button>
            <button type="reset" class="btn-lim tit">Limpar</button>
        </div>
    </div>
</form>

<?php
include FOOTER_TEMPLATE;
?>
<script src="<?php echo BASEURL; ?>assets/js/custom/famoso.js"></script>