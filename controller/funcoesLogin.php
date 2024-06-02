<?php

require_once "../model/funcoesBD.php";
require_once "../view/login.php";

session_start();

if(!empty($_POST["registro"]) && !empty($_POST["senha"])) {

    $registro = $_POST["registro"];
    $senha = $_POST["senha"];

    $usuario = login($registro, $senha);

    if($usuario != NULL) {
        
        $_SESSION["usuario"] = $usuario;
        header('location:../view/turmas.php');
        die();

    }
    else {
        
        header('location:../view/login.php');

    }

}

?>