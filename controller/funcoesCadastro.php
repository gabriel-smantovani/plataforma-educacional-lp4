<?php

require_once "../model/funcoesBD.php";

# Aluno

if(!empty($_POST["nome"]) && !empty($_POST["sobrenome"]) && !empty($_POST["ra"]) && !empty($_POST["email"]) && !empty($_POST["senha"])) {
        
    $nome = $_POST["nome"];
    $sobrenome = $_POST["sobrenome"];
    $ra = $_POST["ra"];
    $email = $_POST["email"];
    $senha = $_POST["senha"];

    createAluno($nome, $sobrenome, $ra, $email, $senha);
    
    header('location:../view/home.php');
    die();

}

# Professor

if(!empty($_POST["nome"]) && !empty($_POST["sobrenome"]) && !empty($_POST["rp"]) && !empty($_POST["email"]) && !empty($_POST["senha"])) {
        
    $nome = $_POST["nome"];
    $sobrenome = $_POST["sobrenome"];
    $rp = $_POST["rp"];
    $email = $_POST["email"];
    $senha = $_POST["senha"];
    
    createProfessor($nome, $sobrenome, $rp, $email, $senha);

    header('location:../view/home.php');
    die();

}

# Turma

if(!empty($_POST["codigoTurma"]) && !empty($_POST["nomeTurma"]) && !empty($_POST["modulo"]) && !empty($_POST["turnoTurma"]) && !empty($_POST["dataInicio"]) && 
!empty($_POST["dataTermino"])) {

    $codigoTurma = $_POST["codigoTurma"];
    $nomeTurma = $_POST["nomeTurma"];
    $modulo = $_POST["modulo"];
    $turnoTurma = $_POST["turnoTurma"];
    $dataInicio = $_POST["dataInicio"];
    $dataTermino = $_POST["dataTermino"];

    createTurma($codigoTurma, $nomeTurma, $modulo, $turnoTurma, $dataInicio, $dataTermino);

    header('location:../view/cadastroTurma.php');
    die();

}



?>