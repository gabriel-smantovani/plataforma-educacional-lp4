<?php
require_once "../model/funcoesBD.php";
require_once "../view/login.php";


/* if (!empty($_POST["registro"]) && !empty($_POST["senha"])) {
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
} */

# Login Professor

if(!empty($_POST["rp"]) && !empty($_POST["senha"])){

    $rp = $_POST["rp"];
    $senha = $_POST["senha"];

    $usuario = loginProfessor($rp, $senha);

    if ($usuario != NULL) {
        $_SESSION["usuario"] = $usuario;
        
        header('Location: ../view/cadastroTurma.php');
        die();

    } else {
        header('Location: ../view/login.php');
        die();
    }
}

# Login Aluno

if(!empty($_POST["ra"]) && !empty($_POST["senha"])){

    $ra = $_POST["ra"];
    $senha = $_POST["senha"];
    
    $usuario = loginAluno($ra, $senha);
    
    if($usuario != NULL){
        $_SESSION["usuario"] = $usuario;
    
        header("Location: ../view/turmas.php");
        die();
    }   
    else{
    
        header("Location: ../view/login.php");
        die();
    }
    
    }

?>


?>
