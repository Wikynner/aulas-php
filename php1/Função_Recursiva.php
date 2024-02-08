<?php
function dividir($numero){//executa ela mesma internamente
    $metade = $numero / 2 ;
    echo $metade.'
    ';
    if (round($metade) > 0){
         dividir($metade);
    }
}
dividir(100);