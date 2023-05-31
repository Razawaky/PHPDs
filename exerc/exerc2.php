<?php
/* Faça um programa qu mostre dois valores na tela, depois faça a troca entre os valores das variavéis na tela */
$val = 696;
$val2 = 777;

echo "Valores iniciais $val e $val2". "<br>";
$troca = $val;
$val = $val2;
$val2 = $troca;

print "Os novos valores seram $val e $val2";
?>