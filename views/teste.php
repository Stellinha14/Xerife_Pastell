<?php
include("../config.php");
include HEADER_TEMPLATE;
?>
<div class="container">
    <header>
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
    </header>

    <!-- Teste 1 -->
    <section arial-label="Teste Tibetano 1">
        <!-- enunciado -->
        <div class="enum txtadivinha tit">
            <h1><span class="font2">Questão 01.</span> O Teste dos Pastéis Lendários!</h1>
            <p>Imagine que você acaba de chegar na <span class="font2">Xerife Pastell</span>, onde o cheiro é simplesmente irresistível! Na sua frente estão <span class="font2">5 pastéis lendários:</span>
            </p>
            <!-- sabor + icon -->
            <div class="d-flex align-items-center mb-2">
                <img src="<?php echo BASEURL; ?>assets/img/i_queijo.png" class="icons" alt="icon de queijo">
                <p class="font2 m-0">Queijo;</p>
            </div>
            <div class="d-flex align-items-center mb-2">
                <img src="<?php echo BASEURL; ?>assets/img/i_bauru.png" class="icons" alt="icon de bauru">
                <p class="font2 m-0">Bauru;</p>
            </div>
            <div class="d-flex align-items-center mb-2">
                <img src="<?php echo BASEURL; ?>assets/img/i_camarao.png" class="icons" alt="icon de camarão">
                <p class="font2 m-0">Camarão;</p>
            </div>
            <div class="d-flex align-items-center mb-2">
                <img src="<?php echo BASEURL; ?>assets/img/i_morango.png" class="icons" alt="icon de morango">
                <p class="font2 m-0">Morango;</p>
            </div>
            <div class="d-flex align-items-center">
                <img src="<?php echo BASEURL; ?>assets/img/i_beijinho.png" class="icons" alt="icon de beijinho">
                <p class="font2 m-0">Beijinho.</p>
            </div>

            <p class="mt-2">Coloque esses pastéis na ordem que mais te agrada, do primeiro ao último. <span class="font2">NÃO PENSE DEMAIS.</span> Siga o seu instinto de xerife e escolha pela emoção do momento!</p>
            <p>Depois é so clicar em <span class="font2">"Ver Significado"</span> e descobrir o que suas escolhas revelam sobre você!</p>
            
        </div>

        <div class="container-geral" arial-label="Teste Tibetano 1">
            <!-- Box -->
            <div class="cont_test1">
                <div class="column-1">
                    <h1 class="san text-center tit-column">Sabores</h1>
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
                <!-- Drop -->
                <div class="column-2 opc">
                    <h1 class="san text-center tit-column">Posições</h1>
                    <div class="cont_drop">
                        <span>1°</span>
                        <div id="drop1" class="drop"><span>1°</span></div>
                    </div>
                    <div class="cont_drop">
                        <span>2°</span>
                        <div id="drop2" class="drop"><span>2°</span></div>
                    </div>
                    <div class="cont_drop">
                        <span>3°</span>
                        <div id="drop3" class="drop"><span>3°</span></div>
                    </div>
                    <div class="cont_drop">
                        <span>4°</span>
                        <div id="drop4" class="drop"><span>4°</span></div>
                    </div>
                    <div class="cont_drop">
                        <span>5°</span>
                        <div id="drop5" class="drop"><span>5°</span></div>
                    </div>
                </div>
            </div>
            <!-- button -->
            <div class="carta-btn justify-content-center align-items-center">
                <button type="button" id="btnSig" class="btn-en tit btnSig">Ver Significado</button>
                <button type="button" id="btnLimpa" class="btn-lim tit">Resetar</button>
            </div>
            <!-- signicados -->
            <div class="d-flex flex-column significado">
                <p class="text-center txtadivinha tit font1">
                    A maneira como você ordenou os pasteis, representa a prioridade que cada um destes campos abaixo tem em sua vida:
                </p>
                <ul class="lista-signi">
                    <li class="text-start txtadivinha tit font1">
                        <span class="font2">Pastel de Queijo:</span>
                        Estabilidade e Segurança
                    </li>
                    <li class="text-start txtadivinha tit font1">
                        <span class="font2">Pastel de Bauru:</span>
                        Amizade e Alegria
                    </li>
                    <li class="text-start txtadivinha tit font1">
                        <span class="font2">Pastel de Camarão:</span>
                        Paixão e Intensidade
                    </li>
                    <li class="text-start txtadivinha tit font1">
                        <span class="font2">Pastel de Morango:</span>
                        Afeto e Doçura
                    </li>
                    <li class="text-start txtadivinha tit font1">
                        <span class="font2">Pastel de Beijinho:</span>
                        Nostalgia e Inocência
                    </li>
                </ul>
            </div>
        </div>
    </section>

    <!-- Teste 2 -->
    <section arial-label="Teste Tibetano 2">
        <!-- enunciado -->
        <div class="enum txtadivinha tit">
            <h1><span class="font2">Questão 02.</span> O que!</h1>
            <p>Imagine que você acaba de chegar na <span class="font2">Xerife Pastell</span>, onde o cheiro é simplesmente irresistível! Na sua frente estão <span class="font2">5 pastéis lendários:</span>
            </p>
            <!-- sabor + icon -->
            <div class="d-flex align-items-center mb-2">
                <img src="<?php echo BASEURL; ?>assets/img/i_queijo.png" class="icons" alt="icon de queijo">
                <p class="font2 m-0">Queijo;</p>
            </div>
            <div class="d-flex align-items-center mb-2">
                <img src="<?php echo BASEURL; ?>assets/img/i_bauru.png" class="icons" alt="icon de bauru">
                <p class="font2 m-0">Bauru;</p>
            </div>
            <div class="d-flex align-items-center mb-2">
                <img src="<?php echo BASEURL; ?>assets/img/i_camarao.png" class="icons" alt="icon de camarão">
                <p class="font2 m-0">Camarão;</p>
            </div>
            <div class="d-flex align-items-center mb-2">
                <img src="<?php echo BASEURL; ?>assets/img/i_morango.png" class="icons" alt="icon de morango">
                <p class="font2 m-0">Morango;</p>
            </div>
            <div class="d-flex align-items-center">
                <img src="<?php echo BASEURL; ?>assets/img/i_beijinho.png" class="icons" alt="icon de beijinho">
                <p class="font2 m-0">Beijinho.</p>
            </div>

            <p class="mt-2">Coloque esses pastéis na ordem que mais te agrada, do primeiro ao último. <span class="font2">NÃO PENSE DEMAIS.</span> Siga o seu instinto de xerife e escolha pela emoção do momento!</p>
            <p>Depois é so clicar em <span class="font2">"Ver Significado"</span> e descobrir o que suas escolhas revelam sobre você!</p>
            
        </div>

        <div class="container-geral" arial-label="Teste Tibetano 1">
            <!-- Box -->
            <div class="cont_test1">
                <div class="column-1">
                    <h1 class="san text-center tit-column">Sabores</h1>
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
                <!-- Drop -->
                <div class="column-2 opc">
                    <h1 class="san text-center tit-column">Posições</h1>
                    <div class="cont_drop">
                        <span>1°</span>
                        <div id="drop1" class="drop"><span>1°</span></div>
                    </div>
                    <div class="cont_drop">
                        <span>2°</span>
                        <div id="drop2" class="drop"><span>2°</span></div>
                    </div>
                    <div class="cont_drop">
                        <span>3°</span>
                        <div id="drop3" class="drop"><span>3°</span></div>
                    </div>
                    <div class="cont_drop">
                        <span>4°</span>
                        <div id="drop4" class="drop"><span>4°</span></div>
                    </div>
                    <div class="cont_drop">
                        <span>5°</span>
                        <div id="drop5" class="drop"><span>5°</span></div>
                    </div>
                </div>
            </div>
            <!-- button -->
            <div class="carta-btn justify-content-center align-items-center">
                <button type="button" id="btnSig" class="btn-en tit btnSig">Ver Significado</button>
                <button type="button" id="btnLimpa" class="btn-lim tit">Resetar</button>
            </div>
            <!-- signicados -->
            <div class="d-flex flex-column significado">
                <p class="text-center txtadivinha tit font1">
                    A maneira como você ordenou os pasteis, representa a prioridade que cada um destes campos abaixo tem em sua vida:
                </p>
                <ul class="lista-signi">
                    <li class="text-start txtadivinha tit font1">
                        <span class="font2">Pastel de Queijo:</span>
                        Estabilidade e Segurança
                    </li>
                    <li class="text-start txtadivinha tit font1">
                        <span class="font2">Pastel de Bauru:</span>
                        Amizade e Alegria
                    </li>
                    <li class="text-start txtadivinha tit font1">
                        <span class="font2">Pastel de Camarão:</span>
                        Paixão e Intensidade
                    </li>
                    <li class="text-start txtadivinha tit font1">
                        <span class="font2">Pastel de Morango:</span>
                        Afeto e Doçura
                    </li>
                    <li class="text-start txtadivinha tit font1">
                        <span class="font2">Pastel de Beijinho:</span>
                        Nostalgia e Inocência
                    </li>
                </ul>
            </div>
        </div>
    </section>
</div>
<?php
include FOOTER_TEMPLATE;
?>
<script src="<?php echo BASEURL; ?>assets/js/custom/teste.js"></script>