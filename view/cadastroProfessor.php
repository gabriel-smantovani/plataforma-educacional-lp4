<?php

require_once "../controller/funcoesCadastro.php";

?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro do professor</title>
    <link rel="stylesheet" href="../css/cadastros.css">
</head>
<body>
    <header>
        <a href="./home.php"><img src="../img/logo-dog.jpg" alt="Logo da plataforma"></a>
        <h1><a href="./home.php">CLASS UNITY</a></h1>
    </header>
    <section id="conteudo">
        <section id="caixa-do-formulario">
            <h2>Crie sua conta, professor</h2>
            <form method="POST" action="../controller/funcoesCadastro.php">
                <input type="text" name="nome" placeholder="Digite seu nome">
                <input type="text" name="sobrenome" placeholder="Digite seu sobrenome">
                <input type="text" name="rp" placeholder="Digite seu registro profissional (RP)">
                <input type="email" name="email" placeholder="Digite seu e-mail">
                <input type="password" name="senha" placeholder="Digite sua senha">
                <input type="submit" value="Cadastrar">
            </form>
        </section>
    </section>
    <footer>
        <p>Copyright © 2024 - Todos os direitos reservados</p>
    </footer>
</body>
</html>