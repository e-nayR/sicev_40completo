<?php
    session_start();
    //var_dump($_POST);

    include("../conexao.php");

    $usuario = $_POST['usuario'];
    $senha = $_POST['senha'];

    $select_usuarios = mysqli_query($conn, "SELECT * FROM usuarios where usuario = '$usuario'");
    $usuarios = mysqli_fetch_assoc($select_usuarios);

    //var_dump($usuarios);

    if(($usuario == $usuarios['usuario']) && ($senha == $usuarios['senha'])) {

       $_SESSION['acesso'] = 1;

        header('location: ../dashboard.php'); 

    }else{

        header('location: ../login.php');
    }
 ?>