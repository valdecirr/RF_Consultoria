<?php

$dbHost = 'Localhost';
$dbUsername = 'root';
$dbPassword = 'root';
$dbName = 'csv_db 5';

$conexao = new mysqli($dbHost, $dbUsername, $dbPassword, $dbName);

// if ($conexao->connect_error) {
//     die("Conexão falhou: " . $conexao->connect_error);
// }else{
//     echo "Conexão realizada com sucesso";
// }


?>