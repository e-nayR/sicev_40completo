<?php
    session_start();
    //var_dump($_POSTs);

    include("../conexao.php");

    $nome = $_POST ['nome'];
    $email = $_POST ['email'];
    $telefone = $_POST ['telefone'];
    $cnpj = $_POST ['cnpj'];
    $cep = $_POST ['cep'];

    $insert_fornecedor = mysqli_query($conn, "INSERT INTO fornecedor
    (
    nome,
    email,
    telefone,
    cnpj,
    cep

    )

    VALUES

    (
    '$nome',
    '$email',
    '$telefone',
    '$cnpj',
    '$cep'
    )
    
    ");

    if(mysqli_insert_id($conn)){?>

        <script>
            alert("Fornecedor cadastrado com sucesso!");
            window.location = "../dashboard.php"
        </script>

    <?php
    }else{?>

        <script>
            alert("Falha ao cadastrar o fornecedor!");
            window.location = "../fornecedor.php"
        </script>

    <?php
    }
 ?>