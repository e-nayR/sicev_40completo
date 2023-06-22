<?php
session_start();

include("../conexao.php");

$id = $_POST['id_delete'];
$delete_produto = mysqli_query($conn, "DELETE FROM produto WHERE id = '$id'");

if(mysqli_affected_rows($conn)){?>
    <script>
        alert('Produto excluido com sucesso!!')
        window.location = "../dashboard.php"
    </script>
    
<?php } else { ?>

<script>
    alert('Erro!')
</script>

<?php
}
?>