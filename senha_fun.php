<?php
include("./conexao.php");

$funcionario = $_POST['fun'];
$senha = $_POST['senha'];

$funcionario = mysqli_query($conn, "SELECT senha FROM funcionario where id= '$funcionario'");
$funcionario = mysqli_fetch_assoc($funcionario);

if ($senha == $funcionario['senha']) {
    die('senha valida');
} else {
    die('senha invalida');
}
