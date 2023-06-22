<?php
    session_start();
    //var_dump($_POST);

    include("../conexao.php");

    $nome = $_POST ['nome'];
    $telefone = $_POST ['telefone'];
    $funcao = $_POST ['funcao'];
    $email = $_POST ['email'];
    $senha = $_POST ['senha'];

    $insert_funcionario = mysqli_query($conn, "INSERT INTO funcionario
    (
    nome,
    telefone,
    funcao,
    email,
    senha

    )

    VALUES

    (
    '$nome',
    '$telefone',
    '$funcao',
    '$email',
    '$senha'
    )
    
    ");

    if(mysqli_insert_id($conn)){?>

        <script>
            alert("Funcionario cadastrado com sucesso!");
            window.location = "../dashboard.php"
        </script>

    <?php
    }else{?>

        <script>
            alert("Falha ao cadastrar o funcionario!");
            window.location = "../funcionario.php"
        </script>

    <?php
    }
 ?>