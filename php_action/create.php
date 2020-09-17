<?php
session_start();

require_once 'db_connect.php';

if (isset($_POST['btn-cadastrar'])) :
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

    $sql = "INSERT INTO pacientes (nome, email,	idade, telefone, cpf, cartao_sus, cep, rua, bairro, cidade, estado) 
VALUES ('$nome', '$email', '$idade', '$telefone', '$cpf', '$cartao_sus', '$cep', '$rua', '$bairro', '$cidade', '$estado')";

    if (mysqli_query($connect, $sql));
        $_SESSION['mensagem'] = "Cadastrado com sucesso!";
        header('Location: ../pacientes.php');
    else :
        $_SESSION['mensagem'] = "Error ao cadastrar!";
        header('Location: ../pacientes.php');
    

endif;
