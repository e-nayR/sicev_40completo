<?php
    
    include("conexao.php");

    $select_fornecedor = mysqli_query($conn,"SELECT * FROM fornecedor");

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
        <script src="https://kit.fontawesome.com/ba0161889c.js" crossorigin="anonymous" defer></script>
        <script src="js/fornecedor.js" defer></script>
        <link rel="stylesheet" href="css/fornecedor.css">
        <link rel="icon" href="img/index2.png">
        <title>SICEV | DASHBOARD | FORNECEDOR</title>
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
                    <h2>Dashboard | Fornecedor</h2>
                    <hr>
                    <p><i class="bi bi-house-door"></i> / Dashboard SICEV</p>
                </div>
                <div class="details">
                <div data-bs-spy="scroll" data-bs-smooth-scroll="true" class="scrollspy-example" tabindex="0">
                    <div class="Suppliers">
                        <div class="cardHeader">
                            <h2>Fornecedores</h2>
                            <button type="button" class="btn-cad-forn" data-bs-toggle="modal" data-bs-target="#cad-forn">Cadastrar Fornecedor</button>
                        </div>
                        <table>
                        <thead>
                            <tr>
                                <td>ID</td>
                                <td>NOME</td>
                                <td>EMAIL</td>
                                <td>TELEFONE</td>
                                <td>CNPJ</td>
                                <td>CEP</td>
                            </tr>
                        </thead>
                        <tbody>
                        <?php
                        while($fornecedor = mysqli_fetch_assoc($select_fornecedor)){
                        ?>
                            <tr>
                                <td><?php echo $fornecedor['id']?></td>
                                <td><?php echo $fornecedor['nome']?></td>
                                <td><?php echo $fornecedor['email']?></td>
                                <td><?php echo $fornecedor['telefone']?></td>
                                <td><?php echo $fornecedor['cnpj']?></td>
                                <td style="text-align: center;"><?php echo $fornecedor['cep']?></td>
                        
                                <td>
                                    <button type="button" class="btn-editar"
                                        data-bs-toggle="modal" data-bs-target="#modal-editar"
                                        data-id="<?php echo $fornecedor['id']?>"
                                        data-nome="<?php echo $fornecedor['nome']?>"
                                        data-email="<?php echo $fornecedor['email']?>"
                                        data-telefone="<?php echo $fornecedor['telefone']?>"
                                        data-cnpj="<?php echo $fornecedor['cnpj']?>"
                                        data-cep="<?php echo $fornecedor['cep']?>"><i class="fa-solid fa-pencil"></i></button>
                                    
                                    <button type="button" class="btn-excluir" 
                                            data-bs-toggle="modal" data-bs-target="#modal-excluir"
                                            data-id="<?php echo $fornecedor['id']?>"><i class="fa-regular fa-trash-can"></i></button>

                                    <button type="button" class="btn-infor" data-bs-toggle="modal" 
                                    data-bs-target="#modal-infor"
                                    data-id="<?php echo $fornecedor['id']?>"
                                    data-nome="<?php echo $fornecedor['nome']?>"
                                    data-email="<?php echo $fornecedor['email']?>"
                                    data-telefone="<?php echo $fornecedor['telefone']?>"
                                    data-cnpj="<?php echo $fornecedor['cnpj']?>"
                                    data-cep="<?php echo $fornecedor['cep']?>"><i class="fa-sharp fa-solid fa-circle-info"></i></button>

                                </td>
                                <?php
                                } 
                                ?> 
                            </tr>             
                        </tbody>
                        </table>
                    </div>
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
        <!--    MODAL CADASTRO FORNECEDOR  -->
<div class="modal fade" id="cad-forn" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-xl">
      <div class="modal-content">
        <div class="modal-header">
          <h1 class="modal-title fs-5" id="exampleModalLabel">Cadastro Fornecedor</h1>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
            <form action="actions/cad_fornecedor.php" method="post">
            <div class="row">
                <div class="form-floating mb-3">
                    <input type="text" class="form-control" id="input_nome_cad" name="nome" placeholder="Nome Completo..." aria-label="Nome Completo..">
                    <label for="floatingInput" style="margin-left: 10px;">Nome Completo:</label>
                </div>
            </div>
            <div class="row">
                <div class="col form-floating mb-3">
                    <input type="text" class="form-control" id="input_email_cad" name="email" placeholder="Email.." aria-label="Email..">
                    <label for="floatingInput" style="margin-left: 10px;">Email:</label>
                </div>
                <div class="col form-floating mb-3">
                    <input type="text" class="form-control cad-forn-cnpj" id="input_cnpj_cad" name="cnpj" placeholder="CNPJ.." aria-label="CNPJ.." autocomplete="off" maxlength="19">
                    <label for="floatingInput" style="margin-left: 10px;">CNPJ:</label>
                </div>
            </div>
            <div class="row">
                <div class="col form-floating mb-3">
                    <input type="text" class="form-control cad-forn-tel" id="input_telefone_cad" name="telefone" placeholder="Telefone.." aria-label="Telefone.." autocomplete="off" maxlength="15">
                    <label for="floatingInput" style="margin-left: 10px;">Telefone:</label>
                </div>
                <div class="col  form-floating mb-3">
                    <input type="text" class="form-control cad-forn-cep" id="input_cep_cad" name="cep" placeholder="CEP.." aria-label="CEP.." autocomplete="off" maxlength="9">
                    <label for="floatingInput" style="margin-left: 10px;">CEP:</label>
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
        <!--    MODAL EDITAR   -->
<div class="modal fade" id="modal-editar" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-xl">
      <div class="modal-content">
        <div class="modal-header">
          <h1 class="modal-title fs-5" id="exampleModalLabel">Editar</h1>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
            <form action="actions/edit_fornecedor.php" method="POST">
                <input type="hidden" class ="form-control" id="input_id" name="id" required>
            <div class="row">
                <div class="form-floating mb-3" >
                    <input type="text" class="form-control" id="input_nome_edit" name="edit_nome" placeholder="Nome Completo..." aria-label="Nome Completo..">
                    <label for="floatingInput" style="margin-left: 10px;">Nome Completo:</label>
                </div>
            </div>
            <div class="row" style="margin-top: 5px;">
                <div class="col form-floating mb-2">
                    <input type="text" class="form-control" id="input_email_edit" name="edit_email" placeholder="Email.." aria-label="Email..">
                    <label for="floatingInput" style="margin-left: 10px;">Email:</label>
                </div>
                <div class="col form-floating mb-2">
                    <input type="text" class="form-control" id="input_cnpj_edit" name="edit_cnpj" placeholder="CNPJ.." aria-label="CNPJ.." autocomplete="off" maxlength="19">
                    <label for="floatingInput" style="margin-left: 10px;">CNPJ:</label>
                </div>
            </div>
            <div class="row" style="margin-top: 10px;">
                <div class="col form-floating mb-2">
                    <input type="text" class="form-control" id="input_telefone_edit" name="edit_telefone" placeholder="Telefone.." aria-label="Telefone.." autocomplete="off" maxlength="15">
                    <label for="floatingInput" style="margin-left: 10px;">Telefone:</label>
                </div>
                <div class="col form-floating mb-2">
                    <input type="text" class="form-control"  id="input_cep_edit" name="edit_cep" placeholder="CEP.." aria-label="CEP.." autocomplete="off" maxlength="9">
                    <label for="floatingInput" style="margin-left: 10px;">CEP:</label>
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
        <!--    MODAL EXCLUIR   -->
<div class="modal fade" id="modal-excluir" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
      <div class="modal-content">
        <div class="modal-header">
          <h1 class="modal-title fs-5" id="exampleModalLabel">Excluir</h1>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
            <form action="actions/delete_fornecedor.php" method="post">
            <input type="hidden" class ="form-control" id="input_id_delete" name="id" required>
          Deseja excluir este fornecedor..?
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Fechar</button>
          <button type="submit" class="btn btn-danger">Excluir</button>
        </div>
            </form>
      </div>
    </div>
</div>
        <!--    MODAL INFORMAÇÕES   -->
<div class="modal fade" id="modal-infor" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-xl">
      <div class="modal-content">
        <div class="modal-header">
          <h1 class="modal-title fs-5" id="exampleModalLabel">Informações</h1>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
                <input type="hidden" class ="form-control" id="input_id_infor" name="id" required>
            <div class="row">
                <div class="form-floating mb-2">
                    <input type="text" class="form-control" id="floatingInputDisablednome" nameplaceholder="Nome Completo..." aria-label="Nome Completo.." disabled>
                    <label for="floatingInputDisabled" style="margin-left: 10px;">Nome Completo:</label>
                </div>
            </div>
            <div class="row" style="margin-top: 5px;">
                <div class="col form-floating mb-2">
                    <input type="text" class="form-control" id="floatingInputDisabledemail" nameplaceholder="Email.." aria-label="Email.." disabled>
                    <label for="floatingInputDisabled" style="margin-left: 10px;">Email:</label>
                </div>
                <div class="col form-floating mb-2">
                    <input type="text" class="form-control" id="floatingInputDisabledcnpj" nameplaceholder="CNPJ.." aria-label="CNPJ.." disabled>
                    <label for="floatingInputDisabled" style="margin-left: 10px;">CNPJ:</label>
                </div>
            </div>
            <div class="row" style="margin-top: 10px;">
                <div class="col form-floating mb-2">
                    <input type="text" class="form-control" id="floatingInputDisabledtelefone" nameplaceholder="Telefone.." aria-label="Telefone.." disabled>
                    <label for="floatingInputDisabled" style="margin-left: 10px;">Telefone:</label>
                </div>
                <div class="col form-floating mb-2">
                    <input type="text" class="form-control"  id="floatingInputDisabledcep" nameplaceholder="CEP.." aria-label="CEP.." disabled>
                    <label for="floatingInputDisabled" style="margin-left: 10px;">CEP:</label>
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
    var email = button.getAttribute('data-email')
    var telefone = button.getAttribute('data-telefone')
    var cnpj = button.getAttribute('data-cnpj')
    var cep = button.getAttribute('data-cep')

    var modalTitle = ModalEditar.querySelector('.modal-title')

    modalTitle.textContent = 'Editar Fornecedor: ' + nome
    document.getElementById('input_id').value = id;
    document.getElementById('input_nome_edit').value = nome;
    document.getElementById('input_email_edit').value = email;
    document.getElementById('input_telefone_edit').value = telefone;
    document.getElementById('input_cnpj_edit').value = cnpj;
    document.getElementById('input_cep_edit').value = cep;

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
    var email = button.getAttribute('data-email')
    var telefone = button.getAttribute('data-telefone')
    var cnpj = button.getAttribute('data-cnpj')
    var cep = button.getAttribute('data-cep')

    var modalTitle = ModalInfor.querySelector('.modal-title')

    modalTitle.textContent = 'Informações do fornecedor: ' + nome
    document.getElementById('input_id_infor').value = id;
    document.getElementById('floatingInputDisablednome').value = nome;
    document.getElementById('floatingInputDisabledemail').value = email;
    document.getElementById('floatingInputDisabledtelefone').value = telefone;
    document.getElementById('floatingInputDisabledcnpj').value = cnpj;
    document.getElementById('floatingInputDisabledcep').value = cep;

}) 
</script>