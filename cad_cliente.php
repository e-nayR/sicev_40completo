<?php
    session_start();
    include('../conexao.php');

    $nome = $_POST['nome'];
    $telefone = $_POST['telefone'];
    $cpf = $_POST['cpf'];
    $email = $_POST['email'];

    $insert_fornecedor = mysqli_query($conn, "INSERT INTO clientes
    (
    nome,
    telefone,
    cpf,
    email
    )
    VALUES
    (
    '$nome',
    '$telefone',
    '$cpf',
    '$email'
    )
");

    if(mysqli_insert_id($conn)){?>

        <script>
            alert("Cliente cadastrado com sucesso!");
            window.location = "../dashboard.php"
        </script>

    <?php
    }else{?>

        <script>
            alert("Falha ao cadastrar o cliente!");
            window.location = "../fornecedor.php"
        </script>

    <?php
    }
?>