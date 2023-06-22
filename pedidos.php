<!doctype html>
<html lang="pt-br">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>SICEV | DASHBOARD | PEDIDOS</title>
    <link rel="icon" href="img/index2.png">
    <link rel="stylesheet" href="css/pedidos.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.6.3.js"></script>
    <style>
    /* Create three equal columns that float next to each other */
    .container {
        float: center;
        width: 33.33%;
        padding: 15px;

    }

    .footer {
        padding: 20px;
        text-align: right;
        background: #b8b8b8;
        margin-top: 20px;
    }

    #inputpass.error input {
        border: 1px solid red;
        color: red;

    }

    #inputpass.ok input {
        border: 1px solid green;
        color: green;

    }

    #select_prod.error input {
        border: 1px solid red;
        color: red;
    }
    </style>
</head>

<body>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous">
    </script>
    <script src="https://kit.fontawesome.com/ba0161889c.js" crossorigin="anonymous"></script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
    < script src = "https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
    integrity = "sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
    crossorigin = "anonymous" >
    </script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>

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
                <h2>Dashboard | Pedidos</h2>
                <hr>
                <p><i class="bi bi-house-door"></i> / Dashboard SICEV</p>
            </div>
            <div class="details">
                <div class="Suppliers">
                    <div class="cardHeader">
                        <h2>Últimos Pedidos</h2>
                        <button type="button" class="btn-fzr-pedidos" data-bs-toggle="modal"
                            data-bs-target="#staticBackdrop">Fazer Pedido</button>
                    </div>
                    <table>
                        <tbody>
                            <thead>
                                <tr>
                                    <td>ID</td>
                                    <td>DATA PEDIDO</td>
                                    <td>FUNCIONÁRIO</td>
                                    <td>FORNECEDOR</td>
                                </tr>
                            </thead>
                            <?php  
                            include("./conexao.php");
                            //var_dump($_POST);
                            $ped1 = mysqli_query($conn, "SELECT fun.nome, forn.nome, p.id, data_pedido from funcionario fun, fornecedor forn, pedido p  where fun.id= p.funcionario and forn.id=p.fornecedor ;");
                            ?>
                            <?php while ($ped2 = mysqli_fetch_array($ped1)){ ?>
                            <tr id="listar">
                            <tr>
                                <th scope="row"><?php echo $ped2["id"]; ?></th>
                                <td><?php echo $ped2["data_pedido"]; ?></td>
                                <td><?php echo $ped2["0"]; ?></td>
                                <td><?php echo $ped2["nome"]; }?></td>
                            </tr>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </section>

    <!-- MODAL 1 - selecionar fornecedor e funcionario -->

    <div class="modal fade" id="staticBackdrop" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-xl">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="exampleModalLabel">Fazer Pedido</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form class="row g-3 needs-validation">
                        <div>
                            <label for="select_fun" id="funcionario">Funcionário</label>
                            <select style="width:100%;" class="form-select" aria-label="Default select example"
                                id="select_fun" onfocus="selecionarFun()" required>
                                <option id="nulo">Selecione...</option>
                            </select>
                            <div class="col-auto" id="inputpass" style="display: none;">
                                <label for="inputPassword6" class="col-form-label">Senha:</label>
                                <input type="password" id="inputPassword6" class="form-control"
                                    aria-labelledby="passwordHelpInline" onblur="validaSenha()" required>
                            </div>
                        </div>
                        <div>
                            <label for="select_forn" id="fornecedor">Fornecedor</label>
                            <select style="width:100%;" class="form-select" aria-label="Default select example"
                                id="select_forn" onfocus="selecionarForn()" required>
                                <option id="nulo">Selecione...</option>
                            </select>
                        </div>
                    </form>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" onclick="apagarModal()"
                        data-bs-dismiss="modal">Cancelar</button>
                    <button type="submit" class="btn btn-primary" id="seguirped">Continuar</button>
                </div>
            </div>
        </div>
    </div>

    <!-- MODAL 1 fim -->

    <!-- MODAL 2 - selecionar produto do fornecedor -->
    <div class="modal fade bd-example-modal-lg" id="pedido0" data-bs-backdrop="static" data-bs-keyboard="false"
        tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content" id="addped">
                <div class="modal-header">
                    <h5 class="modal-title" id="pedido_n"></h5>
                </div>
                <div class="modal-body">
                    <div class="col-md-4">
                        <label for="select_prod">Selecione um Produto</label>
                        <select style="width:100%;" class="form-select" aria-label="Default select example"
                            id="select_prod" onfocus="selecionarProd()" autofocus>
                            <option id="nulo">Selecione...</option>
                        </select>
                    </div>
                    <div class="col-md-4">
                        <label for="floatingInput4">Preço</label>
                        <input type="text" class="form-control" id="floatingInput4" name="preco" style="width: 40%;"
                            disabled>
                    </div>
                    <div class="col-md-3">
                        <label for="floatingInput3">Quantidade</label>
                        <input type="number" class="form-control" id="floatingInput3" placeholder name="qnt"
                            style="width: 50%;" min="1" onblur="subValor()" required>
                    </div>
                    <div class="col-md-4">
                        <label for="floatingInput5">Subtotal</label>
                        <input type="text" class="form-control" id="floatingInput5" name="subtotal" style="width: 40%;"
                            disabled>
                    </div>
                    <div class="modal-footer ml-auto ">
                        <button type="button" id="cancelar_ped" class="btn btn-secondary"
                            data-bs-dismiss="modal">Voltar</button>
                        <button type="button" class="btn btn-primary" id="adicionar_ped">Adicionar</button>
                        <button type="button" id="nota_ped" class="btn btn-warning"
                            onclick="listarPedido()">Finalizar</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- MODAL 2 fim -->

    <!-- MODAL 3 nota do pedido -->
    <div class="modal fade" id="listarpedido0" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
        aria-labelledby="staticBackdropLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5">Itens do pedido</h1>
                </div>
                <div class="modal-body">
                    <table id="listarpedido1">
                    </table>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" id="apagar" data-bs-dismiss="modal">Excluir</button>
                    <button type="button" class="btn btn-primary" id="salvarped" data-bs-dismiss="modal">Salvar</button>
                </div>
            </div>
        </div>
    </div>
    <!-- MODAL 3 fim -->

    <script>
    function selecionarForn() {
        var fornecedor = {
            "forn": $("#select_forn").val()
        };
        $.post("email_val.php", fornecedor, function(retorno) {
            $('#select_forn').html(retorno);
            //console.log(retorno);
        });
    }

    function selecionarFun() {
        var funcionario = {
            fun: $("#select_fun").val()
        };
        $.post("email1_val.php", funcionario, function(retorno) {
            $('#select_fun').html(retorno);
            //console.log(retorno);
        });
    }

    function validaSenha() {
        var funcionario = {
            fun: $("#select_fun").children("option:selected").attr('name'),
            senha: $("#inputPassword6").val()
        }
        $.post("senha_fun.php", funcionario, function(retorno) {
            if (retorno === "senha valida") {
                $('#inputpass').removeClass("error");
                $('#inputpass').addClass("ok");
            } else {
                $('#inputpass').addClass("error");
                $('#inputpass').removeClass("ok");
            }
        });
    }

    $('#select_fun').change(function(event) {
        if (event.target.value != "Selecione...") {
            $('#inputpass').css("display", 'block');
        } else {
            $('#inputpass').css("display", 'none');
        }
    });

    function apagarModal() {
        $('#select_fun').val("Selecione...").change();
        $('#inputPassword6').val("").change();
        $('#select_forn').val("Selecione...").change();
    }

    $("#cancelar_ped").click(function(event) {
        $('#staticBackdrop').modal('show');
        $('#inputPassword6').val("").change();
        $('#select_prod').val("Selecione...").change();
        $("#floatingInput3").val("").change();
        $("#floatingInput4").val("").change();
        $('#floatingInput5').val("").change();
    })

    function selecionarProd() {
        var fornecedor = {
            "forn": $("#select_forn").children("option:selected").attr('name')
        };
        $.post("select_produto.php", fornecedor, function(retorno) {
            $('#select_prod').html(retorno);
            //console.log(retorno);
        });
    }

    $("#seguirped").click(function(event) {
        $.ajax({
            url: "ped_banco.php",
            type: 'post',
            data: {
                forn: $("#select_forn").children("option:selected").attr('name'),
                fun: $("#select_fun").children("option:selected").attr('name'),
            },
            beforeSend: function() {
                $('#staticBackdrop').modal('hide');
            },
            success: function(retorno) {
                if (retorno != "") {
                    $('#pedido0').modal('show');
                    $('#pedido_n').text(retorno);
                } else {
                    alert("Houve um problema no sistema, contate o gerente!");
                }
            }
        });
    })

    $('#select_prod').change(function() {
        var produto = $(this).children("option:selected").attr('produto');
        var dados = {
            cod_barra: produto
        };
        $.post("preco.php", dados, function(retorno) {
            if (produto == null) {
                $('#floatingInput4').val("");
            } else {
                $('#floatingInput4').val(retorno);
                //console.log(retorno);
            }
        });
    })


    function subValor() {
        var subt = {
            qnt: $("#floatingInput3").val(),
            preco: $("#floatingInput4").val()
        };
        $.post("subtotal.php", subt, function(retorno) {
            $('#floatingInput5').val(retorno);
            //console.log(retorno);
        });
    }

    function addPed() {
        var prod1 = $('#select_prod').children("option:selected").attr('produto');
        $.ajax({
            url: "itensped.php",
            type: 'post',
            data: {
                ped: $('#pedido_n').text(), // ok!
                prod: prod1,
                qnt: $("#floatingInput3").val(),
                preco: $("#floatingInput4").val()
            },

            success: function(retorno) {
                //console.log(retorno);
                if (retorno != "") {
                    $('#select_prod').val("Selecione...").change();
                    $("#floatingInput3").val("").change();
                    $("#floatingInput4").val("").change();
                    $('#floatingInput5').val("").change();
                } else {
                    alert("Houve um problema ao adicionar o item, contate o gerente!");
                }
                // $('#select_prod').children("option:selected").attr('produto'); disabilitar a opção do produto que ja foi adicionado !!!!
                $('#pedido0').modal('show');
            }
        });
    }

    function listarPedido() {
        $.ajax({
            url: "nota_ped.php",
            type: 'post',
            data: {
                ped: $('#pedido_n').text()
            },
            beforeSend: function() {
                $('#pedido0').modal('hide')
            },
            success: function(retorno) {
                $('#listarpedido0').modal('show');
                $('#listarpedido1').append(retorno);
            }
        })
    }

    $("#adicionar_ped").click(function(event) {
        addPed();
    })

    function apagarPed() {
        $.ajax({
            url: "delete_ped.php",
            type: 'post',
            data: {
                ped: $('#pedido_n').text()
            },
            beforeSend: function() {
                alert("Deseja apagar esse pedido?");
            },
            success: function(retorno) {
                if (retorno != "") {
                    alert("Pedidos excluído!");
                } else {
                    alert("Houve um problema ao excluir o pedido, contate o gerente!");
                }
            }
        })

    }

    function limparCampos() {
        $("#select_forn").val("Selecione...").change(),
            $("#select_fun").val("Selecione...").change(),
            $('#select_prod').val("Selecione...").change(),
            $("#floatingInput3").val("").change(),
            $("#floatingInput4").val("").change(),
            $('#floatingInput5').val("").change()
    }

    $("#apagar").click(function(event) {
        apagarPed();
        limparCampos();
    })

    $("#salvarped").click(function(event) {
        $.ajax({
            url: "ultimoped.php",
            type: 'post',
            data: {
                ped: $('#pedido_n').text()
            },
            success: function(retorno) {
                $('#listar').append(retorno);
                //console.log(retorno);
            }
        })
    })
    </script>
</body>

</html>