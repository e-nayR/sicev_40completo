<?php
    include("conexao.php");

    $select_fornecedor = mysqli_query($conn, "SELECT * FROM fornecedor");
    $cont_fornecedor = mysqli_num_rows($select_fornecedor);
    $select_cliente = mysqli_query($conn, "SELECT * FROM clientes");
    $cont_cliente = mysqli_num_rows($select_cliente);
    $select_funcionario = mysqli_query($conn, "SELECT * FROM funcionario");
    $cont_funcionario = mysqli_num_rows($select_funcionario);
    $select_produto = mysqli_query($conn, "SELECT * FROM produto");
    $cont_produto = mysqli_num_rows($select_produto);
    $select_categoria = mysqli_query($conn, "SELECT * FROM categoria");
    $cont_categoria = mysqli_num_rows($select_categoria);
    
?>
<link rel="stylesheet" href="css/cards.css">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
            integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.3/font/bootstrap-icons.css">
        <div class="box-info">
                    <div class="box-info-single">
                        <div class="info-text">
                            <p><?php echo $cont_fornecedor ?></p>
                            <h3>Total De Fornecedores</h3>
                        </div>
                        <i class="fa-sharp fa-solid fa-truck-fast"></i>
                    </div>
                    <div class="box-info-single">
                        <div class="info-text">
                            <p><?php echo $cont_produto ?></p>
                            <h3>Total De Produtos</h3>
                        </div>
                        <i class="fa-solid fa-boxes-stacked"></i>
                    </div>
                    <div class="box-info-single">
                        <div class="info-text">
                            <p><?php echo $cont_funcionario ?></p>
                            <h3>Total De Funcionários</h3>
                        </div>
                        <i class="bi bi-people-fill"></i>
                    </div>
                    <div class="box-info-single">
                        <div class="info-text">
                            <p><?php echo $cont_cliente ?></p>
                            <h3>Total De Clientes</h3>
                        </div>
                        <i class="fa-solid fa-users-between-lines"></i>
                    </div>
                    <div class="box-info-single">
                        <div class="info-text">
                            <p><?php echo $cont_categoria ?></p>
                            <h3>Total De Categorias</h3>
                        </div>
                        <i class="bi bi-tag-fill"></i>
                    </div>
                    <div class="box-info-single">
                        <div class="info-text">
                            <p>0</p>
                            <h3>Total De Pedidos</h3>
                        </div>
                        <i class="fa-sharp fa-solid fa-cart-shopping"></i>
                    </div>
                </div>
