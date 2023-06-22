<?php
include("./conexao.php");
//var_dump($_POST);

$ped0 = $_POST['ped'];
$del_item = mysqli_query($conn, "DELETE FROM itens_pedido WHERE pedido = '$ped0';");
$del_ped = mysqli_query($conn, "DELETE FROM pedido WHERE id = '$ped0';");

echo $del_ped; // não ta deletando!!!

?>