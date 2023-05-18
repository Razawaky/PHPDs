<?php

function dado() {
    $numero = mt_rand(1,6);
    return $numero;
}

for ($giro = 1; $giro <= 10; $giro++) {
    $jogar = dado();
    echo "Jogada ". $giro. ": ". $jogar. "<br><br>" ;  
}

?>