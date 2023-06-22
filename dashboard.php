<!DOCTYPE html>
    <html lang="pt-br">

    <head>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <!-- Bootstrap CSS -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
            integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.3/font/bootstrap-icons.css">
        <script src="https://kit.fontawesome.com/ba0161889c.js" crossorigin="anonymous"></script>
        <link rel="stylesheet" href="css/dashboard.css">
        <link rel="icon" href="img/index2.png">
        <title>SICEV | DASHBOARD</title>
    </head>

    <body>
        <header>
            <nav>
                <div class="nav-center">
                    <img src="img/logo2.png" alt="imagem-Logo">
                </div>
                <p>&copy;SICEV</p>
            </nav>
            <div class="bottom"></div>
        </header>

        <section class="main">
            <div class="sidebar">
                <h3 class="h3-sidebar">Navegação</h3>
                <a href="dashboard.php" class="option-sidebar"><i class="fa-sharp fa-solid fa-house"></i>Inicio</a>
                <a href="fornecedor.php" class="option-sidebar"><i class="fa-sharp fa-solid fa-truck"></i>Fornecedor</a>
                <a href="pedidos.php" class="option-sidebar"><i class="fa-solid fa-basket-shopping"></i>Pedidos</a>
                <a href="cliente.php" class="option-sidebar"><i class="fa-solid fa-users-line"></i>Clientes</a>
                <a href="produto.php" class="option-sidebar"><i class="fa-solid fa-box-open"></i>Produtos</a>
                <a href="funcionario.php" class="option-sidebar"><i class="bi bi-people-fill"></i>Funcionários</a>
                <a href="categoria.php" class="option-sidebar"><i class="bi bi-tag-fill"></i>Categoria</a>
                <br>
                <hr>
            </div>
            <div class="content">
                <div class="title-section">
                    <h2>Dashboard | Inicio</h2>
                    <hr>
                    <p><i class="bi bi-house-door"></i> / Dashboard SICEV</p>
                </div>
                <?php
                include('cards.php');
                ?>
            </div>
        </section>
        

    <!-- Optional JavaScript; choose one of the two! -->
        <!-- Option 1: Bootstrap Bundle with Popper -->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
            crossorigin="anonymous"></script>
        <!-- Option 2: Separate Popper and Bootstrap JS -->
        <!--
        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
        -->
    </body>
    </html>