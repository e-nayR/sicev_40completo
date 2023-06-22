    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">
    <script src="https://code.jquery.com/jquery-3.6.3.js"></script>

<?php
include("./conexao.php");
//var_dump($_POST);

$ped0 = $_POST['ped'];
$item = mysqli_query($conn, "SELECT p.nome, ip.quantidade, ip.preco from produto p, itens_pedido ip where ip.produto=p.id and ip.pedido='$ped0';");


?>
<div class= "list">
<table class= "table my-5">
    <tbody>
        <thead>
            <tr>
                <th scope="col">Produto</th>
                <th scope="col">Quantidade</th>
                <th scope="col">Preço</th>
            </tr>
        </thead>
<?php while ($item1 = mysqli_fetch_array($item)) { ?>
        <tr>
            <th scope="row" name="nome"><?php echo $item1["nome"]; ?></th>
            <td name="qnt"><?php echo $item1["quantidade"]; ?></td>
            <td name="valor"><?php echo $item1["preco"]; }?></td>
        </tr>
    </tbody>
</table>
</div>