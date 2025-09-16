<?php
include("../config.php");
include HEADER_TEMPLATE;
?>
<div class="container">
  <div class="fundotxt p-1 mt-3 mb-3">
    <h1 class="tit text-center">Jogo da Adivinhação de Números</h1>
  </div>
  <div class="row">
    <div class="col-12">
      <p class="text-center txtadivinha tit">
        <span class="font2">Pense em um número de 1 a 31.</span>
        <span class="font1">
          Não conte para ninguém nem fale em voz
          alta, pois eu vou adivinhar! Só errarei se você não identificar
          corretamente as cartas em que o número que você pensou aparece.
        </span>
        <span class="font2">Portanto, preste bastante atenção ao escolher as
          cartas.
        </span>
      </p>
    </div>
  </div>
  <div class="mt-3">
    <h3 class="txtadivinha tit font1">
      Escolha abaixo as cartas em que seu número aparece.
    </h3>
    <!-- formulario -->
    <form id="adivinha" action="resultados.php" method="POST">
      <div class="centro-cartas">
        <!-- carta 1 -->
        <div class="carta">
          <img src="<?php echo BASEURL; ?>assets/img/cartao 1.png" class="img-fluid">
          <div class="input-customer">
            <div class="input-group">
              <div class="input-group-text inputind">
                <input id="cartas" name="op1" class="form-check-input mt-0" type="radio" value="Sim" aria-label="Checkbox for following text input">
              </div>
              <input type="text" class="form-control inputind" aria-label="Text input with checkbox" value="Sim" readonly>
            </div>
            <div class="input-group">
              <div class="input-group-text inputind">
                <input id="cartas" name="op1" class="form-check-input mt-0" type="radio" value="Não" aria-label="Checkbox for following text input" checked>
              </div>
              <input type="text" class="form-control inputind" aria-label="Text input with checkbox" value="Não" readonly>
            </div>
          </div>
        </div>
        <!-- carta 2 -->
        <div class="carta">
          <img src="<?php echo BASEURL; ?>assets/img/cartao 2.png" class="img-fluid">
          <div class="input-customer">
            <div class="input-group">
              <div class="input-group-text inputind">
                <input name="op2" id="cartas" class="form-check-input mt-0" type="radio" value="Sim" aria-label="Checkbox for following text input">
              </div>
              <input type="text" class="form-control inputind" aria-label="Text input with checkbox" value="Sim" readonly>
            </div>
            <div class="input-group">
              <div class="input-group-text inputind">
                <input name="op2" id="cartas" class="form-check-input mt-0" type="radio" value="Não" aria-label="Checkbox for following text input" checked>
              </div>
              <input type="text" class="form-control inputind" aria-label="Text input with checkbox" value="Não" readonly>
            </div>
          </div>
        </div>
        <!-- carta 3 -->
        <div class="carta">
          <img src="<?php echo BASEURL; ?>assets/img/cartao 3.png" class="img-fluid">
          <div class="input-customer">
            <div class="input-group">
              <div class="input-group-text inputind">
                <input name="op3" id="cartas" class="form-check-input mt-0" type="radio" value="Sim" aria-label="Checkbox for following text input">
              </div>
              <input type="text" class="form-control inputind" aria-label="Text input with checkbox" value="Sim" readonly>
            </div>
            <div class="input-group">
              <div class="input-group-text inputind">
                <input name="op3" id="cartas" class="form-check-input mt-0" type="radio" value="Não" aria-label="Checkbox for following text input" checked>
              </div>
              <input type="text" class="form-control inputind" aria-label="Text input with checkbox" value="Não" readonly>
            </div>
          </div>
        </div>
        <!-- carta 4 -->
        <div class="carta">
          <img src="<?php echo BASEURL; ?>assets/img/cartao 4.png" class="img-fluid">
          <div class="input-customer">
            <div class="input-group">
              <div class="input-group-text inputind">
                <input name="op4" id="cartas" class="form-check-input mt-0" type="radio" value="Sim" aria-label="Checkbox for following text input">
              </div>
              <input type="text" class="form-control inputind" aria-label="Text input with checkbox" value="Sim" readonly>
            </div>
            <div class="input-group">
              <div class="input-group-text inputind">
                <input name="op4" id="cartas" class="form-check-input mt-0" type="radio" value="Não" aria-label="Checkbox for following text input" checked>
              </div>
              <input type="text" class="form-control inputind" aria-label="Text input with checkbox" value="Não" readonly>
            </div>
          </div>
        </div>
        <!-- carta 5 -->
        <div class="carta mb-3">
          <img src="<?php echo BASEURL; ?>assets/img/cartao 5.png" class="img-fluid">
          <div class="input-customer">
            <div class="input-group">
              <div class="input-group-text inputind">
                <input name="op5" id="cartas" class="form-check-input mt-0" type="radio" value="Sim" aria-label="Checkbox for following text input">
              </div>
              <input type="text" class="form-control inputind" aria-label="Text input with checkbox" value="Sim" readonly>
            </div>
            <div class="input-group">
              <div class="input-group-text inputind">
                <input name="op5" id="cartas" class="form-check-input mt-0" type="radio" value="Não" aria-label="Checkbox for following text input" checked>
              </div>
              <input type="text" class="form-control inputind" aria-label="Text input with checkbox" value="Não" readonly>
            </div>
          </div>
        </div>
      </div>
      <div id="alert" class="container alerta"></div>
      <!-- alerta -->
      <div class="carta justify-content-center mb-4">

        <!-- não é visível para o usuário, guarda um valor invisível para enviar junto com o formulário -->
        <input type="hidden" name="resultado" id="resultado-hidden"> 
        <button type="submit" class="btn-en tit">Enviar</button>
        <button type="reset" class="btn-lim tit">Limpar</button>
        
      </div>
    </form>
  </div>
</div>
<?php
include FOOTER_TEMPLATE;
?>
<script src="<?php echo BASEURL; ?>assets/js/custom/adivinha.js"></script>