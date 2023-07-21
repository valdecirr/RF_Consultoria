<?php

$dbHost = 'localhost';
$dbUsername = 'root';
$dbPassword = '';
$dbName = 'rfconsultoria';

// $conexao = new mysqli($dbHost, $dbUsername, $dbPassword, $dbName);

$conexao = mysqli_connect($dbHost, $dbUsername, $dbPassword, $dbName);


// if ($conexao->connect_error) {
//     die("Conexão falhou: " . $conexao->connect_error);
// }else{
//     echo "Conexão realizada com sucesso";
// }


?>