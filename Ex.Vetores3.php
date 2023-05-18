<?php

//Crie um vetor bidimensional que armazene o cadastro 5 pessoas e com os seguintes dados: nome, endereço, cidade, estado, bairro e escolaridade.
//Mostre todo o vetor na tela utilizando o Foreach.

$VetCadastro = [

    ['Nome' => 'João Augusto',
    'Endereço' => 'Av. Etelvina de Souza Majone, 1-64',
    'Bairro' => 'Jardim Colonial',
    'Cidade' => 'Bauru',
    'Estado' => 'São Paulo',
    'Escolaridade' => 'Ensino Superior completo | Formação Facultativa: 2 Faculdades'],

    ['Nome' => 'Claudete',
    'Endereço' => 'Caetano Cariani 14-16',
    'Bairro' => 'Bela Vista',
    'Cidade' => 'Bauru',
    'Estado' => 'São Paulo',
    'Escolaridade' => 'Ensino Fundamental completo'],
 
    ['Nome' => 'Dimitri',
    'Endereço' => 'Anhanguera',
    'Bairro' => 'Higienópolis',
    'Cidade' => 'Bauru',
    'Estado' => 'São Paulo',
    'Escolaridade' => 'Cursando Ensino Superior'],

    ['Nome' => 'Vinícius',
    'Endereço' => 'Mário Gonzaga',
    'Bairro' => 'Parque Viaduto',
    'Cidade' => 'Bauru',
    'Estado' => 'São Paulo',
    'Escolaridade' => 'Cursando Ensino Superior'],

    ['Nome' => 'Maria Luiza',
    'Endereço' => 'Itália Travain',
    'Bairro' => 'Villaggio',
    'Cidade' => 'Bauru',
    'Estado' => 'São Paulo',
    'Escolaridade' => 'Ensino Superior completo | Formação Facultativa: Fonoaudiologia']
];
 foreach ($VetCadastro as $key => $value) {
    echo " $key = $value <br> ";
 }

  foreach ($VetCadastro as $key => $value) {
    echo "<br>-----------------------------------<br>";
    foreach ($VetCadastro[$key] as $key2 => $value2) {
       echo " $key2 = $value2 ";
    }
  }
?>