<?php

function conectarBD() {

    #mysqli_connect('rost', 'user', 'pw', 'nome_banco');
    $conexao = mysqli_connect("localhost", "root", "", "plataforma-educacional");
    return($conexao);

}

# Funções Aluno

function createAluno($nome, $sobrenome, $ra, $email, $senha) {

    $conexao = conectarBD();
    $consulta = "INSERT INTO alunos (nome, sobrenome, ra, email, senha) 
    VALUES ('$nome', '$sobrenome', '$ra', '$email', '$senha')";
    mysqli_query($conexao, $consulta);

}

function returnAluno($ra, $senha) {

    $conexao = conectarBD();
    $consulta = "SELECT nome FROM alunos WHERE (ra = '$ra') AND (senha = '$senha')";
    $nomeAluno = mysqli_query($conexao, $consulta);
    return $nomeAluno;

}

# Funções Professor

function createProfessor($nome, $sobrenome, $rp, $email, $senha) {

    $conexao = conectarBD();
    $consulta = "INSERT INTO professores (nome, sobrenome, rp, email, senha) 
    VALUES ('$nome', '$sobrenome', '$rp', '$email', '$senha')";
    mysqli_query($conexao, $consulta);

}

function returnProfessor($rp, $senha) {

    $conexao = conectarBD();
    $consulta = "SELECT nome FROM professores WHERE (rp = '$rp') AND (senha = '$senha')";
    $nomeProfessor = mysqli_query($conexao, $consulta);
    return $nomeProfessor;

}

# Login

function login($registro, $senha) {

    $conexao = conectarBD();
    
    $consulta = "SELECT * FROM professores, alunos WHERE (rp = '$registro' AND senha = '$senha') OR (ra = '$registro' AND senha = '$senha')";
    $usuario = mysqli_query($conexao, $consulta);
    
    echo $usuario["nome"];
    return $usuario;

}

?>