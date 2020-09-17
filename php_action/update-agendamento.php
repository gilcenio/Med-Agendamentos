<?php
session_start();

require_once 'db_connect.php';

if (isset($_POST['btn-editar'])) :

    $nome_medico = mysqli_escape_string($connect, $_POST['nome_medico']);
    $especialidade = mysqli_escape_string($connect, $_POST['especialidade']);
    $nome_paciente = mysqli_escape_string($connect, $_POST['nome_paciente']);
    $idade_paciente = mysqli_escape_string($connect, $_POST['idade_paciente']);
    $cartao_sus = mysqli_escape_string($connect, $_POST['cartao_sus']);
    $cpf = mysqli_escape_string($connect, $_POST['cpf']);
    $data = mysqli_escape_string($connect, $_POST['data']);
    $hora = mysqli_escape_string($connect, $_POST['hora']);
    $id = mysqli_escape_string($connect, $_POST['id']);

    $sql = "UPDATE agendamentos SET nome_medico = '$nome_medico', especialidade = '$especialidade', nome_paciente = '$nome_paciente', 
    idade_paciente = '$idade_paciente', cartao_sus = '$cartao_sus', cpf = '$cpf', data = '$data', hora = '$hora' WHERE id = '$id'";

    if (mysqli_query($connect, $sql));
        $_SESSION['mensagem'] = "Atualizado com sucesso!";
        header('Location: ../agendamento/vizualizar.php');
    else :
        $_SESSION['mensagem'] = "Erro ao atualizar!";
        header('Location: ../agendamento/vizualizar.php');
    

endif;
