<?php
session_start();

include("../conexao.php");

$id = $_POST['id'];
$nome = $_POST['edit_nome'];
$funcao = $_POST['edit_funcao'];
$telefone = $_POST['edit_telefone'];
$email = $_POST['edit_email'];
$senha = $_POST['edit_senha'];

$update_funcionario = mysqli_query($conn, "UPDATE funcionario set
nome = '$nome',
funcao = '$funcao',
telefone = '$telefone',
email = '$email',
senha = '$senha'
WHERE id = '$id'
");

if(mysqli_affected_rows($conn)){?>

    <script>
         alert("Fornecedor editado com sucesso!");
         window.location = "../funcionario.php"
    </script>
   
<?php
} else { ?>

        <script>
            alert("Falha ao editar Fornecedor!")
            window.location = "../funcionario.php"
        </script>
      
<?php
}
?>