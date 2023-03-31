<?php

$n = 1;
$t = 2;

/*while($n <= 10){

    $r = $n * $t;
    echo $n . " x " . $t . " = " . $r . "<br>";
    $n++;

}*/

do{
    $r = $n * $t;
    echo $n . " x " . $t . " = " . $r . "<br>";
    $n++;  //incremento
}
while($n <= 10); //logica true/false

?>