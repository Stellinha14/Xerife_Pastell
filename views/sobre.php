<?php 
    include ("../config.php");
    include HEADER_TEMPLATE;
    include SIDE_BAR;
?>
<div class="container d-flex flex-column justify-content-center align-items-center">
    <div class="fundotxt p-1 mt-3 mb-3 col-12">
        <h1 class="tit text-center">Sobre Nós</h1>
    </div>
    <p class="text-center txtadivinha tit font2"><span class="font1">Conheça um pouca da história da </span> Xerife Pastell!</p>
    <div class="container container_nos mt-4">
        <div id="carouselExample" class="carousel slide car" data-bs-ride="carousel">
            <div class="carousel-indicators">
                <button type="button" data-bs-target="#carouselExample" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                <button type="button" data-bs-target="#carouselExample" data-bs-slide-to="1" aria-label="Slide 2"></button>
                <button type="button" data-bs-target="#carouselExample" data-bs-slide-to="2" aria-label="Slide 3"></button>
            
            </div>
            <div class="carousel-inner">
                <!-- imagem 1 -->
                <div class="carousel-item active" data-bs-interval="5000">
                    <img src="<?php echo BASEURL; ?>assets/img/pastell.jpg" class="nos" alt="...">
                    <div class="carousel-caption">
                        <h4 class="san font3">Patrícia e Stella</h4>
                        <p class="font_op">Fundadoras da Xerife Pastell
                        <p>
                    </div>
                    <div class="carousel-caption-mobile">
                        <h4 class="san font3">Patrícia e Stella</h4>
                        <p class="font_op">Fundadoras da Xerife Pastell
                        <p>
                    </div>
                </div>
                <!-- imagem 2 -->
                <div class="carousel-item" data-bs-interval="5000">
                    <img src="<?php echo BASEURL; ?>assets/img/patricia.jpg" class="nos" alt="...">
                    <div class="carousel-caption">
                        <h4 class="san font3">Patrícia Pereira</h4>
                        <p class="font_op">Uma das fundadoras da Xerife Pastell
                        <p>
                    </div>
                    <div class="carousel-caption-mobile">
                        <h4 class="san font3">Patrícia Pereira</h4>
                        <p class="font_op">Uma das fundadoras da Xerife Pastell
                        <p>
                    </div>
                </div>
                <!-- imagem 3 -->
                <div class="carousel-item" data-bs-interval="5000">
                    <img src="<?php echo BASEURL; ?>assets/img/stella.jpg" class="nos" alt="...">
                    <div class="carousel-caption">
                        <h4 class="san font3">Stella Azevedo</h4>
                        <p class="font_op">Uma das fundadoras da Xerife Pastell
                        <p>
                    </div>
                    <div class="carousel-caption-mobile">
                        <h4 class="san font3">Stella Azevedo</h4>
                        <p class="font_op">Uma das fundadoras da Xerife Pastell
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
    </div>
    <div class="cont-sobre mt-5">
        <p class="open">Desde 2007, trabalhamos com dedicação, carinho e segurança. Para garantir o melhor sabor e experiência a todos que nos visitam.</p>
        <p class="open">O nome carrega um significado especial. "Xerife" representa segurança e liderança — valores que aplicamos no dia a dia da nossa pastelaria, garantindo alimentos de qualidade e buscando ser referência no mundo dos pastéis. Já "Pastell" é a junção dos nomes das fundadoras, Patrícia e Stella (Pa + Stell), o que explica os dois "L" no final.</p>
    </div>
</div>
<?php 
    include FOOTER_TEMPLATE;
?>