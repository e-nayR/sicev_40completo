<?php
session_start();

include("../conexao.php");

$id = $_POST['id'];
$delete_funcionario = mysqli_query($conn, "DELETE FROM funcionario WHERE id = '$id'");

if(mysqli_affected_rows($conn)){?>
    <script>
        alert('Funcionário excluido com sucesso!!')
        window.location = "../dashboard.php"
    </script>
<?php } else { ?>

<script>
    alert('Erro!')
</script>

<?php
}
?>