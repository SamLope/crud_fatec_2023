<?php

$host = "localhost"; // nome do servidor MySQL
$user = "id21573362_crudfatecsam"; // usuário do MySQL
$pass = "12345Fatec*"; // senha do MySQL
$dbname = "id21573362_crudfatecsam"; // nome do banco de dados 

// Conexão com o banco de dados MySQL
$conn = mysqli_connect($host, $user, $pass, $dbname);

// Verifica se houve erro na conexão
if (!$conn) {
    die("Falha na conexão: " . mysqli_connect_error());
}
