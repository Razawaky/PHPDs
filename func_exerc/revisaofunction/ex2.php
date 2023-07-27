<?php
$idade = $_POST['idade'];
$sexo = $_POST['sexo'];
echo  validacao($idade, $sexo);

function validacao($idade, $sexo) {
    switch($sexo) {
        case 'm': 
            echo "Invalido";
        break;
        case 'f':
            if($idade < 18) {
                echo "Invalido";
            } else {
                echo "Valido";
            };
        break;
    }
}
?>