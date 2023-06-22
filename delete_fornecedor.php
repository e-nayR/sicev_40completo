<?php
session_start();

include("../conexao.php");

$id = $_POST['id'];
$delete_fornecedor = mysqli_query($conn, "DELETE FROM fornecedor WHERE id = '$id'");

if(mysqli_affected_rows($conn)){?>
    <script>
        alert('Fornecedor excluido com sucesso!!')
        window.location = "../dashboard.php"
    </script>
<?php } else { ?>

<script>
    alert('Erro!')
</script>

<?php
}
?>