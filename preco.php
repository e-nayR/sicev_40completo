<?php
include("./conexao.php");


$cod_barra = $_POST['cod_barra'];

$preco = mysqli_query($conn, "SELECT fp.preco from fornecedor_produto fp, produto p where fp.produto = p.id and p.cod_barras='$cod_barra'");
$preco = mysqli_fetch_assoc($preco);

$cod = mysqli_query($conn, "SELECT cod_barras from produto");
$cod = mysqli_fetch_assoc($cod);

if ($cod_barra == null || "") {
} else{
    if ($cod_barra != $cod) {
        echo implode($preco);
    } else {
        
    }
}
?>

