<?php
$nota1 = $_POST['notaum'];
$nota2 = $_POST['notadois'];
$nota3 = $_POST['notatres'];
$nota4 = $_POST['notaquatro'];

function Media($nota1, $nota2, $nota3, $nota4) {
    $notamedia = ($nota1 + $nota2 + $nota3 + $nota4) / 4;
    return "Sua média é: ". $notamedia;
}

function Maiornota($nota1, $nota2, $nota3, $nota4) {
    $resultado = "";

    if($nota1 > $nota2 && $nota1 > $nota3 && $nota1 > $nota4) {
        $r = " Sua maior nota é a Primeira";
    } if ($nota2 > $nota1 && $nota2 > $nota3 && $nota2 > $nota4) {
        $r = " Sua maior nota é a Segunda";
    } if($nota3 > $nota1 && $nota3 > $nota2 && $nota3 > $nota4) {
        $r = " Sua maior nota é a Terceira";
    } if($nota4 > $nota1 && $nota4 > $nota2 && $nota4 > $nota3) {
        $r = " Sua maior nota é a Quarta";
    }
    return $resultado;
}

function Menornota($nota1, $nota2, $nota3, $nota4) {
    $resultado = "";

    if($nota1 < $nota2 && $nota1 < $nota3 && $nota1 < $nota4) {
        $r = " Sua menor nota foi a Primeira";
    } if ($nota2 < $nota1 && $nota2 < $nota3 && $nota2 < $nota4) {
        $r = " Sua menor nota foi a Segunda";
    } if($nota3 < $nota1 && $nota3 < $nota2 && $nota3 < $nota4) {
        $r = " Sua menor nota foi a Terceira";
    } if($nota4 < $nota1 && $nota4 < $nota2 && $nota4 < $nota3) {
        $r = " Sua menor nota foi a Quarta";
    }
    return $resultado;
}
echo Media($nota1, $nota2, $nota3, $nota4). "<br>";
echo Maiornota($nota1, $nota2, $nota3, $nota4). "<br>";
echo Menornota($nota1, $nota2, $nota3, $nota4);
?>