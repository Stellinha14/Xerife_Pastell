<?php
include("../config.php");
include HEADER_TEMPLATE;
?>
<?php
    $img = $_POST['img']??0;
    $nome = $_POST['nome']??0;
    $famoso = $_POST['fama']??0;
?>
<div class="text-center mt-4">
    <h1 class="san resul_txt">Sua Versão Famosa é ...</h1>
    <h1 class="tit font2 sub"><?php echo $famoso; ?></h1>
</div>
<div class="container cont_famoso mt-4">
    <img src="<?php echo BASEURL;?>assets/img/<?php echo $img; ?>.jpg" alt="famoso" class="famoso">
    <div class="fama_persona">
        <img src="<?php echo BASEURL;?>assets/img/bom.png" alt="xerifinho" class="persona2">
    </div>
</div>
<div class="container text-center tit mt-5">
    <h4 class="font1">Você escolheu: <span class="font2"><?php echo $nome; ?>.</span> E sua celebridade é: <span class="font2"><?php echo $famoso; ?>!</span></h4>
</div>
<div class="d-flex justify-content-center mb-4 mt-4 gap-3">
    <a href="<?php echo BASEURL; ?>views/famosos.php" class="btn-en tit">Jogar Novamente</a>
    <a href="<?php echo BASEURL; ?>index.php" class="btn-lim tit">Voltar para Home</a>
</div>
<?php
include FOOTER_TEMPLATE;
?>