<?php

$vetnomes2 = [];
print_r ($vetnomes2); 
echo "Caixa Vazia!!! Preencha o Formulário, por gentileza.";

 $vetnomes = ["João", "Paola", "Rodrigo"];
 echo "<br>Nomes:";
 print_r ($vetnomes);
    

    echo "<br>Nomes Adicionais:";
    $vetnomes = array ("João", "Paola", "Rodrigo");
    array_push($vetnomes, "Maria", "Eduarda");
    print_r($vetnomes);

    echo "<br>";
    echo "Arquivo com o Nome Removido:";
    array_shift($vetnomes);
    print_r($vetnomes);
 
    echo"<br>";

    echo "Ordem Alfabética:";
    $vetNomes = array( "Paola", "Rodrigo", "Maria", "Eduarda", );
    sort($vetNomes);
    foreach ($vetNomes as $key => $val) {
    echo "[" . $key . "] = " . $val . "";

}
     
?>