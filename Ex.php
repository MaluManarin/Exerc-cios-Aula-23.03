<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<h1>IDENTIDADE</h1><br>

<form action="" method= "post">
    <label for="">Informe seu RG:</label>
    <input type= "text" name="RG:" id="">
    <input type= "Submit" value="Enviar"> <br>
    

 <form action="" method= "post"> <br>
    <label for="">Informe seu nome:</label>
    <input type= "text" name="Nome:" id="">
    <input type= "Submit" value="Enviar">

</form>
</body>
</html>

<?php

//Crie um formulário HTML tenha um campo de entrada de texto(input text) e um
//botão(input submit). Quando o botão for clicado, envie os dados para uma função PHP que exiba o 
//conteúdo inserido no campo de entrada na tela por meio de um ECHO.


$nome = $_POST['fulaninho'];

$rg = $_POST['Apelido'];

echo "Dados Gerais:{$nome} {$rg}";

//Crie um formulário HTML com dois campos de entrada numérica(input numeric) e um botão(input submit).
//Quando o botão for clicado, envie os dados para uma função PHP que calcule a soma dos dois números 
//e exiba o resultado na página por meio de um ECHO.

//Crie um formulário HTML com um campo de seleção(select/option) e um botão(input submit). O campo de
//seleção deve conter várias opções (por exemplo, maçã, banana, laranja). Quando o botão for clicado,
//envie os dados para um script PHP que exiba a opção selecionada.

//Crie um formulário HTML com uma caixa de seleção(input checkbox) e um botão(input submit). Quando o 
//botão for clicado, envie os dados para uma função no PHP que verifique se a caixa de seleção está marcada
//ou desmarcada e exiba a informação correspondente.
?>