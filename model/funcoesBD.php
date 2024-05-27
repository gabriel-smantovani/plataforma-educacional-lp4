<?php

function conectarBD() {

    #mysqli_connect('rost', 'user', 'pw', 'nome_banco');
    $conexao = mysqli_connect("localhost", "root", "", "plataforma-educacional");
    return($conexao);

}

# Funções Aluno

function createAluno($nome, $sobrenome, $ra, $email, $pw) {

    $conexao = conectarBD();
    $consulta = "INSERT INTO alunos (nome, sobrenome, ra, email, senha) 
    VALUES ('$nome', '$sobrenome', '$ra', '$email', '$pw')";
    mysqli_query($conexao, $consulta);

}

# Funções Professor

function createProfessor($nome, $sobrenome, $rp, $email, $pw) {

    $conexao = conectarBD();
    $consulta = "INSERT INTO professores (nome, sobrenome, rp, email, senha) 
    VALUES ('$nome', '$sobrenome', '$rp', '$email', '$pw')";
    mysqli_query($conexao, $consulta);

}

?>