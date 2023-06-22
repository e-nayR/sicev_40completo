<?php
include("./conexao.php");

//var_dump($_POST);

$ped0 = $_POST['ped'];
$prod0 = $_POST['prod'];
$qnt = $_POST['qnt'];
$preco = $_POST['preco'];

//var_dump($produto);

# resgatando o id do pedido 
$ped1 = "SELECT id from pedido where id='$ped0'";
$ped2 = mysqli_query($conn, $ped1);
$id_ped = mysqli_fetch_array($ped2);
$ped3 = $id_ped['id'];

# extraindo o id do produto
$prod1 = "SELECT id from produto where cod_barras='$prod0'";
$prod2 = mysqli_query($conn, $prod1);
$id_prod = mysqli_fetch_array($prod2);
$prod3 = $id_prod['id'];

$z = "INSERT INTO itens_pedido(pedido, quantidade, preco, status, produto) values('$ped3', '$qnt','$preco', '','$prod3')";
$final = mysqli_query($conn, $z );

die(json_encode($final));

?>
