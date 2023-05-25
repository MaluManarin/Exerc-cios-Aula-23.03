<?php

echo "C Á L C U L O S (+, -, *, /)<br/>";

 function calcular($a, $b, $op)

 {
    if ($op == 'soma') {
        $resultado = $a + $b;
        return $resultado;
    }

    if ($op == 'subtração') {
        $resultado = $a - $b;
        return $resultado;
    }
    
    if ($op == 'multiplicação') {
        $resultado = $a * $b;
        return $resultado;
    }

    if ($op == 'divisão') {
        $resultado = $a / $b;
        return $resultado;
    }
 }
    $dados = calcular(45, 45, 'soma');
  echo "<br>Resultado do cálculo = $dados<br>";

  $dados = calcular(45, 45, 'subtração');
  echo "<br>Resultado do cálculo = $dados<br>";

  $dados = calcular(45, 45, 'multiplicação');
  echo "<br>Resultado do cálculo = $dados<br>";

  $dados = calcular(45, 45, 'divisão');
  echo "<br>Resultado do cálculo = $dados<br>";
