<?php
//Exibir a soma de todos os ímpares de 0 a 100
$s = 0;
$n = 1;

while ($n <= 100) {
    $s += $n * ($n % 2);
    $n++;
}
echo $s;
?>