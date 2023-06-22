<?php
    
    include("conexao.php");

    $select_produto = mysqli_query($conn,"SELECT * FROM produto");

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
    <link rel="stylesheet" href="css/produto.css">
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
                <h2>Dashboard | Produtos</h2>
                <hr>
                <p><i class="bi bi-house-door"></i> / Dashboard SICEV</p>
            </div>
            <div class="details">
                <div class="Suppliers">
                    <div class="cardHeader">
                        <h2>Produtos</h2>
                        <button type="button" class="btn-cad-prod" data-bs-toggle="modal" data-bs-target="#cad-produto">Cadastrar Produto

                    </div>
                    <table>
                        <thead>
                            <tr>
                                <td>ID</td>
                                <td>CÓDIGO DE BARRAS</td>
                                <td>NOME DO PRODUTO</td>
                                <td>CATEGORIA</td>
                                <td>PREÇO DA COMPRA</td>
                                <td>PREÇO DA VENDA</td>
                            </tr>
                        </thead>
                        <tbody>
                           <tr>
                           <?php
                            while($produto = mysqli_fetch_assoc($select_produto)){
                            ?>
                            <td><?php echo $produto['id']?></td>
                            <td><?php echo $produto['cod_barras']?></td>
                            <td><?php echo $produto['nome']?></td>
                            <td><?php echo $produto['categoria']?></td>
                            <td><?php echo $produto['preco_compra']?></td>
                            <td style="text-align: center;"><?php echo $produto['preco_venda']?></td>
                            <td>
                                <button type="button" class="btn-editar" 
                                data-bs-toggle="modal" 
                                data-bs-target="#modal-editar"
                                data-id="<?php echo $produto['id']?>"
                                data-cod-barras="<?php echo $produto['cod_barras']?>"
                                data-nome-produto="<?php echo $produto['nome']?>"
                                data-categoria="<?php echo $produto['categoria']?>"
                                data-preco-compra="<?php echo $produto['preco_compra']?>"
                                data-preco-venda="<?php echo $produto['preco_venda']?>"><i class="fa-solid fa-pencil"></i></button>

                                <button type="button" class="btn-excluir" 
                                data-bs-toggle="modal" 
                                data-bs-target="#modal-excluir"
                                data-id="<?php echo $produto['id']?>"><i class="fa-regular fa-trash-can"></i></button>

                                <button type="submit" class="btn-infor" 
                                data-bs-toggle="modal" 
                                data-bs-target="#modal-infor"
                                data-id="<?php echo $produto['id']?>"
                                data-cod-barras="<?php echo $produto['cod_barras']?>"
                                data-nome-produto="<?php echo $produto['nome']?>"
                                data-categoria="<?php echo $produto['categoria']?>"
                                data-preco-compra="<?php echo $produto['preco_compra']?>"
                                data-preco-venda="<?php echo $produto['preco_venda']?>"><i class="fa-sharp fa-solid fa-circle-info"></i></button>
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
            <!--  MODAL CADASTRO PRODUTO  -->
<div class="modal fade" id="cad-produto" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-xl">
      <div class="modal-content">
        <div class="modal-header">
          <h1 class="modal-title fs-5" id="exampleModalLabel">Cadastro Produto</h1>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
            <form action="actions/cad_produto.php" method="post">
            <div class="row">
                <div class="col form-floating mb-3">
                    <input type="text" class="form-control" id="floatingInput" name="cod_barras" placeholder="Código de Barras..."  aria-label="Código de Barras..." autocomplete="off" maxlength="14" required>
                    <label for="floatingInput" style="margin-left: 10px;">Código de Barras:</label>
                </div>
                <div class="col form-floating mb-3">
                    <input type="text" class="form-control" id="floatingInput" name="nome_produto" placeholder="Nome do Produto..." aria-label="Nome do Produto..." autocomplete="off" required>
                    <label for="floatingInput" style="margin-left: 10px;">Nome do Produto:</label>
                </div>
                <div class="col form-floating mb-3">
                    <select class="form-select" aria-placeholder="Função" name="categoria" placeholder="Categoria..." aria-label="Categoria..." autocomplete="off" required>
                        <option selected disabled>Categoria do Produto:</option>
                        <option value="1">1</option>
                        <option value="2">2</option>
                        <option value="3">3</option>
                    </select>
                    <label for="floatingSelect" style="margin-left: 10px;">Selecione</label>
                </div>
            </div>
            <div class="row">
                <div class="col input-group mb-3">
                    <span class="input-group-text">R$:</span>
                    <div class="form-floating">
                        <input type="text" class="form-control" id="floatingInputGroup1" name="preco_compra" placeholder="Preço da Compra..." autocomplete="off" maxlength="6" autocomplete="off" required>
                        <label for="floatingInputGroup1">Preço da Compra:</label>
                    </div>
                </div>
                <div class="col input-group mb-3">
                    <span class="input-group-text">R$:</span>
                    <div class="form-floating">
                        <input type="text" class="form-control" id="floatingInputGroup1" name="preco_venda" placeholder="Preço da Venda..." autocomplete="off" maxlength="7" autocomplete="off" required>
                        <label for="floatingInputGroup1">Preço da Venda:</label>
                    </div>
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
            <form action="actions/edit_produto.php" method="post">
            <input type="hidden" id="input_id_edit" name="id_edit" required>
            <div class="row">
                <div class="col form-floating mb-3">
                    <input type="text" class="form-control" id="input_cod_barras" name="cod_barras" placeholder="Código de Barras..."  aria-label="Código de Barras..." autocomplete="off" maxlength="14" required>
                    <label for="floatingInput" style="margin-left: 10px;">Código de Barras:</label>
                </div>
                <div class="col form-floating mb-3">
                    <input type="text" class="form-control" id="input_nome_produto" name="nome_produto" placeholder="Nome do Produto..." aria-label="Nome do Produto..." autocomplete="off" required>
                    <label for="floatingInput" style="margin-left: 10px;">Nome do Produto:</label>
                </div>
                <div class="col form-floating mb-3">
                    <select class="form-select" aria-placeholder="Categoria" id="input_categoria" name="categoria" placeholder="Categoria..." aria-label="Categoria..." autocomplete="off" required>
                        <option selected>Categoria do Produto:</option>
                        <option value="1">1</option>
                        <option value="2">2</option>
                        <option value="3">3</option>
                    </select>
                    <label for="floatingSelect" style="margin-left: 10px;">Selecione</label>
                </div>
            </div>
            <div class="row">
                <div class="col input-group mb-3">
                    <span class="input-group-text">R$:</span>
                    <div class="form-floating">
                        <input type="text" class="form-control" id="input_preco_compra" name="preco_compra" placeholder="Preço da Compra..." autocomplete="off" maxlength="6" autocomplete="off" required>
                        <label for="floatingInputGroup1">Preço da Compra:</label>
                    </div>
                </div>
                <div class="col input-group mb-3">
                    <span class="input-group-text">R$:</span>
                    <div class="form-floating">
                        <input type="text" class="form-control" id="input_preco_venda" name="preco_venda" placeholder="Preço da Venda..." autocomplete="off" maxlength="7" autocomplete="off" required>
                        <label for="floatingInputGroup1">Preço da Venda:</label>
                    </div>
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

        <!--   MODAL EXCLUIR   -->
<div class="modal fade" id="modal-excluir" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
      <div class="modal-content">
        <div class="modal-header">
          <h1 class="modal-title fs-5" id="exampleModalLabel">Excluir</h1>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
            <form action="actions/delete_produto.php" method="post">
            <input type="hidden" name="id_delete" id="input_id_delete" required>
          Deseja excluir este produto..?
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Fechar</button>
          <button type="submit" class="btn btn-danger">Excluir</button>
        </div>
        </form>
      </div>
    </div>
</div>
        <!--   MODAL INFORMAÇÕES   -->
<div class="modal fade" id="modal-infor" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-xl">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="exampleModalLabel">Editar</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
        <div class="modal-body">
        <input type="hidden" id="input_id_infor" name="id_infor" required>
            <div class="row">
                <div class="col form-floating mb-3">
                    <input type="text" class="form-control" id="input_cod_barras_infor" name="cod_barras" placeholder="Código de Barras..."  aria-label="Código de Barras..." disabled>
                    <label for="floatingInput" style="margin-left: 10px;">Código de Barras:</label>
                </div>
                <div class="col form-floating mb-3">
                    <input type="text" class="form-control" id="input_nome_produto_infor" name="nome_produto" placeholder="Nome do Produto..." aria-label="Nome do Produto..." disabled>
                    <label for="floatingInput" style="margin-left: 10px;">Nome do Produto:</label>
                </div>
                <div class="col form-floating mb-3">
                    <select class="form-select" aria-placeholder="Categoria" id="input_categoria_infor" name="categoria" placeholder="Categoria..." aria-label="Categoria..." disabled>
                        <option selected>Categoria do Produto:</option>
                        <option value="1">1</option>
                        <option value="2">2</option>
                        <option value="3">3</option>
                    </select>
                    <label for="floatingSelect" style="margin-left: 10px;">Selecione</label>
                </div>
            </div>
            <div class="row">
                <div class="col input-group mb-3">
                    <span class="input-group-text">R$:</span>
                    <div class="form-floating">
                        <input type="text" class="form-control" id="input_preco_compra_infor" name="preco_compra" placeholder="Preço da Compra..." disabled>
                        <label for="floatingInputGroup1">Preço da Compra:</label>
                    </div>
                </div>
                <div class="col input-group mb-3">
                    <span class="input-group-text">R$:</span>
                    <div class="form-floating">
                        <input type="text" class="form-control" id="input_preco_venda_infor" name="preco_venda" placeholder="Preço da Venda..." disabled>
                        <label for="floatingInputGroup1">Preço da Venda:</label>
                    </div>
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
    var cod_barras = button.getAttribute('data-cod-barras')
    var nome_produto = button.getAttribute('data-nome-produto')
    var categoria = button.getAttribute('data-categoria')
    var preco_compra = button.getAttribute('data-preco-compra')
    var preco_venda = button.getAttribute('data-preco-venda')

    var modalTitle = ModalEditar.querySelector('.modal-title')

    modalTitle.textContent = 'Editar Produto: '
    document.getElementById('input_id_edit').value = id;
    document.getElementById('input_cod_barras').value = cod_barras;
    document.getElementById('input_nome_produto').value = nome_produto;
    document.getElementById('input_categoria').value = categoria;
    document.getElementById('input_preco_compra').value = preco_compra;
    document.getElementById('input_preco_venda').value = preco_venda;

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
    var cod_barras = button.getAttribute('data-cod-barras')
    var nome_produto = button.getAttribute('data-nome-produto')
    var categoria = button.getAttribute('data-categoria')
    var preco_compra = button.getAttribute('data-preco-compra')
    var preco_venda = button.getAttribute('data-preco-venda')

    var modalTitle = ModalInfor.querySelector('.modal-title')

    modalTitle.textContent = 'Informações do Produto: '
    document.getElementById('input_id_infor').value = id;
    document.getElementById('input_cod_barras_infor').value = cod_barras;
    document.getElementById('input_nome_produto_infor').value = nome_produto;
    document.getElementById('input_categoria_infor').value = categoria;
    document.getElementById('input_preco_compra_infor').value = preco_compra;
    document.getElementById('input_preco_venda_infor').value = preco_venda;

}) 
</script>