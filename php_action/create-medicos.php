<?php
session_start();

require_once 'db_connect.php';

if (isset($_POST['btn-cadastrar'])) :
    $nome = mysqli_escape_string($connect, $_POST['nome']);
    $email = mysqli_escape_string($connect, $_POST['email']);
    $telefone = mysqli_escape_string($connect, $_POST['telefone']);
    $cpf = mysqli_escape_string($connect, $_POST['cpf']);
    $profissao = mysqli_escape_string($connect, $_POST['profissao']);
    $especialidade = mysqli_escape_string($connect, $_POST['especialidade']);

    $sql = "INSERT INTO profissionais (nome, email, telefone, cpf, profissao, especialidade) 
VALUES ('$nome', '$email', '$telefone', '$cpf', '$profissao', '$especialidade')";

    if (mysqli_query($connect, $sql));
        $_SESSION['mensagem'] = "Cadastrado com sucesso!";
        header('Location: ../medicos/index-medicos.php');
    else :
        $_SESSION['mensagem'] = "Error ao cadastrar!";
        header('Location: ../medicos/index-medicos.php');
    

endif;
