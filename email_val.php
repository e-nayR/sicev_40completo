<?php

include("./conexao.php");

$fornecedor = $_POST['forn'];
$fornecedor = mysqli_query($conn, "SELECT * FROM fornecedor");

?>
<option nulo="vazio">Selecione...</option>
<?php while ($fornecedor1 = mysqli_fetch_array($fornecedor)) { ?> <option name="<?php echo $fornecedor1['id']; ?>"><?php echo $fornecedor1['nome']; ?> - <?php echo $fornecedor1['email']; ?></option> <?php } ?>