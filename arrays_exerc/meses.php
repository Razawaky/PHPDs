<?php

$mes = $_POST['meses']; //Valor digitado no formulário

$meses = array(  //Array que armazena os valores de cada mês 
  1 => "Janeiro",
  2 => "Fevereiro",
  3 => "Março",
  4 => "Abril",
  5 => "Maio",
  6 => "Junho",
  7 => "Julho",
  8 => "Agosto",
  9 => "Setembro",
  10 => "Outubro",
  11 => "Novembro",
  12 => "Dezembro"
);
//Verificação para ver se é válido ou não, informar o valor de cada mês respectivos
if ($mes >= 1 && $mes <= 12) {
  echo "O mês correspondente ao número $mes é {$meses[$mes]}.";
} else {
  echo "O número digitado é inválido.";
}
?>