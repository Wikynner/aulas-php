<?php
$lista = ['bonieky', 'pedro', 'Wikynner', 'paula', 'joao', 'dudu', 'jose'];
$aprovados = ['bonieky','pedro', 'joao', 'Wikynner'];

$reprovados = array_diff($lista, $aprovados);

print_r($reprovados);

$numero = [ 4, 7, 3, 9, 8, 2, 1, 6];

sort($numero);
print_r($numero);