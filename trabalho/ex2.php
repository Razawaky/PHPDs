<?php

$sal = $_GET['sal'];
$gasto = $_GET['gastos'];

if($gasto <= $sal){
    echo "Gastos dentro do orçamento";
}else{
echo "Orçamento Estourado";
}

?>