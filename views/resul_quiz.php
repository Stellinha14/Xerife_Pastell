<?php
include("../config.php");
include HEADER_TEMPLATE;
?>
<?php
$acertos = $_POST['acertos'] ?? 0;
$percentual = $_POST['percentual'] ?? 0;


if ($percentual <= 31) {
    $img = BASEURL . 'assets/img/mt_bravo.png';
    $mensagem = "Muito bravo!!";
    $xerife = "Merece ficar sem pastel por 1 mês!!";
} else if ($percentual < 50) {
    $img = BASEURL . 'assets/img/bravo.png';
    $mensagem = "Bravo e chateado!!";
    $xerife = "Vai ficar sem pastel!";
} else if ($percentual <= 69) {
    $img = BASEURL . 'assets/img/nhe.png';
    $mensagem = "Desanimado...";
    $xerife = "Merece um pastel gelado..";
} else if ($percentual <= 79) {
    $img = BASEURL . 'assets/img/legalzinho.png';
    $mensagem = "Querendo mais!";
    $xerife = "Merece um pastel, sem recheio..";
} else if ($percentual <= 89) {
    $img = BASEURL . 'assets/img/bom.png';
    $mensagem = "Feliz!";
    $xerife = "Vai ganhar um pastel quentinho do seu sabor favorito!";
} else if ($percentual <= 95) {
    $img = BASEURL . 'assets/img/persona_2.png';
    $mensagem = "Muito Feliz!!";
    $xerife = "Merece um pastel grátis e quentinho do xerifinho!";
} else {
    $img = BASEURL . 'assets/img/ual.png';
    $mensagem = "Super orgulhoso!!";
    $xerife = 'Merece pastel grátis por um mês!';
}
?>
<div class="container d-flex mt-5 mb-5">
    <div class="col_2">
        <img src="<?php echo $img; ?>" class="persona">
    </div>
    <div class="col_3">
        <div class="tit text-center">
            <h1>Você deixou o xerifinho...</h1>
            <h1 class="font2 resul_txt"><?php echo $mensagem; ?></h1>
        </div>
        <div class="bg_quiz mt-4">
            <h2 class="text-center opc">Resultados:</h2>
            <p class="txt_resul tit">Total de Acertos: <span class="font2"><?php echo $acertos; ?> de 11</span><p>
            <p class="txt_resul tit">Percentual: <span class="font2"><?php echo $percentual; ?>%</span></p>
            <p class="text-center txt_resul tit"><?php echo $xerife; ?></p>
        </div>
    </div>
</div>
<div class="d-flex justify-content-center mb-4 gap-3">
    <a href="<?php echo BASEURL; ?>views/quiz.php" class="btn-en tit">Jogar Novamente</a>
    <a href="<?php echo BASEURL; ?>index.php" class="btn-lim tit">Voltar para Home</a>
</div>
<?php
include FOOTER_TEMPLATE;
?>