<?php
session_start();

require_once 'db_connect.php';

if (isset($_POST['btn-cadastrar'])) :
    $nome_medico = mysqli_escape_string($connect, $_POST['nome_medico']);
    $especialidade = mysqli_escape_string($connect, $_POST['especialidade']);
    $nome_paciente = mysqli_escape_string($connect, $_POST['nome_paciente']);
    $idade_paciente = mysqli_escape_string($connect, $_POST['idade_paciente']);
    $cartao_sus = mysqli_escape_string($connect, $_POST['cartao_sus']);
    $cpf = mysqli_escape_string($connect, $_POST['cpf']);
    $data = mysqli_escape_string($connect, $_POST['data']);
    $hora = mysqli_escape_string($connect, $_POST['hora']);

    $sql = "INSERT INTO agendamentos (nome_medico, especialidade, nome_paciente, idade_paciente, cartao_sus, cpf, data, hora) 
VALUES ('$nome_medico', '$especialidade', '$nome_paciente', '$idade_paciente', '$cartao_sus', '$cpf', '$data', '$hora')";

    if (mysqli_query($connect, $sql));
        $_SESSION['mensagem'] = "Cadastrado com sucesso!";
        header('Location: ../agendamento/vizualizar.php');
    else :
        $_SESSION['mensagem'] = "Error ao cadastrar!";
        header('Location: ../agendamento/vizualizar.php');
    

endif;
