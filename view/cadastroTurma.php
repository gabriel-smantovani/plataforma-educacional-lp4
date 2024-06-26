<?php

    require_once "../controller/funcoesCadastro.php";

?>
<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="../css/cadastroTurma.css" rel="stylesheet" type="text/css">
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
                <li><a href="cadastroTurma.php">CADASTRAR TURMAS</a><li>
                <li><a href="cadastroDisciplina.php">CADASTRAR DISCIPLINAS</a><li>
                <li><a href="visualizarTurma.php">VISUALIZAR TURMAS</a><li>
                <li><a href="#">VISUALIZAR PROFESSORES</a><li>
                <li><a href="#">VISUALIZAR ALUNOS</a><li>
            </ul>
        </nav>

    </section>

    <main>
    <section id="sessao-cadastro-turma">

        <section id="caixa-do-formulario">

            <h2>Cadastrar Turmas</h2>
            <form method="POST" action="../controller/funcoesCadastro.php">

                <input type="text" name="codigoTurma" placeholder="Código da turma">
                <input type="text" name="nomeTurma" placeholder="Nome da turma">
                <input type="text" name="modulo" placeholder="Módulo da turma">
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