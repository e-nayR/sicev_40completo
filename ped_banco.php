<?php
include("./conexao.php");
//var_dump($_POST);

$fornecedor = $_POST['forn'];
$funcionario = $_POST['fun'];

$ped = "INSERT INTO pedido(id, data_pedido, funcionario, fornecedor) values('',now(),'$funcionario','$fornecedor')";
$result = mysqli_query($conn, $ped);
$id = mysqli_insert_id($conn);

if ($result) {
    die(json_encode($id));
} else {
    mysqli_query($conn, "DELETE id from pedido where id='$id'");
}
