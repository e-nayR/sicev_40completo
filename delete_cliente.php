<?php
session_start();

include("../conexao.php");

$id = $_POST['id'];
$delete_clientes = mysqli_query($conn, "DELETE FROM clientes WHERE id = '$id'");

if(mysqli_affected_rows($conn)){?>
    <script>
        alert('Cliente excluido com sucesso!!')
        window.location = "../dashboard.php"
    </script>
<?php } else { ?>

<script>
    alert('Erro!')
</script>

<?php
}
?>