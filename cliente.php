<?php
    
    include("conexao.php");
    $select_clientes = mysqli_query($conn, "SELECT * FROM clientes");

?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.3/font/bootstrap-icons.css">
    <script src="https://kit.fontawesome.com/ba0161889c.js" crossorigin="anonymous"></script>
    <script src="js/cliente.js" defer></script>
    <link rel="stylesheet" href="css/cliente.css">
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
                <h2>Dashboard | Cliente</h2>
                <hr>
                <p><i class="bi bi-house-door"></i> / Dashboard SICEV</p>
            </div>
            <div class="details">
                <div class="Suppliers">
                    <div class="cardHeader">
                        <h2>Clientes Cadastrados</h2>
                        <button type="button" class="btn-cad-clie" data-bs-toggle="modal" data-bs-target="#cad-cliente">Cadastrar Cliente</button>
                    </div>
                    <table>
                        <thead>
                            <tr>
                                <td>ID</td>
                                <td>NOME</td>
                                <td>TELEFONE</td>
                                <td>CPF</td>
                                <td>EMAIL</td>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <?php
                                while($clientes = mysqli_fetch_assoc($select_clientes)){
                                ?> 
                                <td><?php echo $clientes['id']?></td>
                                <td><?php echo $clientes['nome']?></td>
                                <td><?php echo $clientes['telefone']?></td>
                                <td><?php echo $clientes['cpf']?></td>
                                <td><?php echo $clientes['email']?></td>
                                <td>
                                    <button type="button" class="btn-editar" data-bs-toggle="modal" 
                                    data-bs-target="#modal-editar"
                                    data-id="<?php echo $clientes['id']?>"
                                    data-nome="<?php echo $clientes['nome']?>"
                                    data-telefone="<?php echo $clientes['telefone']?>"
                                    data-cpf="<?php echo $clientes['cpf']?>"
                                    data-email="<?php echo $clientes['email']?>"><i class="fa-solid fa-pencil"></i></button>

                                    <button type="button" class="btn-excluir" data-bs-toggle="modal" 
                                    data-id="<?php echo $clientes['id']?>"
                                    data-bs-target="#modal-excluir"><i class="fa-regular fa-trash-can"></i></button>

                                    <button type="button" class="btn-infor" data-bs-toggle="modal" 
                                    data-id="<?php echo $clientes['id']?>"
                                    data-nome="<?php echo $clientes['nome']?>"
                                    data-telefone="<?php echo $clientes['telefone']?>"
                                    data-cpf="<?php echo $clientes['cpf']?>"
                                    data-email="<?php echo $clientes['email']?>"data-bs-target="#modal-infor"><i class="fa-sharp fa-solid fa-circle-info"></i></button>
                                </td>
                            </tr>
                            <?php
                            }
                            ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </section>
</body>
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
</html>

        <!-- MODAL CADASTRO CLIENTE-->
<div class="modal fade" id="cad-cliente" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-xl">
      <div class="modal-content">
        <div class="modal-header">
          <h1 class="modal-title fs-5" id="exampleModalLabel">Cadastro Cliente</h1>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
        <form action="actions/cad_cliente.php" method="POST">
          <div class="row">
            <div class="col form-floating mb-3">
                <input type="text" class="form-control" id="floatingInputnome" name="nome" placeholder="Nome Completo..."  aria-label="Nome Completo...">
                <label for="floatingInput" style="margin-left: 10px;">Nome Completo:</label>
            </div>
            <div class="col form-floating mb-3">
                <input type="text" class="form-control cad-cliente-tel" id="floatingInputtelefone" name="telefone" placeholder="Telefone..." aria-label="Telefone..." autocomplete="off" maxlength="15">
                <label for="floatingInput" style="margin-left: 10px;">Telefone:</label>
            </div>
          </div>
          <div class="row">
            <div class="col form-floating mb-3">
                <input type="text" class="form-control cad-cliente-cpf" id="floatingInputcpf" name="cpf" placeholder="CPF..." aria-label="CPF..." autocomplete="off" maxlength="14">
                <label for="floatingInput" style="margin-left: 10px;">CPF:</label>
            </div>
            <div class="col form-floating mb-3">
                <input type="text" class="form-control" id="floatingInputemail" name="email" placeholder="Email..." aria-label="Email...">
                <label for="floatingInput" style="margin-left: 10px;">Email:</label>
            </div>
          </div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Fechar</button>
          <button type="submit" class="btn btn-primary">Cadastrar</button>
        </div>
        </form>
      </div>
    </div>
</div>
        <!-- MODAL EDITAR-->  
<div class="modal fade" id="modal-editar" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-xl">
      <div class="modal-content">
        <div class="modal-header">
          <h1 class="modal-title fs-5" id="exampleModalLabel">Editar</h1>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
            <form action="actions/edit_cliente.php" method="post">
            <input type="hidden" class ="form-control" id="input_id" name="id" required>
            <div class="row">
                <div class="col form-floating mb-3">
                    <input type="text" class="form-control" id="input_nome_edit" name="edit_nome" placeholder="Nome Completo..." aria-label="Nome Completo..">
                    <label for="floatingInput" style="margin-left: 10px;">Nome Completo:</label>
                </div>
                <div class="col form-floating mb-2">
                    <input type="text" class="form-control" id="input_telefone_edit" name="edit_telefone" placeholder="Telefone.." aria-label="Telefone.." autocomplete="off" maxlength="15">
                    <label for="floatingInput" style="margin-left: 10px;">Telefone:</label>
                </div>
            </div>
            <div class="row" style="margin-top: 5px;">
                <div class="col form-floating mb-2">
                    <input type="text" class="form-control" id="input_cpf_edit" name="edit_cpf" placeholder="CPF.." aria-label="CPF.." autocomplete="off" maxlength="14">
                    <label for="floatingInput" style="margin-left: 10px;">CPF:</label>
                </div>
                <div class="col form-floating mb-2">
                    <input type="text" class="form-control" id="input_email_edit" name="edit_email" placeholder="Email.." aria-label="Email..">
                    <label for="floatingInput" style="margin-left: 10px;">Email:</label>
                </div>
            </div>             
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancelar</button>
          <button type="submit" class="btn btn-success">Salvar</button>
        </div>
        </form>
      </div>
    </div>
</div>

        <!-- MODAL EXCLUIR-->
<div class="modal fade" id="modal-excluir" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
      <div class="modal-content">
        <div class="modal-header">
          <h1 class="modal-title fs-5" id="exampleModalLabel">Excluir</h1>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
            <form action="actions/delete_cliente.php" method="post">
                <input type="hidden" class ="form-control" id="input_id_delete" name="id" required>
                Deseja excluir este cliente..?
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Fechar</button>
          <button type="submit" class="btn btn-danger">Excluir</button>
        </div>
            </form>
      </div>
    </div>
</div>

    <!-- MODAL INFORMAÇÕES-->
<div class="modal fade" id="modal-infor" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-xl">
        <div class="modal-content">
        <div class="modal-header">
            <h1 class="modal-title fs-5" id="exampleModalLabel">Editar</h1>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
            <input type="hidden" class ="form-control" id="input_id_infor" name="id" required>
            <div class="row">
                <div class="col form-floating mb-3">
                    <input type="text" class="form-control" id="floatingInputDisablednome" placeholder="Nome Completo..." aria-label="Nome Completo.." disabled>
                    <label for="floatingInputDisabled" style="margin-left: 10px;">Nome Completo:</label>
                </div>
                <div class="col form-floating mb-2">
                    <input type="text" class="form-control" id="floatingInputDisabledtelefone" placeholder="Telefone.." aria-label="Telefone.." disabled>
                    <label for="floatingInputDisabled" style="margin-left: 10px;">Telefone:</label>
                </div>
            </div>
            <div class="row" style="margin-top: 5px;">
                <div class="col form-floating mb-2">
                    <input type="text" class="form-control" id="floatingInputDisabledcpf" placeholder="CPF.." aria-label="CPF.." disabled>
                    <label for="floatingInputDisabled" style="margin-left: 10px;">CPF:</label>
                </div>
                <div class="col form-floating mb-2">
                    <input type="text" class="form-control" id="floatingInputDisabledemail" placeholder="Email.." aria-label="Email.." disabled>
                    <label for="floatingInputDisabled" style="margin-left: 10px;">Email:</label>
                </div>
            </div>
        </div>
        <div class="modal-footer">
            <button type="button" class="btn btn-primary" data-bs-dismiss="modal">Fechar</button>
        </div>
        </div>
    </div>
</div>

<script>
    var ModalExcluir = document.getElementById('modal-excluir')
    ModalExcluir.addEventListener('show.bs.modal', function (event){

     var button = event.relatedTarget

     var id = button.getAttribute('data-id')

     document.getElementById('input_id_delete').value = id;
})
</script>

<script>
    var ModalEditar = document.getElementById('modal-editar')
    ModalEditar.addEventListener('show.bs.modal', function (event){

    var button = event.relatedTarget
    
    var id = button.getAttribute('data-id')
    var nome = button.getAttribute('data-nome')
    var email = button.getAttribute('data-email')
    var telefone = button.getAttribute('data-telefone')
    var cpf = button.getAttribute('data-cpf')

    var modalTitle = ModalEditar.querySelector('.modal-title')

    modalTitle.textContent = 'Editar Cliente: ' + nome
    document.getElementById('input_id').value = id;
    document.getElementById('input_nome_edit').value = nome;
    document.getElementById('input_email_edit').value = email;
    document.getElementById('input_telefone_edit').value = telefone;
    document.getElementById('input_cpf_edit').value = cpf;

}) 
</script>

<script>
    var ModalInfor = document.getElementById('modal-infor')
    ModalInfor.addEventListener('show.bs.modal', function (event){

    var button = event.relatedTarget
    
    var id = button.getAttribute('data-id')
    var nome = button.getAttribute('data-nome')
    var email = button.getAttribute('data-email')
    var telefone = button.getAttribute('data-telefone')
    var cpf = button.getAttribute('data-cpf')

    var modalTitle = ModalInfor.querySelector('.modal-title')

    modalTitle.textContent = 'Informações do fornecedor: ' + nome
    document.getElementById('input_id_infor').value = id;
    document.getElementById('floatingInputDisablednome').value = nome;
    document.getElementById('floatingInputDisabledemail').value = email;
    document.getElementById('floatingInputDisabledtelefone').value = telefone;
    document.getElementById('floatingInputDisabledcpf').value = cpf;
}) 
</script>