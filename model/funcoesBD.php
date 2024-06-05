<?php

function conectarBD() {

    #mysqli_connect('rost', 'user', 'pw', 'nome_banco');
    $conexao = mysqli_connect("localhost", "root", "", "plataforma-educacional");
    return($conexao);

}


function createAluno($nome, $sobrenome, $ra, $email, $senha) {

    $conexao = conectarBD();
    $consulta = "INSERT INTO alunos (nome, sobrenome, ra, email, senha) 
    VALUES ('$nome', '$sobrenome', '$ra', '$email', '$senha')";
    mysqli_query($conexao, $consulta);

}

function returnAluno($ra, $senha) {

    $conexao = conectarBD();
    $consulta = "SELECT nome FROM alunos WHERE (ra = '$ra') AND (senha = '$senha')";
    $nomeAluno = mysqli_query($conexao, $consulta);
    return $nomeAluno;

}

# Funções Professor

function createProfessor($nome, $sobrenome, $rp, $email, $senha) {

    $conexao = conectarBD();
    $consulta = "INSERT INTO professores (nome, sobrenome, rp, email, senha) 
    VALUES ('$nome', '$sobrenome', '$rp', '$email', '$senha')";
    mysqli_query($conexao, $consulta);

}

function returnProfessor($rp, $senha) {

    $conexao = conectarBD();
    $consulta = "SELECT nome FROM professores WHERE (rp = '$rp') AND (senha = '$senha')";
    $nomeProfessor = mysqli_query($conexao, $consulta);
    return $nomeProfessor;

}

# Função Login Professor

function loginProfessor($rp, $senha) {

    $conexao = conectarBD();
    
    $consulta = "SELECT * FROM professores WHERE (professores.rp = '$rp' AND professores.senha = '$senha')";
    $usuario = mysqli_query($conexao, $consulta);
    
    $usuarioAuxiliar = mysqli_fetch_assoc($usuario);

    if(($usuarioAuxiliar["nome"] == NULL) OR ($usuarioAuxiliar["nome"] == "")) {
        return NULL;
    }
    else {
        return $usuario;
    }

} 

# Função Login Aluno

function loginAluno($ra, $senha){

    $conexao = conectarBD();

    $consulta = "SELECT * FROM alunos WHERE (alunos.ra = '$ra' AND alunos.senha = '$senha')";
    $usuario = mysqli_query($conexao, $consulta);

    $usuarioAuxiliar = mysqli_fetch_assoc($usuario);

    if(($usuarioAuxiliar["nome"] == NULL) OR ($usuarioAuxiliar["nome"] == "")){

        return NULL;
    }

    else{
        return $usuario;
    }
}

# Funções Turma

function createTurma($idTurma, $nomeTurma, $qntdModulos, $turnoTurma, $dataInicio, $dataTermino){

    $conexao = conectarBD();
    $inserir = "INSERT INTO turmas(codigo, nome, modulo, turno, data_inicio, data_termino)
                VALUES ('$idTurma', '$nomeTurma', '$qntdModulos', '$turnoTurma', '$dataInicio', '$dataTermino')";

    mysqli_query($conexao, $inserir);

}

function returnTurma(){

    $conexao = conectarBD();
    
    $consulta = "SELECT * FROM turmas";
    $listaTurmas = mysqli_query($conexao, $consulta);

    return $listaTurmas;
}

# Funções Disciplina

function createDisciplina($nomeDisciplina, $codigoTurma){

    $conexao = conectarBD();
    
    $inserir = "INSERT INTO disciplinas(nome, fk_turma_codigo)
                VALUES('$nomeDisciplina', '$codigoTurma')";
    
    mysqli_query($conexao, $inserir);
}

function returnDisciplinas($codigoTurma){

    $conexao = conectarBD();

    $consulta = "SELECT * FROM disciplinas WHERE (fk_turma_codigo = '$codigoTurma')";

    $listaDisciplinas = mysqli_query($conexao, $consulta);

    return $listaDisciplinas;



}

?>