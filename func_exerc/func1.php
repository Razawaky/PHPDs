<?php
// FAÇA UM PROGRAMA QUE CRIE DUAS FUNÇÕES, UMA PARA VENDEDOR, E OUTRA PARA OS ADMINISTRATIVOS. 
// OS VENDEDORES TÊM UM SALÁRIO BASE, E UMA COMISSÃO QUE GANHAM DE SUAS VENDAS. 
// OS ADMINISTRATIVOS POSSUEM UM 
// SALÁRIO FIXO MAS PODEM GANHAR HORAS EXTRAS ADICIONAIS. FAÇA UM PROCESSAMENTO ONDE OS VENDEDORES DEVEM TER NA TELA EXIBIDOS O 
// SEU NOME, SEU SALÁRIO ATUAL E O SALÁRIO TOTAL, CONSIDERANDO UMA COMISSÃO DE 5%. PARA OS ADMINISTRATIVOS, MOSTRE SEU NOME, SEU SALÁRIO, E 
// AS HORAS EXTRAS É QUE SÃO ACUMULADAS E PAGAS COM O VALOR DE UM CENTÉSIMO DO SALÁRIO POR HORA.

$nome = $_POST['nomevend'];
$salario = $_POST['salario'];
$vendas = $_POST['venda'];

$adm_nome = $_POST['admin_nome'];
$salario_fixo = $_POST['salario_fixo'];
$hora_extra = $_POST['horas_extras'];

function vendedor($nome, $salario, $vendas) {
    $comissao = 0.05; //Comissão 5% para vendas
    $salario_total = $salario + ($vendas * $comissao);

    echo "Nome: " . $nome . "<br>";
    echo "Salário: " . $salario . "<br>";
    echo "Vendas: " . $vendas . "<br>";
    echo "Salário Total: " . $salario_total . "<br>";
    
}

function administrativos($adm_nome, $salario_fixo, $hora_extra) {
    $valor_horas_extras = $salario_fixo * 0.01 * $hora_extra;
    $salario_total = $salario_fixo + $valor_horas_extras;

    echo "Nome: " . $adm_nome . "<br>";
    echo "Salário Fixo: " . $salario_fixo . "<br>";
    echo "Horas Extras: " . $hora_extra . "<br>";
    echo "Salário Total: " . $salario_total . "<br>";
    echo "<br>";
}

echo vendedor($nome, $salario, $vendas);
echo administrativos($adm_nome, $salario_fixo, $hora_extra);
?>