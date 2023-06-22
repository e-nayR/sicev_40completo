<?php
    session_start();
    //var_dump($_POSTs);

    include("../conexao.php");

    $cod_barras = $_POST ['cod_barras'];
    $nome_produto = $_POST['nome_produto'];
    $categoria = $_POST['categoria'];
    $preco_compra = $_POST['preco_compra'];
    $preco_venda = $_POST['preco_venda'];
    

    $insert_produto = mysqli_query($conn, "INSERT INTO produto
    (
    cod_barras,
    nome,
    categoria,
    preco_compra,
    preco_venda

    )

    VALUES

    (

    '$cod_barras',
    '$nome_produto',
    '$categoria',
    '$preco_compra',
    '$preco_venda'
    
    )
    ");

    if(mysqli_insert_id($conn)){?>

        <script>
            alert("Produto cadastrado com sucesso!");
            window.location = "../dashboard.php"
        </script>

    <?php
    }else{?>

        <script>
            alert("Falha ao cadastrar o produto!");
            window.location = "../fornecedor.php"
        </script>

    <?php
    }
 ?>