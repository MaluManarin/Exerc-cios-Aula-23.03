
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Documhtml01.06ent</title>
</head>
<body>
    <h1>SISTEMA DE REAJUSTE SALARIAL</h1><br>

    <form action="" method= "post">
        <label for="">Informe salário a ser ajustado:</label>
        <input type= "text" name="salario" id="">
        <input type= "Submit" value="calcular reajuste">

    </form>

</body>
</html>

<?php

//Crie uma função que receba um salário e calcula o reajuste dosalário do funcionário.
//Se o salário for 1 salário mínimo o reajuste será de 10%.
//Se o salário for até 3 salários mínimos o reajuste será de 5%.
//Se o salário for acima 3 salários mínimos o reajuste será de 3%.

    $salreajuste = reajustesalario($_POST['salario']);
    echo "<h2> Salário Reajustado: " . $salreajuste . "</h2>";
    function reajustesalario($salario)

    {
        $salmínimo = 1320;
        $salreajustado = 0;

        if ($salario <= $salmínimo) {
            $salreajustado = $salario * 1.10;
        }

        if ($salario > $salmínimo and $salario <= 3 * $salmínimo) {
            $salreajustado = $salario * 1.05;
        }
        if ($salario > 3 * $salmínimo) {
           $salreajustado = $salario * 1.03;
        }
        return $salreajustado;
    }

?>