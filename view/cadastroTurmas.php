<?php

    require_once "../controller/funcoesCadastro.php";

?>
<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="../css/cadastroTurmas.css" rel="stylesheet" type="text/css">
    <title>Cadastro Turma</title>
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
                <li><a href="visualizarTurmas.php">Visualizar Turmas</a><li>
            </ul>
        </nav>

    </section>

    <main>
    <section id="sessao-cadastro-turma">

        <section id="caixa-do-formulario">

            <h2>Cadastrar Turma</h2>
            <form method="POST" action="../controller/funcoesCadastro.php">

                <input type="text" name="codigoTurma" placeholder="Código da turma">
                <input type="text" name="nomeTurma" placeholder="Nome da turma">
                <input type="text" name="modulo" placeholder="Quantidade de módulos">
                <input type="text" name="turnoTurma" placeholder="Turno da turma">
                <label for="dataInicio">Data de Início:</label>
                <input type="date" name="dataInicio" required>
                <label for="dataTermino">Data de Término:</label>
                <input type="date" name="dataTermino" required>
                <input type="submit" value="Cadastrar">
                
            </form>

        </section>

    </section>
    </main>

    <footer>
        <p>Copyright © 2024 - Todos os direitos reservados</p>
    </footer>
</body>
</html>