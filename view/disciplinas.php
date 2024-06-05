<?php

require_once "../model/funcoesBD.php";

    $codigoTurma = $_POST['codigo'];
    $disciplinas = returnDisciplinas($codigoTurma);

?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="../css/disciplina.css" rel="stylesheet" type="text/css">
    <title>Disciplinas da Turma</title>
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
        <h1>Disciplinas</h1>
        <table>
            <tr>
                <th>Código da Disciplina</th>
                <th>Nome da Disciplina</th>
            </tr>
            <?php 
            if ($disciplinas && mysqli_num_rows($disciplinas) > 0) {
                while ($disciplina = mysqli_fetch_assoc($disciplinas)) {
                    echo "<tr>";
                    echo "<td>" . $disciplina['codigo_disciplina'] . "</td>";
                    echo "<td>" . $disciplina['nome'] . "</td>";
                    echo "</tr>";
                }
            } else {
                echo "<tr><td colspan='2'>Nenhuma disciplina cadastrada para esta turma.</td></tr>";
            }
            ?>
        </table>
    </main>

    <footer style="position: fixed; bottom: 0;">
        <p>Copyright © 2024 - Todos os direitos reservados</p>
    </footer>
</body>
</html>
