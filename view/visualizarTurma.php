<?php
require_once "../model/funcoesBD.php";

?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="../css/visualizarTurma.css" rel="stylesheet" type="text/css">
    <title>Visualizar Turmas</title>
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
        <h1>Turmas Cadastradas</h1>

        <table>
            <tr>
                <th>Código</th>
                <th>Nome</th>
                <th>Módulo</th>
                <th>Turno</th>
                <th>Data de Início</th>
                <th>Data de Término</th>
                <th>Disciplinas</th>
            </tr>
            <?php 

                $listaTurmas = returnTurma();
                
                if($listaTurmas && mysqli_num_rows($listaTurmas) > 0){

                    while ($turma = mysqli_fetch_assoc($listaTurmas)) {
                        echo "<tr>";
                        echo "<td>" . $turma['codigo'] . "</td>";
                        echo "<td>" . $turma['nome'] . "</td>";
                        echo "<td>" . $turma['modulo'] . "</td>";
                        echo "<td>" . $turma['turno'] . "</td>";
                        echo "<td>" . $turma['data_inicio'] . "</td>";
                        echo "<td>" . $turma['data_termino'] . "</td>";
                        echo "<td>
                        <form method='POST' action='disciplinas.php'>
                            <input type='hidden' name='codigo' value='" . $turma['codigo'] . "'>
                            <button type='submit'>Ver Disciplinas</button>
                        </form>
                        </td>";
                        echo "</tr>";
                    }
                }
                else{
                    
                    echo "<tr><td colspan='7'>Nenhuma turma cadastrada.</td></tr>";
                }
            ?>
        </table>
    </main>

    <footer style="position: fixed; bottom: 0;">
        <p>Copyright © 2024 - Todos os direitos reservados</p>
    </footer>
</body>
</html>
