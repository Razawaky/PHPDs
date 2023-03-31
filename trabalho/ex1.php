<?php

$valor = $_GET['valor'];
$op = $_GET['op'];

switch($op){
    case 1: 
        $conta = $valor - ($valor * 5) / 100; 
    echo "Valor inicial é $valor " . " <br> Valor com desconto da compra 5% é: " . $conta;
break;

case 2: 
    $conta = $valor - ($valor * 22) / 100; 
 echo "Valor inicial é $valor " . " <br> Valor com desconto da compra 22% é: " . $conta;
break;

case 3: 
    $conta = $valor - ($valor * 9) / 100; 
   echo "Valor inicial é $valor " . " <br> Valor com desconto da compra 9% é: " . $conta;
break;

default: echo "Erro";


}