<?php

//var_dump($_POST);
include("./conexao.php");

$cod_barra = $_POST['cod_barra'];

$produto_cod = mysqli_query($conn, "SELECT nome from produto where cod_barras='$cod_barra'");
$produto = mysqli_fetch_assoc($produto_cod);

$existe = mysqli_query($conn, "SELECT cod_barras from produto");
$existe = mysqli_fetch_assoc($existe);


if ($produto !== null) {
    echo implode($produto);
} else {
    if ($produto == null) {
        echo ("Preencha esse campo com um código válido!");
    } else {
        echo ("Insira um produto cadastrado!");
    }
}
