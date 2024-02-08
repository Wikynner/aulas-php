<?php

$bolo1 = [
    'açucar',
    'farinha de trigo',
    'ovo' , 
    'Leite', 
    'fermento em pó'
];

$bolo2 = [
    ...$bolo1, // Operador Array Spread ( em vez de copiar tudo do outo array coloca o ...$bolo1 que é o spreed e o itens antes ou depois s)
    'corante'
];
echo $bolo2[5];// item 5 do bolo 2 


/*$lista1 = ['bonieky', 'pedro' , 'joao'];
  $lista2 = ['patricia', 'fabricia' , 'melissa'];
  $lista3 = [...$lista1 , ...$lista2];
  print_r($lista3); //mostrará todos os array na tela  */