<?php
session_start();

require_once 'db_connect.php';

if (isset($_POST['btn-editar'])) :
    $nome = mysqli_escape_string($connect, $_POST['nome']);
    $email = mysqli_escape_string($connect, $_POST['email']);
    $idade = mysqli_escape_string($connect, $_POST['idade']);
    $telefone = mysqli_escape_string($connect, $_POST['telefone']);
    $cpf = mysqli_escape_string($connect, $_POST['cpf']);
    $cartao_sus = mysqli_escape_string($connect, $_POST['cartao_sus']);
    $cep = mysqli_escape_string($connect, $_POST['cep']);
    $rua = mysqli_escape_string($connect, $_POST['rua']);
    $bairro = mysqli_escape_string($connect, $_POST['bairro']);
    $cidade = mysqli_escape_string($connect, $_POST['cidade']);
    $estado = mysqli_escape_string($connect, $_POST['estado']);
    $id = mysqli_escape_string($connect, $_POST['id']);

    $sql = "UPDATE pacientes SET nome = '$nome', email = '$email', idade = '$idade', telefone = '$telefone', 
    cpf = '$cpf', cartao_sus = '$cartao_sus', cep = '$cep', rua = '$rua', bairro = '$bairro', cidade = '$cidade', estado = '$estado' WHERE id = '$id'";

    if (mysqli_query($connect, $sql));
        $_SESSION['mensagem'] = "Atualizado com sucesso!";
        header('Location: ../pacientes.php');
    else :
        $_SESSION['mensagem'] = "Erro ao atualizar!";
        header('Location: ../pacientes.php');
    

endif;
