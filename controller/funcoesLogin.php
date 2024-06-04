<?php
require_once "../model/funcoesBD.php";
require_once "../view/login.php";


if (!empty($_POST["registro"]) && !empty($_POST["senha"])) {
    $registro = $_POST["registro"];
    $senha = $_POST["senha"];

    $usuario = login($registro, $senha);

    if ($usuario != NULL) {
        $_SESSION["usuario"] = $usuario;
        
        header('Location: ../view/cadastroTurmas.php');
        die();

    } else {
        header('Location: ../view/login.php');
        die();
    }
}
?>
