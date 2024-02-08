<?php
function dias(string $data){ //função para receber a data dos dias 
    $dias = date('l',strtotime($data));// $dias recebendo o valor do dia pela data 
        switch ($dias) {
            case 'Sunday':
                echo'Domingo';
                break;
        
            case 'monday':
                echo 'Segunda';
                break;
            case 'Tuesday':
                echo 'Terça';
                break;  
            case 'Wednesday ':
                echo 'Quarta';
                break;
            case 'Thursday':
                echo 'Quinta';
                break;
            case 'Friday';
                 echo'Sexta';
                break;
            case 'Saturday':
                echo 'Sábado';
}
}
$selectdias = '10-05-2020';
echo $selectdias. '/';
echo dias($selectdias);
