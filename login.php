<?php
    session_start();

?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.3/font/bootstrap-icons.css">
    <link rel="stylesheet" href="css/login.css">
    <link rel="icon" href="img/Logo-1.png">
    <script src="js/login.js" defer></script>
    <title>Login SICEV</title>
</head>
<body>
    <div class="blob"></div>
    <div class="wrapper">
        <form action="actions/valida_login.php" method="post">
            <h2>Login</h2>
            <div class="input-box">
                <span class="icon"><i class="bi bi-person-fill"></i></span>
                <input type="text" id="usuario-login" name="usuario" required> 
                <label for="Usuário">Usuário</label>
            </div>
            <div class="input-box">
                <span class="icon"><i class="bi bi-lock-fill"></i></span>
                <input type="password" id="senha-login" name="senha" required>
                <label for="Senha">Senha</label>
            </div>
            <button type="submit" >Entrar</button>
            <div class="register-login">
                <p>Ainda não fez seu cadastro?
                <a href="#" onclick="cadinicial()">Clique aqui</a> e faça seu cadastro.</p>
            </div>
        </form>
    </div>
    <?php
            if(isset($_SESSION['erro'])){
                
                echo $_SESSION['erro'];

                session_destroy();

                echo
                '<script>
                setInterval(Refresh, 2000);

                function Refresh() {
                    window.location = "login.php";
                }
                </script>';


            }else{
                
            }
        ?>
</body>
</html>