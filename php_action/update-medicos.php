<?php
session_start();

require_once 'db_connect.php';

if (isset($_POST['btn-editar'])) :

    $nome = mysqli_escape_string($connect, $_POST['nome']);
    $email = mysqli_escape_string($connect, $_POST['email']);
    $telefone = mysqli_escape_string($connect, $_POST['telefone']);
    $cpf = mysqli_escape_string($connect, $_POST['cpf']);
    $profissao = mysqli_escape_string($connect, $_POST['profissao']);
    $especialidade = mysqli_escape_string($connect, $_POST['especialidade']);
    $id = mysqli_escape_string($connect, $_POST['id']);

    $sql = "UPDATE profissionais SET nome = '$nome', email = '$email', telefone = '$telefone', 
    cpf = '$cpf', profissao = '$profissao', especialidade = '$especialidade' WHERE id = '$id'";

    if (mysqli_query($connect, $sql));
        $_SESSION['mensagem'] = "Atualizado com sucesso!";
        header('Location: ../medicos/index-medicos.php');
    else :
        $_SESSION['mensagem'] = "Erro ao atualizar!";
        header('Location: ../medicos/index-medicos.php');
    

endif;
