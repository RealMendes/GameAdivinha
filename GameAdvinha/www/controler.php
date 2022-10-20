<?php

session_start();

$valor = false;

//Inicia o jogo e define o valor do número secreto
if (!isset($_SESSION['tentativa'])) {
    $_SESSION['tentativa'] = 1;
    $_SESSION['secreto'] = rand(1,100);

}


$numero = $_POST['numero'];


if(isset($_POST["jogar"])) {

    //Conta o número de tentativas
    $_SESSION['tentativa']++;

//Acertou o número:
    if ($_SESSION['secreto'] == $numero) {
        $valor ="<p class='u-custom-font u-font-courier-new u-label'> Parabéns, você acertou! O número era <strong> ".$numero."</strong>.  Você usou <strong>".$_SESSION['tentativa']."</strong> tentativas  </p>";
        session_destroy();

    }
    //Entrada menor que o número
    elseif (($_SESSION['secreto'] > $numero))   {
        $valor ="<p class='u-custom-font u-font-courier-new u-label'> O número é maior que ".$numero."  !  Tentativa número <strong>".$_SESSION['tentativa']."</strong>  </p>";


    } //Entrada maior que o número
    else {
        $valor = "<p class='u-custom-font u-font-courier-new u-label'> O número é menor que  ".$numero. " !  Tentativa número <strong>".$_SESSION['tentativa']."</strong>  </p>";

    }

}
// Caso o usuário queira jogar novamente, ele apaga os valor da variavel secreta e inicia um jogo diferente.
if ((isset($_POST["zerar"]))){
     session_destroy();
}

