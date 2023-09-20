<?php

    include 'conexao.php'; //INCLUI O ARQUIVODE CONEXÃO

    $nome = $_POST['nome'];
    $idade = $_POST['idade'];
    $cpf = $_POST['cpf'];
    $escolaridade = $_POST['escolaridade'];


    //INSERÇÃO NO BANCO DE DADOS
    $insere_aluno = "INSERT INTO aluno(nome, idade, cpf, escolaridade)
                    VALUES ('$nome', $idade, $cpf, '$escolaridade')";
    //FUNÇÃO QUE CHAMA A CONEXÃO E LEVA A CONSULTA PARA O BANCO DE DADOS
    mysqli_query($conexao, $insere_aluno);
?>