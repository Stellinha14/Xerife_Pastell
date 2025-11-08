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
            <h1><span class="font2">Questão 02.</span> O Xerife das Palavras!</h1>
            <p>Na sua pastelaria favorita, cada sabor tem uma personalidade própria. Agora é hora de dar <span class="font2">um adjetivo ou característica</span> a cada item abaixo. Use <span class="font2">só o primeiro que vier à sua cabeça</span> e não pense demais!
            </p>
        </div>

        <div class="container-geral" arial-label="Teste Tibetano 1">
            <!-- input + paragrafo -->
            <div class="font2 adj mb-4">
                <p>O Pastel de Vento é ...</p>
                <input class="inputAdj" type="text" value="">
            </div>

            <div class="font2 adj mb-4">
                <p>Pastel Doce é ...</p>
                <input class="inputAdj" type="text" value="">
            </div>

            <div class="font2 adj mb-4">
                <p>Refrigerante gelado é ...</p>
                <input class="inputAdj" type="text" value="">
            </div>

            <div class="font2 adj mb-4">
                <p>Pastel de Queijo Derretido é ...</p>
                <input class="inputAdj" type="text" value="">
            </div>

            <div class="font2 adj mb-4">
                <p>Pastel Crocante é ...</p>
                <input class="inputAdj" type="text" value="">
            </div>
            <!-- obs. -->
            <p class="text-center"><em class="font4 tit"><span class="font2">Lembre-se:</span> não existe resposta certa ou errada, o que vale é o que você sente sobre cada sabor. Siga seu instinto de xerife e divirta-se com a sua própria escolha!</em></p>

            <!-- button space  -->
            <div class="carta-btn justify-content-center align-items-center">
                <button type="button" id="btnSig2" class="btn-en tit btnSig2">Ver Significado</button>
                <button type="button" id="btnLimpa2" class="btn-lim tit">Resetar</button>
            </div>

            <!-- significado -->
            <div class="d-flex flex-column sign2">
                <p class="text-center txtadivinha tit font1">
                    Cada <span class="font2">adjetivo</span> atribuído aos pasteis, diz um pouquinho sobre <span class="font2">você:</span>
                </p>
                <ul class="lista-signi">
                    <li class="text-start txtadivinha tit font1">
                        <span class="font2">Pastel de Vento:</span>
                        Mostra como você se vê.
                    </li>
                    <li class="text-start txtadivinha tit font1">
                        <span class="font2">Pastel Doce:</span>
                        Revela sua visão sobre o amor.
                    </li>
                    <li class="text-start txtadivinha tit font1">
                        <span class="font2">Refrigerante Gelado:</span>
                        Reflete como você vê a felicidade.
                    </li>
                    <li class="text-start txtadivinha tit font1">
                        <span class="font2">Pastel de Queijo:</span>
                        Mostra sua relação com o trabalho e o esforço.
                    </li>
                    <li class="text-start txtadivinha tit font1">
                        <span class="font2">Pastel Crocante:</span>
                        Representa o tipo de experiência que mais te encanta.
                    </li>
                </ul>

                <!-- significados especificos -->
                <p class="text-center txtadivinha tit font2">
                    De acordo com as suas respostas:
                </p>
                <ul class="lista-signi">
                    <li class="text-start txtadivinha tit font1">
                        Você se vê como alguém
                        <span class="font2"><em class="camporesp"></em></span>
                    </li>
                    <li class="text-start txtadivinha tit font1">
                        Para você, o amor é algo
                        <span class="font2"><em class="camporesp"></em></span>
                    </li>
                    <li class="text-start txtadivinha tit font1">
                        A felicidade, na sua opinião é,
                        <span class="font2"><em class="camporesp"></em></span>
                    </li>
                    <li class="text-start txtadivinha tit font1">
                        Para você, o trabalho e esforço é algo
                        <span class="font2"><em class="camporesp"></em></span>
                    </li>
                    <li class="text-start txtadivinha tit font1">
                        Pra uma experiencia te encantar de verdade, ela precisa ser
                        <span class="font2"><em class="camporesp"></em></span>
                    </li>
                </ul>
            </div>
        </div>
    </section>

    <!-- Teste 3 -->
    <section arial-label="Teste Tibetano 3">
        <!-- enunciado -->
        <div class="enum txtadivinha tit">
            <h1><span class="font2">Questão 03.</span> O Grande Rodeio dos Sabores!</h1>
            <p>Pense nas <span class="font2">5 pessoas mais importantes</span> da sua vida.
            </p>
            <p>Agora, associe cada uma delas a um dos <span class="font2">5 pastéis lendários</span> da Xerife Pastell:</p>

            <!-- sabor + icon -->
            <div class="d-flex align-items-center mb-2">
                <img src="<?php echo BASEURL; ?>assets/img/i_hotdog.png" class="icons" alt="icon de queijo">
                <p class="font2 m-0">Hot Dog;</p>
            </div>
            <div class="d-flex align-items-center mb-2">
                <img src="<?php echo BASEURL; ?>assets/img/i_brocolis.png" class="icons" alt="icon de bauru">
                <p class="font2 m-0">Brócolis e Queijo;</p>
            </div>
            <div class="d-flex align-items-center mb-2">
                <img src="<?php echo BASEURL; ?>assets/img/i_carne.png" class="icons" alt="icon de camarão">
                <p class="font2 m-0">Carne;</p>
            </div>
            <div class="d-flex align-items-center mb-2">
                <img src="<?php echo BASEURL; ?>assets/img/i_palmito.png" class="icons" alt="icon de morango">
                <p class="font2 m-0">Palmito;</p>
            </div>
            <div class="d-flex align-items-center">
                <img src="<?php echo BASEURL; ?>assets/img/i_frango.png" class="icons" alt="icon de beijinho">
                <p class="font2 m-0">Frango c/ Catupiry.</p>
            </div>

            <p class="mt-2"><span class="font2">Atenção: </span> cada pessoa deve ter seu pastel único. Use sua intuição de xerife e escolha o pastel que melhor representa cada pessoa!</p>
        </div>

        <div class="container-geral" arial-label="Teste Tibetano 1">
            <!-- input + img -->
            <div class="column">
                <div class="box-gen">
                    <div class="box3 mb-2">
                        <img src="<?php echo BASEURL; ?>assets/img/hotdog.png" class="img-fluid sabores3">
                    </div>
                    <input class="input3" type="text" value="">
                </div>
                <div class="box-gen">
                    <div class="box3 mb-2">
                        <img src="<?php echo BASEURL; ?>assets/img/brocolis.png" class="img-fluid sabores3">
                    </div>
                    <input class="input3" type="text" value="">
                </div>
                <div class="box-gen">
                    <div class="box3 mb-2">
                        <img src="<?php echo BASEURL; ?>assets/img/carne.png" class="img-fluid sabores3">
                    </div>
                    <input class="input3" type="text" value="">
                </div>
                <div class="box-gen">
                    <div class="box3 mb-2">
                        <img src="<?php echo BASEURL; ?>assets/img/palmito.png" class="img-fluid sabores3">
                    </div>
                    <input class="input3" type="text" value="">
                </div>
                <div class="box-gen">
                    <div class="box3 mb-2">
                        <img src="<?php echo BASEURL; ?>assets/img/frango.png" class="img-fluid sabores3">
                    </div>
                    <input class="input3" type="text" value="">
                </div>
            </div>

            <!-- button space  -->
            <div class="carta-btn justify-content-center align-items-center">
                <button type="button" id="btnSig2" class="btn-en tit btnSig2">Ver Significado</button>
                <button type="button" id="btnLimpa2" class="btn-lim tit">Resetar</button>
            </div>

            <!-- significado -->
            <div class="d-flex flex-column sign2">
                <p class="text-center txtadivinha tit font1">
                    Cada <span class="font2">adjetivo</span> atribuído aos pasteis, diz um pouquinho sobre <span class="font2">você:</span>
                </p>
                <ul class="lista-signi">
                    <li class="text-start txtadivinha tit font1">
                        <span class="font2">Pastel de Vento:</span>
                        Mostra como você se vê.
                    </li>
                    <li class="text-start txtadivinha tit font1">
                        <span class="font2">Pastel Doce:</span>
                        Revela sua visão sobre o amor.
                    </li>
                    <li class="text-start txtadivinha tit font1">
                        <span class="font2">Refrigerante Gelado:</span>
                        Reflete como você vê a felicidade.
                    </li>
                    <li class="text-start txtadivinha tit font1">
                        <span class="font2">Pastel de Queijo:</span>
                        Mostra sua relação com o trabalho e o esforço.
                    </li>
                    <li class="text-start txtadivinha tit font1">
                        <span class="font2">Pastel Crocante:</span>
                        Representa o tipo de experiência que mais te encanta.
                    </li>
                </ul>

                <!-- significados especificos -->
                <p class="text-center txtadivinha tit font2">
                    De acordo com as suas respostas:
                </p>
                <ul class="lista-signi">
                    <li class="text-start txtadivinha tit font1">
                        Você se vê como alguém
                        <span class="font2"><em class="camporesp"></em></span>
                    </li>
                    <li class="text-start txtadivinha tit font1">
                        Para você, o amor é algo
                        <span class="font2"><em class="camporesp"></em></span>
                    </li>
                    <li class="text-start txtadivinha tit font1">
                        A felicidade, na sua opinião é,
                        <span class="font2"><em class="camporesp"></em></span>
                    </li>
                    <li class="text-start txtadivinha tit font1">
                        Para você, o trabalho e esforço é algo
                        <span class="font2"><em class="camporesp"></em></span>
                    </li>
                    <li class="text-start txtadivinha tit font1">
                        Pra uma experiencia te encantar de verdade, ela precisa ser
                        <span class="font2"><em class="camporesp"></em></span>
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