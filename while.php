<?php

//criador de tabuadas;
$tabuada= 8;

//atribuição do valor inicial do contador
$contador = 0;

 while ($contador <= 10) {

    $resultado = $tabuada * $contador;
    echo "{$tabuada} X {$contador}  = {$resultado} <br/>";
    
    //controle de contador
    $contador = $contador + 1;

}

?>