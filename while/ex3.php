<?php
//Exibir a soma de todos os ímpares de 0 a 100

$s = 0;
$n = 0;

while ($n <= 100) {
    if ($n%2 != 0) {
        $s+=$n;
    }
    $n++;
}

echo $s;
?>