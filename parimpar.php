<?php

$escolhausuario = "par";
$valorusuario = 3;
$valorcomputador;

 echo "//////// JOGO DO PAR OU ÍMPAR //////// <br/>";

 if ($escolhausuario == "par" or $escolhausuario == "ímpar") {
   
    if (is_numeric($valorusuario) and $valorusuario >= 0 and $valorusuario <= 10) {
    
        $valorcomputador = random_int(0,10);
        $resultado = $valorusuario + $valorcomputador;

        if ( ($resultado % 2) == 0) {   
           
            if ($escolhausuario == "par" ) {
                echo "YOU WIN!";
             
            } else  {
                echo "YOU LOSE! TRY AGAIN.";
            }    
                
        } else {

            if ($escolhausuario == "ímpar") { 
                echo "YOU WIN!";
            } else {
                echo "YOU LOSE! TRY AGAIN.";
            }
        }

    } else {
        echo "Número inválido! Insira um número entre 0 e 10.";
    }
    
} else {
        echo "Opção inválida. Escolha par ou ímpar!";
}

     
?>