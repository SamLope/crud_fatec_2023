<?php

$host = "localhost"; // nome do servidor MySQL
$user = "id21504730_sam"; // usuário do MySQL
$pass = "Fatec123456*"; // senha do MySQL
$dbname = "id21504730_fatecsam"; // nome do banco de dados 

// Conexão com o banco de dados MySQL
$conn = mysqli_connect($host, $user, $pass, $dbname);

// Verifica se houve erro na conexão
if (!$conn) {
    die("Falha na conexão: " . mysqli_connect_error());
}
