<?php
function somar(int $n1,int $n2, int $n3 = 0){ //podemos informar o tipo de argumento aceito especificando ela como no int nesta linha   // o $n3 = 0 e para conseguir receber 2 ou 3 parametros (parametro opcional) 
        $total = $n1 + $n2;
        return $total;
}
$somar = somar(10, 5);
 echo 'Total '.$somar;
 $x = somar (10, 4);
 $y = somar (5, 7);
 $w = somar ($x, $y);
 echo' Valor '. $w;