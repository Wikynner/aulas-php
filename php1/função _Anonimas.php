<?php
$dizimo = function($valor){
    return $valor * 0.1;
};
$funcao = $dizimo;

echo $funcao(82);
