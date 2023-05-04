<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
 <form action="" method="post">

        <label for="">Nome:</label><br>
        <input type="text" name="Nome:" id=""><br/>
        <label for="">Sobrenome:</label><br>
        <input type="text" name="Sobrenome:" id=""><br>
        <label for="">Estado Civil:</label><br>
        <input type="text" name="EstadoCivil:" id=""><br>
        <label for="">RG:</label><br>
        <input type="text" name="RG:" id=""><br>
        <label for="">CPF:</label><br>
        <input type="text" name="CPF:" id=""><br>
        <label for="">Rua:</label><br>
        <input type="text" name="Rua:" id=""><br>
        <label for="">Número:</label><br>
        <input type="text" name="Número:" id=""><br>
        <label for="">Bairro:</label><br>
        <input type="text" name="Bairro:" id=""><br>
        <label for="">Cidade:</label><br>
        <input type="text" name="Cidade:" id=""><br>
        <label for="">CEP:</label><br>
        <input type="text" name="CEP:" id=""><br>
        <label for="">Telefone:</label><br>
        <input type="text" name="Telefone:" id=""><br>
        <label for="">Email:</label><br>
        <input type="text:" name="Email:" id=""><br>
        <label for="">Senha:</label><br>
        <input type="text" name="Senha:" id=""><br>
        <input type="submit" value="Concluir"><br>
        </form>
</body>
</html>

<?php

print_r($_POST);
$Nome = $_POST['Nome:'];
$Sobrenome = $_POST['Sobrenome:'];
$EstadoCivil = $_POST['EstadoCivil:'];
$RG = $_POST['RG:'];
$CPF = $_POST['CPF:'];
$Rua = $_POST['Rua:'];
$Número = $_POST['Número:'];
$Bairro = $_POST['Bairro:'];
$Cidade = $_POST['Cidade:'];
$CEP = $_POST['CEP:'];
$Telefone = $_POST['Telefone:'];
$Email = $_POST['Email:'];
$Senha = $_POST['Senha:'];

echo "Informações Gerais: {$Nome} {$Sobrenome} {$EstadoCivil} {$RG} {$CPF} {$Rua} {$Número} {$Bairro} {$Cidade} {$CEP} {$Telefone} {$Email} {$Senha}";

?>