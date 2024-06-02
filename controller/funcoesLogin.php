<?php

require_once "../model/funcoesBD.php";

/*
if(!empty($_POST["ra"]) && !empty($_POST["senha"])) {

    $ra = $_POST["ra"];
    $senha = $_POST["senha"];
    login($ra, $senha);

    if(login($ra, $senha)) {
        echo "Olá " . return($ra, $senha);
    }
    else echo "Combinação não existente";

}

if(!empty($_POST["rp"]) && !empty($_POST["senha"])) {

    $rp = $_POST["rp"];
    $senha = $_POST["senha"];
    
    if(login($rp, $senha)) {
        echo "Olá " . returnProfessor($rp, $senha);
    }
    else echo "Combinação não existente";

}
*/

if(!empty($_POST["registro"]) && !empty($_POST["senha"])) {

    $registro = $_POST["registro"];
    $senha = $_POST["senha"];

    $usuario = login($registro, $senha);

    if($usuario["nome"] != NULL) {
        echo "É usuário";
    }
    else echo "Não é";

}

?>