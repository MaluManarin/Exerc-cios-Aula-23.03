<?php

//Criação de um vetor de números inteiros
$vetNumeros = [1,2,3,4,5];
 print_r($vetNumeros);

 //Somar todos os valores do Vetor
 $soma = array_sum ($vetNumeros);
 echo "<br>resultado: ($soma)";

//Encontrar o maior valor do Vetor
 $maior = max($vetNumeros);
 echo "<br>Maior Número:($maior)" ;

 //Procurar um determinado valor no vetor
if (in_array(3, $vetNumeros)) {
    echo "<br>Valor Encontrado.";
    } else {
        echo "<br>Valor Não Encontrado.";
    }
  
//Remova o último elemento do vetor e imprima o vetor resultado
 array_pop($vetNumeros);
 print_r($vetNumeros);

 ?>