<?php
include("./conexao.php");

$fornecedor = $_POST['forn'];

$id_for = mysqli_query($conn, "SELECT id FROM fornecedor where id='$fornecedor'");
$id_for = mysqli_fetch_array($id_for);


$x = $id_for['id'];
$produto_for = mysqli_query($conn, "SELECT p.id, p.nome, p.cod_barras from produto p, fornecedor_produto fp where p.id = fp.produto and fp.fornecedor_id='$x' order by p.nome asc");

?>
<option>Selecione...</option>
<?php while ($prod_for = mysqli_fetch_array($produto_for)) { ?> <option produto="<?php echo $prod_for['cod_barras']; ?>" name="<?php echo $prod_for['nome']; ?>"><?php echo $prod_for['nome']; ?> - <?php echo $prod_for['cod_barras']; ?></option> <?php } ?>