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
        <img src="../img/logo-dog.jpg" alt="Logo da plataforma">
        <h1>CLASS UNITY</h1>
    </header>
    <section id="conteudo">
        <section id="caixa-do-formulario">
            <h2>Crie sua conta, professor</h2>
            <form method="POST" action="../controller/funcoesCadastro.php">
                <input type="text" name="nome" id="" placeholder="Digite seu nome">
                <input type="text" name="sobrenome" id="" placeholder="Digite seu sobrenome">
                <input type="text" name="rp" id="" placeholder="Digite seu registro profissional (RP)">
                <input type="email" name="email" id="" placeholder="Digite seu e-mail">
                <input type="password" name="senha" id="" placeholder="Digite sua senha">
                <input type="submit" value="Cadastrar">
            </form>
        </section>
    </section>
    <footer>
        <p>Copyright © 2024 - Todos os direitos reservados</p>
    </footer>
</body>
</html>