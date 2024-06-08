<?php

require_once "../controller/funcoesLogin.php";

?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="../css/cadastros.css">
</head>
<body>
    <header>
        <a href="./home.php"><img src="../img/logo-dog.jpg" alt="Logo da plataforma"></a>
            <h1><a href="./home.php">CLASS UNITY</a></h1>
    </header>
    <section id="conteudo">
        <section id="caixa-do-formulario">
            <h2>Acesse sua conta</h2>
            <form method="POST" action="../controller/funcoesLogin.php">
                <input type="text" name="ra" placeholder="Digite seu RA (Aluno)">
                <input type="text" name="rp" placeholder="Digite seu RP (Professor)">
                <input type="password" name="senha" placeholder="Digite sua senha">
                <input type="submit" value="Entrar">
            </form>
        </section>
    </section>
    <footer style="position: fixed; bottom: 0;">
        <p>Copyright © 2024 - Todos os direitos reservados</p>
    </footer>
</body>
</html>