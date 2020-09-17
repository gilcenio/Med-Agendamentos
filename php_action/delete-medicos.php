<?php
session_start();

require_once 'db_connect.php';

if (isset($_POST['btn-deletar'])):
    $id = mysqli_escape_string($connect, $_POST['id']);

    $sql = "DELETE FROM profissionais WHERE id = '$id'";

    if (mysqli_query($connect, $sql));
        $_SESSION['mensagem'] = "Deletado com sucesso!";
        header('Location: ../medicos/index-medicos.php');
    else :
        $_SESSION['mensagem'] = "Erro ao deletar!";
        header('Location: ../medicos/index-medicos.php');
    

endif;
