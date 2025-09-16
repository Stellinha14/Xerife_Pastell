<?php 
    include ("../config.php");
    include HEADER_TEMPLATE;
?>
<div class="container">
    <div class="fundotxt p-1 mt-3 mb-3">
        <h1 class="tit text-center">QUIZ DO XERIFINHO</h1>
    </div>
    <div class="row">
        <div class="col-12">
            <p class="text-center txtadivinha tit">
                <span class="font2">E aí, xerife! </span>
                <span class="font1">
                    Será que você manda bem mesmo quando o assunto é a Pastell? Teste seus conhecimentos nesse 
                </span>
                <span class="font2">quizz com 11 perguntinhas 
                </span>
                <span class="font1">
                    sobre a nossa 
                </span>
                <span class="font2">
                    história, sabores e curiosidades!
                </span>
            </p>
        </div>
    </div>
    <div class="col-12 d-flex justify-content-center align-items-center mt-3">
        <img src="<?php echo BASEURL; ?>assets/img/hero.png" class="img-fluid pasteis fundim">
    </div>
    <div class="mt-4">
        <h3 class="txtadivinha tit">
            <span class="font1">Hora de mostrar que é </span>
            <span class="font2">um bom xerife! </span>
            <span class="font1">Responda com </span>
            <span class="font2">atenção </span>
            <span class="font1">e </span>
            <span class="font2">divirta-se!</span>
        </h3>
        <!-- formulario -->
        <form id="perguntas" action="resul_quiz.php" method="POST">
            <!-- pergunta 1 -->
            <div class="cont_pergunta tit mt-4">
                <h2 class="text-center txt_pergunta">01. Qual é o xerife mais famosos da região?</h2>
                <div class="quiz_options mt-4">
                    <div class="col">
                        <!-- opc A -->
                        <label class="op">
                            <input type="radio" id="opA" name="p0" value="A" class="bolinha">
                            A) Chefinho
                        </label>
                        <!-- opc B -->
                        <label class="op">
                            <input type="radio" id="opB" name="p0" value="B" class="bolinha">
                            B) Xerifinho
                        </label>
                    </div>
                    <div class="col">
                        <!-- opc C -->
                        <label class="op">
                            <input type="radio" id="opC" name="p0" value="C" class="bolinha">
                            C) Pastell
                        </label>
                        <!-- opc D -->
                        <label class="op">
                            <input type="radio" id="opD" name="p0" value="D" class="bolinha">
                            D) Cowboy
                        </label>
                    </div>
                </div>
            </div>
            <hr>
            <!-- pergunta 2 -->
            <div class="cont_pergunta tit mt-4">
                <h2 class="text-center txt_pergunta">02. Em que ano foi fundada a pastelaria "Xerife Pastell"?</h2>
                <div class="quiz_options mt-4">
                    <div class="col">
                        <!-- opc A -->
                        <label class="op">
                            <input type="radio" id="opA_2" name="p1" value="A" class="bolinha">
                            A) 2020
                        </label>
                        <!-- opc B -->
                        <label class="op">
                            <input type="radio" id="opB_2" name="p1" value="B" class="bolinha">
                            B) 2007
                        </label>
                    </div>
                    <div class="col">
                        <!-- opc C -->
                        <label class="op">
                            <input type="radio" id="opC_2" name="p1" value="C" class="bolinha">
                            C) 2000
                        </label>
                        <!-- opc D -->
                        <label class="op">
                            <input type="radio" id="opD_2" name="p1" value="D" class="bolinha">
                            D) 2012
                        </label>
                    </div>
                </div>
            </div>
            <hr>
            <!-- pergunta 3 -->
            <div class="cont_pergunta tit mt-4">
                <h2 class="text-center txt_pergunta">03. Qual é a temática da pastelaria "Xerife Pastell"?</h2>
                <div class="quiz_options mt-4">
                    <div class="col">
                        <!-- opc A -->
                        <label class="op">
                            <input type="radio" id="opA_3" name="p2" value="A" class="bolinha">
                            A) Velho Oeste
                        </label>
                        <!-- opc B -->
                        <label class="op">
                            <input type="radio" id="opB_3" name="p2" value="B" class="bolinha">
                            B) Espaço Sideral
                        </label>
                    </div>
                    <div class="col">
                        <!-- opc C -->
                        <label class="op">
                            <input type="radio" id="opC_3" name="p2" value="C" class="bolinha">
                            C) Realeza Medieval
                        </label>
                        <!-- opc D -->
                        <label class="op">
                            <input type="radio" id="opD_3" name="p2" value="D" class="bolinha">
                            D) Cidade Futurista
                        </label>
                    </div>
                </div>
            </div>
            <hr>
            <!-- pergunta 4 -->
            <div class="cont_pergunta tit mt-4">
                <h2 class="text-center txt_pergunta">04. Qual é o segredo para deixar o pastel da "Xerife Pastell" tão saboroso?</h2>
                <div class="quiz_options mt-4">
                    <div class="col">
                        <!-- opc A -->
                        <label class="op">
                            <input type="radio" id="opA_4" name="p3" value="A" class="bolinha">
                            A) A poeira do deserto
                        </label>
                        <!-- opc B -->
                        <label class="op">
                            <input type="radio" id="opB_4" name="p3" value="B" class="bolinha">
                            B) O sol do deserto
                        </label>
                    </div>
                    <div class="col">
                        <!-- opc C -->
                        <label class="op">
                            <input type="radio" id="opC_4" name="p3" value="C" class="bolinha">
                            C) O carinho e dedicação 
                        </label>
                        <!-- opc D -->
                        <label class="op">
                            <input type="radio" id="opD_4" name="p3" value="D" class="bolinha">
                            D) N.D.A.
                        </label>
                    </div>
                </div>
            </div>
            <hr>
            <!-- pergunta 5 -->
            <div class="cont_pergunta tit mt-4">
                <h2 class="text-center txt_pergunta">05. Quais são as cores principais da pastelaria "Xerife Pastell"?</h2>
                <div class="quiz_options mt-4">
                    <div class="col">
                        <!-- opc A -->
                        <label class="op">
                            <input type="radio" id="opA_5" name="p4" value="A" class="bolinha">
                            A) Rosa e Azul
                        </label>
                        <!-- opc B -->
                        <label class="op">
                            <input type="radio" id="opB_5" name="p4" value="B" class="bolinha">
                            B) Marrom e Vermelho
                        </label>
                    </div>
                    <div class="col">
                        <!-- opc C -->
                        <label class="op">
                            <input type="radio" id="opC_5" name="p4" value="C" class="bolinha">
                            C) Preto
                        </label>
                        <!-- opc D -->
                        <label class="op">
                            <input type="radio" id="opD_5" name="p4" value="D" class="bolinha">
                            D) Marrom e Bege
                        </label>
                    </div>
                </div>
            </div>
            <hr>
            <!-- pergunta 6 -->
            <div class="cont_pergunta tit mt-4">
                <h2 class="text-center txt_pergunta">06. Qual é nome das fudadoras da "Xerife Pastell"?</h2>
                <div class="quiz_options mt-4">
                    <div class="col">
                        <!-- opc A -->
                        <label class="op">
                            <input type="radio" id="opA_6" name="p5" value="A" class="bolinha">
                            A) Cristina e Stella
                        </label>
                        <!-- opc B -->
                        <label class="op">
                            <input type="radio" id="opB_6" name="p5" value="B" class="bolinha">
                            B) Patrícia e Maria 
                        </label>
                    </div>
                    <div class="col">
                        <!-- opc C -->
                        <label class="op">
                            <input type="radio" id="opC_6" name="p5" value="C" class="bolinha">
                            C) Fernanda e Thais 
                        </label>
                        <!-- opc D -->
                        <label class="op">
                            <input type="radio" id="opD_6" name="p5" value="D" class="bolinha">
                            D) Patrícia e Stella
                        </label>
                    </div>
                </div>
            </div>
            <hr>
            <!-- pergunta 7 -->
            <div class="cont_pergunta tit mt-4">
                <h2 class="text-center txt_pergunta">07. Qual desses elementos <span class="font2">não</span> pode faltar na decoração da "Xerife Pastell"?</h2>
                <div class="quiz_options mt-4">
                    <div class="col">
                        <!-- opc A -->
                        <label class="op">
                            <input type="radio" id="opA_7" name="p6" value="A" class="bolinha">
                            A) Bola de Futebol
                        </label>
                        <!-- opc B -->
                        <label class="op">
                            <input type="radio" id="opB_7" name="p6" value="B" class="bolinha">
                            B) Um Cacto
                        </label>
                    </div>
                    <div class="col">
                        <!-- opc C -->
                        <label class="op">
                            <input type="radio" id="opC_7" name="p6" value="C" class="bolinha">
                            C) Livro 
                        </label>
                        <!-- opc D -->
                        <label class="op">
                            <input type="radio" id="opD_7" name="p6" value="D" class="bolinha">
                            D) Um Garfo
                        </label>
                    </div>
                </div>
            </div>
            <hr>
            <!-- pergunta 8 -->
            <div class="cont_pergunta tit mt-4">
                <h2 class="text-center txt_pergunta">08. Por que a pastelaria recebe o nome de "Pastell"?</h2>
                <div class="quiz_options mt-4">
                    <div class="col">
                        <!-- opc A -->
                        <label class="op">
                            <input type="radio" id="opA_8" name="p7" value="A" class="bolinha">
                            A) Junção do nome das fundadoras
                        </label>
                        <!-- opc B -->
                        <label class="op">
                            <input type="radio" id="opB_8" name="p7" value="B" class="bolinha">
                            B) Não tem um motivo
                        </label>
                    </div>
                    <div class="col">
                        <!-- opc C -->
                        <label class="op">
                            <input type="radio" id="opC_8" name="p7" value="C" class="bolinha">
                            C) Porque o xerife gosta de pastel 
                        </label>
                        <!-- opc D -->
                        <label class="op">
                            <input type="radio" id="opD_8" name="p7" value="D" class="bolinha">
                            D) N.D.A.
                        </label>
                    </div>
                </div>
            </div>
            <hr>
            <!-- pergunta 9 -->
            <div class="cont_pergunta tit mt-4">
                <h2 class="text-center txt_pergunta">09. "A Xerife Pastell oferece uma <span class="font2">área kids</span>." Essa afirmação é...</h2>
                <div class="quiz_options mt-4">
                    <div class="col">
                        <!-- opc A -->
                        <label class="op">
                            <input type="radio" id="opA_9" name="p8" value="A" class="bolinha">
                            A) Verdadeira
                        </label>
                        <!-- opc B -->
                        <label class="op">
                            <input type="radio" id="opB_9" name="p8" value="B" class="bolinha">
                            B) Falsa
                        </label>
                    </div>
                </div>
            </div>
            <hr>
            <!-- pergunta 10 -->
            <div class="cont_pergunta tit mt-4">
                <h2 class="text-center txt_pergunta">10. Você pode receber os pastéis do xerifinho sem sair de casa, através do...</h2>
                <div class="quiz_options mt-4">
                    <div class="col">
                        <!-- opc A -->
                        <label class="op">
                            <input type="radio" id="opA_10" name="p9" value="A" class="bolinha">
                            A) Cowboy a cavalo
                        </label>
                        <!-- opc B -->
                        <label class="op">
                            <input type="radio" id="opB_10" name="p9" value="B" class="bolinha">
                            B) Cacto entregador
                        </label>
                    </div>
                    <div class="col">
                        <!-- opc C -->
                        <label class="op">
                            <input type="radio" id="opC_10" name="p9" value="C" class="bolinha">
                            C) Delivery do Velho Oeste
                        </label>
                        <!-- opc D -->
                        <label class="op">
                            <input type="radio" id="opD_10" name="p9" value="D" class="bolinha">
                            D) Não tem como
                        </label>
                    </div>
                </div>
            </div>
            <hr>
            <!-- pergunta 11 -->
            <div class="cont_pergunta tit mt-4">
                <h2 class="text-center txt_pergunta">11. Para finalizar! Qual é a melhor pastelaria da região?</h2>
                <div class="quiz_options mt-4">
                    <div class="col">
                        <!-- opc A -->
                        <label class="op">
                            <input type="radio" id="opA_11" name="p10" value="A" class="bolinha">
                            A) Xerife Pastell
                        </label>
                        <!-- opc B -->
                        <label class="op">
                            <input type="radio" id="opB_11" name="p10" value="B" class="bolinha">
                            B) Senhor Pastel
                        </label>
                    </div>
                    <div class="col">
                        <!-- opc C -->
                        <label class="op">
                            <input type="radio" id="opC_11" name="p10" value="C" class="bolinha">
                            C) Pastelzinhos
                        </label>
                        <!-- opc D -->
                        <label class="op">
                            <input type="radio" id="opD_11" name="p10" value="D" class="bolinha">
                            D) N.D.A.
                        </label>
                    </div>
                </div>
            </div>

            <div id="alert" class="container alerta mt-4"></div>
            <!-- buttons -->
            <div class="carta justify-content-center mb-4">
                <input type="hidden" name="acertos" id="resul_acertos">
                <input type="hidden" name="percentual" id="resul_percentual">
                <button type="submit" class="btn-en tit">Enviar</button>
                <button type="reset" class="btn-lim tit">Limpar</button>
            </div>
        </form>
    </div>
</div>
<?php
    include FOOTER_TEMPLATE;
?>
<script src="<?php echo BASEURL; ?>assets/js/custom/quiz.js"></script>