<?php
/*
function soma ($n1 , $n2){  // usado na maioria das vezes 
    $total = $n1 + $n2;
    return$total;
}
$x = 3;
$y = 2;
$total = soma($x ,$y);

echo 'TOTAL : ' .$total;

*/ 
// metodo de passar variavel por referencia
function somar ($n1 , $n2, &$total){  // para receber a variavel como referecia é preciso do  & e nao como valor, autmaticamente o terceiro parametro dessa funcao tem que ser uma variavel,nao pode passar um numero para ela  
    $total = $n1 + $n2;    
              // a variavel vai incorparada na função 
}
$x = 3;
$y = 4;
$soma = 0;

somar($x ,$y, $soma);

echo 'TOTAL : ' .$soma;
