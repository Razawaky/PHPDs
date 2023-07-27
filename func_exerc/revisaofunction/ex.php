<?php
$vnum = $_POST['numero'];

echo "o valor de " .$vnum ." é <br>";
echo verificacao($vnum);

function verificacao($vnum) {
    if($vnum == 0) {
        echo "Igual a zero";
    } elseif ($vnum > 0) {
        echo "Positivo";
    } else {
        echo "Negativo";
    }
}

?>