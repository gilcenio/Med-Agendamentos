<?php

$servername = "108.167.132.190";
$username = "amador94_master";
$password = "1793501996Gilceniosantos1996@";
$db_name = "amador94_projeto";

$connect = mysqli_connect($servername, $username, $password, $db_name);
mysqli_set_charset($connect, "utf8");

if(mysqli_connect_error()):
    echo "Erro na conexão: ".mysqli_connect_error();
endif;
?>