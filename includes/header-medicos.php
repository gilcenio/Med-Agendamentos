<?php

include_once '../includes/message.php';


?>

<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <title>Sistema de cadastro e agendamento</title>
    <!--Import Google Icon Font-->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <!--Import materialize.css-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">

    <!--Let browser know website is optimized for mobile-->
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <link rel="stylesheet" href="/css/header.css">
</head>

<body>

    <nav>
        <div style="padding-left: 10px;" class="nav-wrapper">
            <a href="#" class="brand-logo">Sistema de Cadastro</a>
            <ul id="nav-mobile" class="right hide-on-med-and-down">
            </ul>
        </div>
    </nav>

    <div style="background-color: #ef6e73; color: white;" class="w3-sidebar w3-bar-block w3-collapse w3-card w3-animate-left" style="width:200px;" id="mySidebar">
        <h4><a href="../index.php" class="w3-bar-item w3-button">Home</a></h4>
        
        <button class="dropdown-btn">Pacientes
            <i class="fa fa-caret-down"></i>
        </button>
        <div class="dropdown-container">
            <li><a href="../adicionar.php">Cadastrar</a></li>
            <li><a href="../pacientes.php">Vizualizar</a></li>
        </div>
        <button class="dropdown-btn">Médicos
            <i class="fa fa-caret-down"></i>
        </button>
        <div class="dropdown-container">
            <li><a href="/medicos/adicionar-medicos.php">Cadastrar</a></li>
            <li><a href="/medicos/index-medicos.php">Vizualizar</a></li>
        </div>
        <button class="dropdown-btn">Agendamentos
            <i class="fa fa-caret-down"></i>
        </button>
        <div class="dropdown-container">
            <li><a href="/agendamento/agendar.php">Cadastrar</a></li>
            <li><a href="/agendamento/vizualizar.php">Vizualizar</a></li>
        </div>
    </div>

    