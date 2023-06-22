<?php
    include("conexao.php");

    $select_funcionarios = mysqli_query($conn,"SELECT * FROM funcionario");

?>
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
        <script src="js/funcionario.js" defer></script>
        <link rel="stylesheet" href="css/funcionario.css">
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
                    <h2>Dashboard | Funcionários</h2>
                    <hr>
                    <p><i class="bi bi-house-door"></i> / Dashboard SICEV</p>
                </div>
                <div class="details">
                    <div class="Suppliers">
                        <div class="cardHeader">
                            <h2>Funcionários</h2>
                            <button type="button" class="btn-cad-funcio" data-bs-toggle="modal" data-bs-target="#cad-funcio">Cadastrar Funcionário</button>
                        </div>
                        <table>
                            <thead>
                                <tr>
                                    <td>ID</td>
                                    <td>NOME</td>
                                    <td>TELEFONE</td>
                                    <td>FUNÇÃO</td>
                                    <td>EMAIL</td>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                while($funcionario = mysqli_fetch_assoc($select_funcionarios)){
                                ?>
                                <tr>
                                    <td><?php echo $funcionario['id']?></td>
                                    <td><?php echo $funcionario['nome']?></td>
                                    <td><?php echo $funcionario['telefone']?></td>
                                    <td><?php echo $funcionario['funcao']?></td>
                                    <td><?php echo $funcionario['email']?></td>
                                    <td>
                                        <button type="button" class="btn-editar"  
                                        data-bs-toggle="modal" 
                                        data-id="<?php echo $funcionario['id']?>"
                                        data-nome="<?php echo $funcionario['nome']?>"
                                        data-telefone="<?php echo $funcionario['telefone']?>"
                                        data-funcao="<?php echo $funcionario['funcao']?>"
                                        data-email="<?php echo $funcionario['email']?>"
                                        data-bs-target="#modal-editar"><i class="fa-solid fa-pencil"></i></button>

                                        <button type="button" class="btn-excluir" 
                                        data-bs-toggle="modal" 
                                        data-id="<?php echo $funcionario['id'] ?>"
                                        data-bs-target="#modal-excluir"><i class="fa-regular fa-trash-can"></i></button>

                                        <button type="button" class="btn-infor" 
                                        data-bs-toggle="modal" 
                                        data-bs-target="#modal-infor"
                                        data-id="<?php echo $funcionario['id']?>"
                                        data-nome="<?php echo $funcionario['nome']?>"
                                        data-telefone="<?php echo $funcionario['telefone']?>"
                                        data-funcao="<?php echo $funcionario['funcao']?>"
                                        data-email="<?php echo $funcionario['email']?>"><i class="fa-sharp fa-solid fa-circle-info"></i></button>
                                        
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
        <!--  MODAL CADASTRO FUNCIONARIO  -->
<div class="modal fade" id="cad-funcio" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-xl">
      <div class="modal-content">
        <div class="modal-header">
          <h1 class="modal-title fs-5" id="exampleModalLabel">Cadastro Funcionário</h1>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
            <form action="actions/cad_funcionario.php" method="POST">
            <div class="row">
                <div class="col form-floating mb-3">
                    <input type="text" class="form-control" id="floatingInput" name="nome" placeholder="Nome Completo..." aria-label="Nome Completo..">
                    <label for="floatingInput" style="margin-left: 10px;">Nome Completo:</label>
                </div>
                <div class="col form-floating mb-3">
                    <select class="form-select" aria-placeholder="Função" name="funcao">
                        <option selected disabled>Função Do Funcionário</option>
                        <option value="1">1</option>
                        <option value="2">2</option>
                        <option value="3">3</option>
                    </select>
                    <label for="floatingSelect" style="margin-left: 10px;">Selecione</label>
                </div>
            </div>
            <div class="row">
                <div class="col form-floating">
                    <input type="text" class="form-control cad-funcionario-tel" id="floatingInput" name="telefone" placeholder="Telefone..." aria-label="Telefone..." autocomplete="0ff" maxlength="15">
                    <label for="floatingInput" style="margin-left: 10px;">Telefone:</label>
                </div>
                <div class="col form-floating">
                    <input type="text" class="form-control" id="floatingInput" placeholder="Email.." name="email" aria-label="Email..">
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

        <!--  MODAL EDITAR  -->
<div class="modal fade" id="modal-editar" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-xl">
      <div class="modal-content">
        <div class="modal-header">
          <h1 class="modal-title fs-5" id="exampleModalLabel">Editar</h1>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
            <form action="actions/edit_funcionario.php" method="post">
                <input type="hidden" name="id" id="input_id_edit">
            <div class="row">
                <div class="col form-floating mb-3">
                    <input type="text" class="form-control" id="floatingInputEditnome" name="edit_nome" placeholder="Nome Completo..." aria-label="Nome Completo..">
                    <label for="floatingInput" style="margin-left: 10px;">Nome Completo:</label>
                </div>
                <div class="col form-floating mb-3">
                    <select class="form-select" aria-placeholder="Função" id="floatingInputEditfuncao" name="edit_funcao">
                        <option selected>Função Do Funcionário</option>
                        <option value="1">1</option>
                        <option value="2">2</option>
                        <option value="3">3</option>
                    </select>
                    <label for="floatingSelect" style="margin-left: 10px;">Selecione</label>
                </div>
            </div>
            <div class="row">
                <div class="col form-floating">
                    <input type="text" class="form-control cad-funcionario-tel" id="floatingInputEdittelefone" name="edit_telefone" placeholder="Telefone..." aria-label="Telefone..." autocomplete="0ff" maxlength="15">
                    <label for="floatingInput" style="margin-left: 10px;">Telefone:</label>
                </div>
                <div class="col form-floating">
                    <input type="text" class="form-control" id="floatingInputEditemail" name="edit_email" placeholder="Email.." aria-label="Email..">
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

         <!--  MODAL EXCLUIR  -->
<div class="modal fade" id="modal-excluir" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
      <div class="modal-content">
        <div class="modal-header">
          <h1 class="modal-title fs-5" id="exampleModalLabel">Excluir</h1>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
            <form action="actions/delete_funcionario.php" method="post">
                <input type="hidden" class="form-control" id="input_id_delete" name="id" required>
                Deseja excluir este funcionário..?
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Fechar</button>
          <button type="submit" class="btn btn-danger">Excluir</button>
        </div>
        </form>
      </div>
    </div>
</div>

        <!--  MODAL INFORMAÇÕES  -->
<div class="modal fade" id="modal-infor" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-xl">
      <div class="modal-content">
        <div class="modal-header">
          <h1 class="modal-title fs-5" id="exampleModalLabel">Editar</h1>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
            <input type="hidden" id="input_id_infor" name="id">
            <div class="row">
                <div class="col form-floating mb-3">
                    <input type="text" class="form-control" id="floatingInputDisablednome" placeholder="Nome Completo..." aria-label="Nome Completo.." disabled>
                    <label for="floatingInputDisabled" style="margin-left: 10px;">Nome Completo:</label>
                </div>
                <div class="col form-floating mb-3">
                    <select class="form-select" aria-placeholder="Função" id="floatingInputDisabledfuncao" disabled>
                        <option selected>Função Do Funcionário</option>
                        <option value="1">1</option>
                        <option value="2">2</option>
                        <option value="3">3</option>
                    </select>
                    <label for="floatingSelect" style="margin-left: 10px;">Selecione</label>
                </div>
            </div>
            <div class="row">
                <div class="col form-floating">
                    <input type="text" class="form-control cad-funcionario-tel" id="floatingInputDisabledtelefone" placeholder="Telefone..." aria-label="Telefone..." autocomplete="0ff" maxlength="15" disabled>
                    <label for="floatingInputDisabled" style="margin-left: 10px;">Telefone:</label>
                </div>
                <div class="col form-floating">
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
var ModalEditar = document.getElementById('modal-editar')
ModalEditar.addEventListener('show.bs.modal', function (event){

    var button = event.relatedTarget
    
    var id = button.getAttribute('data-id')
    var nome = button.getAttribute('data-nome')
    var funcao = button.getAttribute('data-funcao')
    var telefone = button.getAttribute('data-telefone')
    var email  = button.getAttribute('data-email')

    var modalTitle = ModalEditar.querySelector('.modal-title')

    modalTitle.textContent = 'Editar Funcionário: ' + nome
    document.getElementById('input_id_edit').value = id;
    document.getElementById('floatingInputEditnome').value = nome;
    document.getElementById('floatingInputEditfuncao').value = funcao;
    document.getElementById('floatingInputEdittelefone').value = telefone;
    document.getElementById('floatingInputEditemail').value = email;

}) 
</script>

<script>
var ModalExcluir = document.getElementById('modal-excluir')
ModalExcluir.addEventListener('show.bs.modal', function (event){

     var button = event.relatedTarget

     var id = button.getAttribute('data-id')

     document.getElementById('input_id_delete').value = id;
})
</script>

<script>
    var ModalInfor = document.getElementById('modal-infor')
    ModalInfor.addEventListener('show.bs.modal', function (event){

    var button = event.relatedTarget
    
    var id = button.getAttribute('data-id')
    var nome = button.getAttribute('data-nome')
    var telefone = button.getAttribute('data-telefone')
    var funcao = button.getAttribute('data-funcao')
    var email = button.getAttribute('data-email')

    var modalTitle = ModalInfor.querySelector('.modal-title')

    modalTitle.textContent = 'Informações do funcionário: ' + nome
    document.getElementById('input_id_infor').value = id;
    document.getElementById('floatingInputDisablednome').value = nome;
    document.getElementById('floatingInputDisabledtelefone').value = telefone;
    document.getElementById('floatingInputDisabledfuncao').value = funcao;
    document.getElementById('floatingInputDisabledemail').value = email;
}) 
</script>