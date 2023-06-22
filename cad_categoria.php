<?php
    session_start();
    include('../conexao.php');

    $nome_categoria = $_POST['nome_categoria'];

    $insert_categoria = mysqli_query($conn, "INSERT INTO categoria

    (

    nome

    )

    VALUES

    (

    '$nome_categoria'
    
    )

");

    if(mysqli_insert_id($conn)){?>

        <script>
            alert("Categoria cadastrado com sucesso!");
            window.location = "../categoria.php"
        </script>

    <?php
    }else{?>

        <script>
            alert("Falha ao cadastrar o categoria!");
            window.location = "../categoria.php"
        </script>

    <?php
    }
?>