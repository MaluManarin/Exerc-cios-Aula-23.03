<?php
//Dicionário: Crie um dicionário com informações pessoais de uma pessoa(idade, nome, cidade, etc).

 $VetDados = [
    'Nome' => 'João',
    'Idade' => 24,
    'Cidade' => 'Bauru'
 ];

 //Imprima o nome da pessoa.

  echo "<br>O nome é:".$VetDados['Nome']."<br>";

  //Adicione mais um par de chave-valor ao dicionário, representando a profissão da pessoa.
  $VetDados['Profissão'] = 'Análise de sistemas e programador';
  print_r($VetDados);
  echo "<br>";

  //Verifique se a chave "cidade" está presente no dicionário.
  if (array_key_exists('Cidade', $VetDados)) {
    echo "Chave existente!<br>";
  } else {
    echo "Chave não existente!<br>";
  }

  //Remova a chave "idade" do dicionário e imprima-o.
  unset($VetDados['Idade']);
  print_r($VetDados);
  echo "<br>";
  
?>