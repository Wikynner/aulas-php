<?php
/*
$dizimo =  function ($valor){
    return $valor * 0.1;
};
*/
$dizimo = fn($valor) => $valor * 0.1; // funçao flecha feita em uma linha e => é utilizado no lugar do retun

echo $dizimo(982);