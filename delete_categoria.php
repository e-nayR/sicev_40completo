<?php
session_start();

include("../conexao.php");

$id = $_POST['id_delete'];
$delete_categoria = mysqli_query($conn, "DELETE FROM categoria WHERE id = '$id'");

if(mysqli_affected_rows($conn)){?>
    <script>
        alert('Categoria excluido com sucesso!!')
        window.location = "../dashboard.php"
    </script>
<?php } else { ?>

<script>
    alert('Erro!')
</script>

<?php
}
?>