<?php
$ingredientes = [
    'açucar',   
    'farinha',
    'ovo',
    'leite',
    'fermento',
];
echo' Ingredientes ';
foreach ($ingredientes as $chave => $valor){
    echo " Item : ".$chave." : ".$valor;
}; // faz os loops e mostra os ingredientes de cada array

/*echo '<h2>Ingredientes</h2>';
  echo  '<ul>;
  foreach($ingredientes as $valor){
    echo '<li>'.$valor.'</li>;
  }
  echo '</ul>;
  */                    //aqi temos uma lista desordenada de cada item 