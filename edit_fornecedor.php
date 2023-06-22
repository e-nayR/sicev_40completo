<?php
session_start();

include("../conexao.php");

$id = $_POST['id'];
$nome = $_POST['edit_nome'];
$email = $_POST['edit_email'];
$telefone = $_POST['edit_telefone'];
$cnpj = $_POST['edit_cnpj'];
$cep = $_POST['edit_cep'];

$update_fornecedor = mysqli_query($conn, "UPDATE fornecedor set
nome = '$nome',
email = '$email',
telefone = '$telefone',
cnpj = '$cnpj',
cep = '$cep'
WHERE id = '$id'
");

if(mysqli_affected_rows($conn)){?>

    <script>
         alert("Fornecedor editado com sucesso!");
         window.location = "../fornecedor.php"
    </script>
   
<?php
} else { ?>

        <script>
            alert("Falha ao editar Fornecedor!")
            window.location = "../fornecedor.php"
        </script>
      
<?php
}
?>