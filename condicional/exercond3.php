<?php
$valor1 = 7;

if ($valor1 % 2 == 0) {
    $dobro = $valor1 * 2; 
    $valor1 = $dobro * 3;
    echo "$valor1";
}  else {
    $valor1 = $valor1 + 10;
    echo "$valor1";
}
?>