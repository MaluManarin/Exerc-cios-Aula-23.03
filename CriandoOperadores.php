<?php


    Function somar()
{ 
    $a = 43; 
    $b = 36; 

    $resultado = $a + $b; 
    echo "Resultado da soma = $resultado"; 

} 

    Function somarparametros($a, $b)
    
{
    $resultado = $a + $b;
    echo "<br>Resultado da soma com parâmetros = $resultado<br>";

}

    Function somardevolver($a, $b)
    
{

	$resultado = $a +$b; 
    return $resultado;

}

    somar();
    somarparametros(43, 36); 
    echo "Fim";

    $dado = somardevolver(43, 36);
    echo ":)";

?>