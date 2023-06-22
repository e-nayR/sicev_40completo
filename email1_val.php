<?php
include("./conexao.php");

$funcionario = $_POST['fun'];

$funcionario = mysqli_query($conn, "SELECT * FROM funcionario");

?>
<option nulo="vazio">Selecione...</option>
<?php while ($funcionario1 = mysqli_fetch_array($funcionario)) { ?> <option name="<?php echo $funcionario1['id']; ?>">
        <?php echo $funcionario1['nome']; ?> - <?php echo $funcionario1['email']; ?></option> <?php } ?>