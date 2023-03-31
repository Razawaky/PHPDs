<?php

$sal = $_GET['sal'];
$op = $_GET['op'];

switch($op){
    case 1: $valor = $sal + ($sal * 45) / 100;
    echo "Aumento de $valor";
    break;
    case 2: $valor = $sal + ( $sal * 37.5) / 100;
    echo "Aumento de $valor";
    break;
    case 3: $valor = $sal + ( $sal * 30) / 100;
    echo "Aumento de $valor";
    break;
    case 4: $valor = $sal + ( $sal * 27.3) / 100;
    echo "Aumento de $valor";
    break;
    case 5: $valor = $sal + ( $sal * 10) / 100;
    echo "Aumento de $valor";
    break;
    default: echo "Invalido";
}

?>