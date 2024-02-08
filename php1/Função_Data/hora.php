
<?php
function dsemana(string $data){
$dias = date('l', strtotime($data));
  switch($dias){
    case 'Sunday':
        echo'Domingo';
        break;

    case 'Monday':
        echo 'Segunda';
        break;
    case 'Tuesday':
        echo 'Terça';
        break;  
    case 'Wednesday':
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
$selectedData = '15-05-2024';
echo $selectedData. ' - ';
echo dsemana($selectedData);


//echo date(' l ');//padrão inernacional
