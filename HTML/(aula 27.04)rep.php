<!DOCTYPE html>

<html lang="pt-br">

<head>

 <meta charset="UTF-8">

 <meta http-equiv="X-UA-Compatible" content="IE=edge">

<meta name="viewport" content="width=

, initial-scale=1.0">

<title>Mc Modelo</HTML></title>

</head>

<body>

 <form method="post" action="">

 <label for="">Nome</label><br>


 <label for="">Apelido</label><br>

<input type="text" name="Apelido" id=""><br>

 <input type="submit" value="Clique aqui"><br>






 </form>

</body>

</html>




<?php




$nome = $_POST['Morango'];




$sobrenome = $_POST['Apelido'];




echo "Nome completo: {$nome} {$sobrenome}";







?>