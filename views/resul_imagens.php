<?php
    include("../config.php");
    include HEADER_TEMPLATE;
?>
<?php
    $numero = $_POST['resultado']??0;
?>
<div class="container mt-4 cont">
    <div class="san">
        <h1 class="resul_txt">A imagem escolhida foi ...</h1>
    </div>
    <div class="mt-4 fundo">
        <img src="<?php echo BASEURL;?>assets/img/<?php echo $numero; ?>.png" alt="imagem escolhida" class="persona2">
    </div>
</div>
<div class="d-flex justify-content-center mb-4 mt-5 gap-3">
    <a href="<?php echo BASEURL; ?>views/imagens.php" class="btn-en tit">Jogar Novamente</a>
    <a href="<?php echo BASEURL; ?>index.php" class="btn-lim tit">Voltar para Home</a>
</div>
<?php
    include FOOTER_TEMPLATE;
?>