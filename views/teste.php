<?php 
    include ("../config.php");
    include HEADER_TEMPLATE;
?>
<div class="container">
    <div class="fundotxt p-1 mt-3 mb-3">
        <h1 class="tit text-center">Teste Tibetano - Versão Pastell</h1>
    </div>
    <div class="row">
        <div class="col-12">
            <p class="text-center txtadivinha tit">
                <span class="font2">Preparado para um teste Xerife!? </span>
                <span class="font1">
                    Na Xerife Pastell, cada sabor tem uma personalidade — e agora chegou a sua vez de 
                </span>
                <span class="font2">descobrir a sua! 
                </span>
                <span class="font1">
                    Responda as <span class="font2">três perguntas</span> a seguir e veja o que suas escolhas revelam sobre você. 
                </span>
            </p>
        </div>
    </div>
    <div class="row">
        <div class="col-12 d-flex justify-content-center align-items-center mt-3">
            <img src="<?php echo BASEURL; ?>assets/img/teste.png" class="img-fluid pasteis fundim">
        </div>
    </div>
    <div class="container-geral">
        <div class="column-1">
            
            <div class="slot" data-slot="1">
                <div id="box1" class="box" draggable="true">
                    <img src="<?php echo BASEURL; ?>assets/img/queijo.png" class="img-fluid pasteis-sabores">
                </div>
                <div class="san drop-sab">
                    <span>Pastel de Queijo</span>
                </div>
            </div>
            
            <div class="slot" data-slot="2">
                <div id="box2" class="box" draggable="true">
                    <img src="<?php echo BASEURL; ?>assets/img/camarao.png" class="img-fluid pasteis-sabores">
                </div>
                <div class="san drop-sab">
                    <span>Pastel de Camarão</span>
                </div>
            </div>

            <div class="slot" data-slot="3">
                <div id="box3" class="box" draggable="true">
                    <img src="<?php echo BASEURL; ?>assets/img/bauru.png" class="img-fluid pasteis-sabores">
                </div>
                <div class="san drop-sab">
                    <span>Pastel de Bauru</span>
                </div>
            </div>

            <div class="slot" data-slot="4">
                <div id="box4" class="box" draggable="true">
                    <img src="<?php echo BASEURL; ?>assets/img/morango.png" class="img-fluid pasteis-sabores">
                </div>
                <div class="san drop-sab">
                    <span>Pastel de Morango</span>
                </div>
            </div>

            <div class="slot" data-slot="5">
                <div id="box5" class="box" draggable="true">
                    <img src="<?php echo BASEURL; ?>assets/img/beijinho.png" class="img-fluid pasteis-sabores">
                </div>
                <div class="san drop-sab">
                    <span>Pastel de beijinho</span>
                </div>
            </div>
        </div>
        <div class="column-2 opc">
            <div id="drop1" class="drop"><span>1°</span></div>
            <div id="drop2" class="drop"><span>2°</span></div>
            <div id="drop3" class="drop"><span>3°</span></div>
            <div id="drop4" class="drop"><span>4°</span></div>
            <div id="drop5" class="drop"><span>5°</span></div>
        </div>
    </div>
</div>
<?php
    include FOOTER_TEMPLATE;
?>
<script src="<?php echo BASEURL; ?>assets/js/custom/teste.js"></script>