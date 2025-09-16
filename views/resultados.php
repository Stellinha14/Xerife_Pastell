<?php
include("../config.php");
include HEADER_TEMPLATE;
?>
<?php
    $resultado = $_POST['resultado']??0;
?>
<div class="container d-flex mt-5 mb-5">
    <div class="justify-content-start align-items-center">
        <img src="<?php echo BASEURL;?>assets/img/persona_2.png" class="persona">
    </div>
    <div class="justify-content-end align-items-center">
        <div class="outer">
            <div class="resul">
                <h1 class="num san">O Número que você pensou foi ...</h1>
                <h1 class="pnum tit"><?php echo $resultado ?></h1>
            </div>
        </div>
    </div>
</div>
<div class="d-flex justify-content-center mb-4 gap-3">
    <a href="<?php echo BASEURL; ?>views/adivinha.php" class="btn-en tit">Jogar Novamente</a>
    <a href="<?php echo BASEURL; ?>index.php" class="btn-lim tit">Voltar para Home</a>
</div>
<?php
    include FOOTER_TEMPLATE;
?>