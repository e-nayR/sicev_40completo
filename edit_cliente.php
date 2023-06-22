<?php
    session_start();
    
    include("../conexao.php");
    
    $id = $_POST['id'];
    $nome = $_POST['edit_nome'];
    $email = $_POST['edit_email'];
    $telefone = $_POST['edit_telefone'];
    $cpf = $_POST['edit_cpf'];
    
    $update_cliente = mysqli_query($conn, "UPDATE clientes set
    nome = '$nome',
    telefone = '$telefone',
    cpf = '$cpf',
    email = '$email'
    WHERE id = '$id'
    ");

    if(mysqli_affected_rows($conn)){?>
    
        <script>
             alert("Cliente editado com sucesso!");
             window.location = "../cliente.php"
        </script>
       
    <?php
    } else { ?>
    
            <script>
                alert("Falha ao editar Cliente!")
                window.location = "../cliente.php"
            </script>
          
<?php
}
?>