<link rel="stylesheet" href="css/pedidos.css">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
<script src="https://code.jquery.com/jquery-3.6.3.js"></script>
<?php
include("./conexao.php");
//var_dump($_POST);

$ped0 = $_POST['ped'];
$ped1 = mysqli_query($conn, "SELECT fun.nome, forn.nome, p.id, data_pedido from funcionario fun, fornecedor forn, pedido p  where fun.id= p.funcionario and forn.id=p.fornecedor and p.id='$ped0' ;");
?>
<tr><?php while ($ped2 = mysqli_fetch_array($ped1)){ ?>
    <th scope="row"><?php echo $ped2["id"]; ?></th>
    <td><?php echo $ped2["data_pedido"]; ?></td>
    <td><?php echo $ped2["0"]; ?></td>
    <td><?php echo $ped2["nome"]; }?></td>
</tr>