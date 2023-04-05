<?php
//Exibir todos os números ímpares de 500 a 10
$n = 500;

do{
    $n--;
    echo $n % 2 ? $n. " " : " ";
} 
while ($n > 10);


?>