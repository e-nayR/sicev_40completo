<?php

$servername = "localhost";
$database = "sicev_mercado";
$username = "root";
$password = "";

// Criar conexão
$conn = mysqli_connect($servername, $username, $password, $database);

// Checkar conexão
if (!$conn) {
    die("Erro na conexão!: " . mysqli_connect_error());
}

//echo "Conectado!";