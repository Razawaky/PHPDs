<?php
$peso = 110;
$altura = 1.70;
$resultado = $peso / ($altura * 2);

if ($resultado <= 16) {
    echo "Magro de RUIM";
} elseif ($resultado >= 16.1 && $resultado <= 17) {
    echo "Magreza moderada, ainda puro osso";
} elseif ($resultado >= 17.1 && $resultado <= 18.5) {
    echo "Magreza de leve";
} elseif ($resultado >= 18.6 && $resultado <= 25) {
    echo "SAÚDAVEL, quem diria não é mesmo!";
} elseif ($resultado >= 25.1 && $resultado <= 30) {
    echo "Sobrepeso, tenha cuidado";
} elseif ($resultado >= 30.1 && $resultado <= 35) {
    echo "Obesidade 1...";
} elseif ($resultado >= 35.1 && $resultado <= 40) {
    echo "Obesidade level 2";
} elseif ($resultado > 40) {
    echo "Obesidade level 3";
} 

?>