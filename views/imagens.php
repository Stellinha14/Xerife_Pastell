<?php
include("../config.php");
include HEADER_TEMPLATE;
?>
<div class="container">
    <div class="fundotxt p-1 mt-3 mb-3">
        <h1 class="tit text-center">Jogo da Adivinhação de Imagens</h1>
    </div>
    <div class="row">
        <div class="col-12">
            <p class="text-center txtadivinha tit">
                <span class="font2">Veja a carta a seguir, memorize uma imagem </span>
                <span class="font1">
                    e aguarde, pois vou tentar adivinhar. Só errarei se você não identificar corretamente as cartas em que está a imagem que você pensou. Portanto,
                </span>
                <span class="font2">preste muita atenção ao escolher!
                </span>
            </p>
        </div>
    </div>
    <div class="col-12 d-flex justify-content-center align-items-center mt-3">
        <img src="<?php echo BASEURL; ?>assets/img/cartao p.png" class="img-fluid pasteis">
    </div>
    <div class="mt-4">
        <h3 class="txtadivinha tit font1">
            Escolha abaixo as cartas em que a imagem escolhida aparece.
        </h3>
        <!-- formulario -->
        <form id="imagens" action="resul_imagens.php" method="POST">

            <div class="cont-imagem">
                <!-- carta 1 -->
                <div class="imagem">
                    <img src="<?php echo BASEURL; ?>assets/img/cartao1.png" class="img-fluid imad">
                    <div class="in">
                        <div class="input-group">
                            <div class="input-group-text inputind">
                                <input id="cartas_1_s" name="op1" class="form-check-input mt-0" type="radio" value="Sim" aria-label="Checkbox for following text input">
                            </div>
                            <input type="text" class="form-control inputind" aria-label="Text input with checkbox" value="Sim" readonly>
                        </div>
                        <div class="input-group">
                            <div class="input-group-text inputind">
                                <input id="cartas_1_n" name="op1" class="form-check-input mt-0" type="radio" value="Não" aria-label="Checkbox for following text input" checked>
                            </div>
                            <input type="text" class="form-control inputind" aria-label="Text input with checkbox" value="Não" readonly>
                        </div>
                    </div>
                </div>
                <!-- carta 2 -->
                <div class="imagem">
                    <img src="<?php echo BASEURL; ?>assets/img/cartao2.png" class="img-fluid imad">
                    <div class="in">
                        <div class="input-group">
                            <div class="input-group-text inputind">
                                <input id="cartas_2_s" name="op2" class="form-check-input mt-0" type="radio" value="Sim" aria-label="Checkbox for following text input">
                            </div>
                            <input type="text" class="form-control inputind" aria-label="Text input with checkbox" value="Sim" readonly>
                        </div>
                        <div class="input-group">
                            <div class="input-group-text inputind">
                                <input id="cartas_2_n" name="op2" class="form-check-input mt-0" type="radio" value="Não" aria-label="Checkbox for following text input" checked>
                            </div>
                            <input type="text" class="form-control inputind" aria-label="Text input with checkbox" value="Não" readonly>
                        </div>
                    </div>
                </div>
                <!-- carta 3 -->
                <div class="imagem">
                    <img src="<?php echo BASEURL; ?>assets/img/cartao3.png" class="img-fluid imad">
                    <div class="in">
                        <div class="input-group">
                            <div class="input-group-text inputind">
                                <input id="cartas_3_s" name="op3" class="form-check-input mt-0" type="radio" value="Sim" aria-label="Checkbox for following text input">
                            </div>
                            <input type="text" class="form-control inputind" aria-label="Text input with checkbox" value="Sim" readonly>
                        </div>
                        <div class="input-group">
                            <div class="input-group-text inputind">
                                <input id="cartas_3_n" name="op3" class="form-check-input mt-0" type="radio" value="Não" aria-label="Checkbox for following text input" checked>
                            </div>
                            <input type="text" class="form-control inputind" aria-label="Text input with checkbox" value="Não" readonly>
                        </div>
                    </div>
                </div>
                <!-- carta 4 -->
                <div class="imagem">
                    <img src="<?php echo BASEURL; ?>assets/img/cartao4.png" class="img-fluid imad">
                    <div class="in">
                        <div class="input-group">
                            <div class="input-group-text inputind">
                                <input id="cartas_4_s" name="op4" class="form-check-input mt-0" type="radio" value="Sim" aria-label="Checkbox for following text input">
                            </div>
                            <input type="text" class="form-control inputind" aria-label="Text input with checkbox" value="Sim" readonly>
                        </div>
                        <div class="input-group">
                            <div class="input-group-text inputind">
                                <input id="cartas_4_n" name="op4" class="form-check-input mt-0" type="radio" value="Não" aria-label="Checkbox for following text input" checked>
                            </div>
                            <input type="text" class="form-control inputind" aria-label="Text input with checkbox" value="Não" readonly>
                        </div>
                    </div>
                </div>
            </div>
            <div id="alert" class="container alerta"></div>
            <!-- buttons -->
            <div class="carta justify-content-center mb-4">
                <input type="hidden" name="resultado" id="resul_hidden">
                <button type="submit" class="btn-en tit">Enviar</button>
                <button type="reset" class="btn-lim tit">Limpar</button>
            </div>
        </form>
    </div>
</div>

<?php
include FOOTER_TEMPLATE;
?>
<script src="<?php echo BASEURL; ?>assets/js/custom/imagens.js"></script>