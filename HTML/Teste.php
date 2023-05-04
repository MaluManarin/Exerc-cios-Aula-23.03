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
        <input type="submit" value="Concluir">

    </form>
</body>
</html>

<?php
print_r($_POST);
$nome = $_POST['Nome:'];
$sobrenome = $_POST['Sobrenome:'];
echo "O nome completo é: {$nome} {$sobrenome}";

?>