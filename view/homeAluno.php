<?php
session_start();
$usuario = $_SESSION["usuario"];
?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="../css/homeAlunoProfessor.css" rel="stylesheet" type="text/css">
    <title>Home Aluno</title>
</head>

<body>

<header>
        <section id="cabecalho">
            <section id="logo">
                <img src="../img/logo-dog.jpg">
            </section>
            <section id="nome-site">
                <h1><a href="./home.php">CLASS UNITY</a></h1>
            </section>
        </section>
    </header>
    
    <section id="sessao-nav">

        <nav>
            <ul>
                <li><a href="homeAluno.php">HOME</a><li>
                <li><a href="visualizarTurma.php">VISUALIZAR TURMA</a><li>
                <li><a href="#">ATRIBUIÇÕES</a><li>
                <li><a href="#">CALENDÁRIO</a><li>  
                <li><a href="#">CONFIGURAÇÕES</a><li>
            </ul>
        </nav>

    </section>
        
    <main>
        <section id="sessao-boas-vindas">
            <h1>Bem-vindo(a), <?php echo $usuario['nome']; ?>!</h1>
            <p>Você está logado como <?php echo $usuario['email']; ?>.</p>
            <p><a href="visualizarTurma.php">Ver Turmas</a></p>
        </section>
    </main>

    <footer style="position: fixed; bottom: 0;">
        <p>Copyright © 2024 - Todos os direitos reservados</p>
    </footer>
</body>
</html>
