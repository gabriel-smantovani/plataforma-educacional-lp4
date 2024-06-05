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
    <title>Home Professor</title>
</head>

<body>
<header>
        <section id="cabecalho">
            <section id="logo">
                <img src="../img/logo-dog.jpg">
            </section>
            <section id="nome-site">
                <h1>CLASS UNITY</h1>
            </section>
        </section>
    </header>
    
    <section id="sessao-nav">

        <nav>
            <ul>
                <li><a href="cadastroTurma.php">CADASTRAR TURMAS</a><li>
                <li><a href="cadastroDisciplina.php">CADASTRAR DISCIPLINAS</a><li>
                <li><a href="visualizarTurma.php">VISUALIZAR TURMAS</a><li>
                <li><a href="#">ATRIBUIR ATIVIDADE</a><li>
                <li><a href="#">CALENDÁRIO</a><li>   
                <li><a href="#">CONFIGURAÇÕES</a><li>
            </ul>
        </nav>

    </section>
        
    <main>
        <section id="sessao-boas-vindas">
            <h1>Bem-vindo(a) Professor(a), <?php echo $usuario['nome']; ?>!</h1>
            <p>Você está logado como <?php echo $usuario['email']; ?>.</p>
        </section>
    </main>

    <footer style="position: fixed; bottom: 0;">
        <p>Copyright © 2024 - Todos os direitos reservados</p>
    </footer>
</body>
</html>
