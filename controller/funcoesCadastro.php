<?php

require_once "../model/funcoesBD.php";

# Funções Aluno

function cadastrarAluno() {

    if(!empty($_POST["nome"]) && !empty($_POST["sobrenome"]) && !empty($_POST["ra"]) && !empty($_POST["email"]) && !empty($_POST["senha"])) {
        
        $nome = $_POST["nome"];
        $sobrenome = $_POST["sobrenome"];
        $ra = $_POST["ra"];
        $email = $_POST["email"];
        $pw = $_POST["senha"];
    
    }

    createAluno($nome, $sobrenome, $ra, $email, $pw);

    header('../view/home.php');
    die();

}

# Funções Professor

function cadastrarProfessor() {

    if(!empty($_POST["nome"]) && !empty($_POST["sobrenome"]) && !empty($_POST["rp"]) && !empty($_POST["email"]) && !empty($_POST["senha"])) {
        
        $nome = $_POST["nome"];
        $sobrenome = $_POST["sobrenome"];
        $rp = $_POST["rp"];
        $email = $_POST["email"];
        $pw = $_POST["senha"];
    
    }

    createProfessor($nome, $sobrenome, $rp, $email, $pw);

    header('../view/home.php');
    die();

}

?>