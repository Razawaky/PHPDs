<?php

    //PARA A CONEXÃO, SÃO NECESSÁRIOS 4 PARÂMETROS
    $servidor = 'localhost';
    $usuario = 'root';
    $senha = '';
    $banco = 'escola';

    //FUNÇÃO PARA CONECTAR COM O BANCO
    $conexao = mysqli_connect($servidor, $usuario, $senha, $banco)
?>