<?php

$host = "localhost";
$user = "root";
$pass = "";
$dbname = "fad_veiculos";
$port = 3306;

try {
    $conn = new PDO("mysql:host=$host;port=$port;dbname="  .  $dbname, $user, $pass);
    
}catch(Exception $ex){
    echo "Erro de conexão!";
}