<?php

require "controler.php";
global $valor;


?>

<!DOCTYPE html>
<html style="font-size: 16px;" lang="pt">
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta charset="utf-8">
    <title>Advinhe Jogo</title>

    <!-- CSS -->
    <link rel="stylesheet" href="css/nicepage.css" media="screen">
    <link rel="stylesheet" href="css/Página-Inicial.css" media="screen">
    <!-- JS -->
    <script class="u-script" type="text/javascript" src="js/jquery.js" defer=""></script>
    <script class="u-script" type="text/javascript" src="js/nicepage.js" defer=""></script>
    <!-- FONTE -->
    <link id="u-theme-google-font" rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:100,100i,300,300i,400,400i,500,500i,700,700i,900,900i|Open+Sans:300,300i,400,400i,500,500i,600,600i,700,700i,800,800i">


</head>
<body data-home-page="Página-Inicial.html" data-home-page-title="Página Inicial" class="u-body u-xl-mode" data-lang="pt">
<header class="u-header" id="sec-4fec" data-animation-name="" data-animation-duration="0" data-animation-delay="0" data-animation-direction="" ><div class="u-clearfix u-sheet u-sheet-1" ></div></header>
<section class="u-align-center u-clearfix u-white u-section-1" id="carousel_e1b4">

    <div  id="local" class="u-clearfix u-sheet u-sheet-1">
        <h3 class="u-custom-font u-font-courier-new u-text u-text-1">Adivinhe.</h3>
        <p class="u-custom-font u-font-courier-new u-label" style="left: auto; margin-left: 30px;">Tente advinhar o número secreto que está entre 1 e 100!</p>

        <div class="u-form u-form-1">
            <form  id ="jogo" action="index.php" method="post" >
                <div class="u-form-group u-form-group-1">
                     <label for="numero" class="u-custom-font u-font-courier-new u-label">Digite um numero:</label><br />
                     <input type="number" name="numero" id="numero" class="u-border-1 u-border-grey-30 u-input u-input-rectangle u-white"/>
                </div>
                <?php
                if ( $valor ) {
                    echo $valor;
                }
                ?>
                <div class="u-align-center u-form-group u-form-submit">
                        <input type="submit" name="jogar" value="Jogar" class="u-black u-btn u-btn-submit u-button-style u-custom-font u-heading-font u-hover-palette-2-base u-text-body-alt-color u-text-hover-white u-btn-1" style="margin-bottom: 0px;" />
                </div>
                <div class="u-align-center u-form-group u-form-submit">
                <input type="submit" name="zerar" value="Reiniciar" class="u-black u-btn u-btn-submit u-button-style u-custom-font u-heading-font u-hover-palette-2-base u-text-body-alt-color u-text-hover-white u-btn-1" style="margin-bottom: 0px;" />
                </div>
            </form>
        </div>

    </div>
</section>




</body>
</html>