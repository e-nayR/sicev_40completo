<?php
session_start();

include("../conexao.php");

$id = $_POST['id_edit'];
$cod_barras = $_POST ['cod_barras'];
$nome_produto = $_POST['nome_produto'];
$categoria = $_POST['categoria'];
$preco_compra = $_POST['preco_compra'];
$preco_venda = $_POST['preco_venda'];

$update_produto = mysqli_query($conn, "UPDATE produto set

cod_barras = '$cod_barras',
nome = '$nome_produto',
categoria = '$categoria',
preco_compra = '$preco_compra',
preco_venda = '$preco_venda'
WHERE id = '$id'
");

if(mysqli_affected_rows($conn)){?>

    <script>
         alert("Produto editado com sucesso!");
         window.location = "../produto.php"
    </script>
   
<?php
} else { ?>

        <script>
            alert("Falha ao editar Produto!")
            window.location = "../produto.php"
        </script>
      
<?php
}
?>