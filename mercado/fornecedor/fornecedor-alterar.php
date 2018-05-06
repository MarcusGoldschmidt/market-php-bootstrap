<!DOCTYPE html>
<html lang="pt-br">

<head>
    <title>Mercadoria</title>
    <meta charset="utf-8">

    <link rel="icon" href="../assets/imagens/fav.png" />

    <link href="https://fonts.googleapis.com/css?family=Raleway" rel="stylesheet">

    <link rel="stylesheet" href="../assets/css/estilo.css">

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">


    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">


    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>

</head>

<body>
    <div class="menu-top">
        <div class="col-md-10">
            <div class="row">
                <div class="col-sm-1">
                    <span class="glyphicon glyphicon-pencil"></span>
                </div>
                <div class="col-sm-9">
                    <h3 class="menu">Alterar Fornecedor</h3>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <h3 class="usuario-nome">'Nome do usuário logado'</h3>
        </div>
        <div class="col-md-1">
            <div class="row">
                <div class="col-sm-1">
                    <a href="../login-sistema.php">
                        <button type="button" class="btn btn-danger"><h3>Sair</h3></button>
                    </a>
                </div>
            </div>
        </div>
    </div>

    <nav class="navbar navbar-inverse visible-xs">
        <div class="container-fluid">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>                        
        </button>
                <a class="navbar-brand" href="#">Logo</a>
            </div>
            <div class="collapse navbar-collapse" id="myNavbar">
                <h2>MERCADOria</h2>
                <ul class="nav nav-pills nav-stacked">
                    <li><a href="../inicial.php">inicio</a></li>
                    <li><a href="../venda/venda-cadastro.php">Realizar Venda</a></li>
                    <li><a href="../entrega/entrega-cadastro.php">Entregas</a></li>
                    <li><a href="fornecedor-inicio.php">Início Fornecedor</a></li>

                    <div class="topico">
                        <ul class="nav nav-pills nav-stacked">
                            <li><a href="fornecedor-cadastro.php">Cadastrar</a></li>
                            <li><a href="fornecedor-consultar.php">Consultar</a></li>
                        </ul>
                    </div>


                </ul>
            </div>
        </div>
    </nav>
    <div class="container-fluid">
        <div class="row content">
            <div class="col-sm-2 sidenav hidden-xs">
                <h2>MERCADOria</h2>
                <ul class="nav nav-pills nav-stacked">
                    <li><a href="../inicial.php">Início</a></li>
                    <li><a href="../venda/venda-cadastro.php">Realizar Venda</a></li>
                    <li><a href="../entrega/entrega-cadastro.php">Entregas</a></li>
                    <li><a href="fornecedor-inicio.php">Início Fornecedor</a></li>
                    <div class="topico">
                        <ul class="nav nav-pills nav-stacked">
                            <li><a href="fornecedor-cadastro.php">Cadastrar</a></li>
                            <li><a href="fornecedor-consultar.php">Consultar</a></li>
                        </ul>
                    </div>

                </ul><br>
            </div>
            <br>
            <?php
            
    $_GET ? $id = $_GET ['idfornecedor']  : $id = $_POST['idfornecedor'];
    include "conexao.php";
    
    if ($_POST){
        $sql = "update fornecedor set  nome = :nome, cnpj = :cnpj, telefone = :telefone, bairro = :bairro, logradouro = :logradouro, numero = :numero, complemento = :complemento, cep = :cep, cidade = :cidade, estado = :estado where idfornecedor = :idfornecedor";
        $alteracao = $conexao->prepare($sql);
                    $alteracao->bindValue(":idfornecedor", $id);
                    $alteracao->bindValue(":nomefornecedor", $_POST['nomefornecedor']);
                    $alteracao->bindValue(":cnpj", $_POST['cnpj']);
                    $alteracao->bindValue(":telefone", $_POST['telefone']);
                    $alteracao->bindValue(":bairro", $_POST['bairro']);
                    $alteracao->bindValue(":logradouro", $_POST['logradouro']);
                    $alteracao->bindValue(":numero", $_POST['numero']);
                    $alteracao->bindValue(":complemento", $_POST['complemento']);
                    $alteracao->bindValue(":cep", $_POST['cep']);
                    $alteracao->bindValue(":cidade", $_POST['cidade']);
                    $alteracao->bindValue(":estado", $_POST['estado']);
                    $alteracao->bindValue(":dataCadastro", $_POST['dataCadastro']);
        if ($alteracao->execute())
            echo "Alterado com sucesso";
        else echo "Houve algum erro";
    }
    
    include "conexao.php";
    $sql = "select * from fornecedor where idfornecedor = :idfornecedor";
    $selecao = $conexao->prepare($sql);
    $selecao->bindValue(":idfornecedor", $id);   
    $selecao->execute();
    $resultado = $selecao->fetch();
    ?>
                <div class="col-sm-10">
                    <div class="row">
                        <div class="col-sm-2">
                            <span class="glyphicon glyphicon-tasks"></span>
                        </div>

                        <form action="fornecedor-alterar.php" method="post">
                            <div class="form-group row">
                                <label for="example-text-input" class="col-2 col-form-label">ID Fornecedor</label>
                                <div id="nomeTexto" class="col-10">
                                    <input class="form-control" type="text" readonly value="<?php echo $resultado['idfornecedor'];?>" id="idfornecedor" name="idfornecedor">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="example-text-input" class="col-2 col-form-label">ID Funcionário</label>
                                <div id="nomeTexto" class="col-10">
                                    <input class="form-control" type="text" readonly value="<?php echo $resultado['funcionario_idfuncionario'];?>" id="idfornecedor" name="idfornecedor">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="example-text-input" class="col-2 col-form-label">Nome Fornecedor</label>
                                <div class="col-10">
                                    <input class="form-control" type="text" value="<?php echo $resultado['nome'];?>" id="nomefornecedor" name="nomefornecedor">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="cpf" class="col-2 col-form-label">CNPJ</label>
                                <div class="col-10">
                                    <input class="form-control" type="text" value="<?php echo $resultado['canpj'];?>" id="cnpj" name="cnpj">
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="telefone1" class="col-2 col-form-label">Telefone</label>
                                <div class="col-10">
                                    <input class="form-control" type="tel" value="<?php echo $resultado['telefone'];?>" id="telefone" name="telefone">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="bairro" class="col-2 col-form-label">Bairro</label>
                                <div class="col-10">
                                    <input class="form-control" type="text" value="<?php echo $resultado['bairro'];?>" id="bairro" name="bairro">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="numero" class="col-2 col-form-label">Número</label>
                                <div class="col-10">
                                    <input class="form-control" type="text" value="<?php echo $resultado['numero'];?>" id="numero" name="numero">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="logradouro" class="col-2 col-form-label">Logradouro</label>
                                <div class="col-10">
                                    <input class="form-control" type="text" value="<?php echo $resultado['logradouro'];?>" id="logradouro" name="logradouro">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="complemento" class="col-2 col-form-label">Complemento</label>
                                <div class="col-10">
                                    <input class="form-control" type="text" value="<?php echo $resultado['complemento'];?>" id="complemento" name="complemento">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="complemento" class="col-2 col-form-label">CEP</label>
                                <div class="col-10">
                                    <input class="form-control" type="text" value="<?php echo $resultado['cep'];?>" id="cep" name="cep">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="complemento" class="col-2 col-form-label">Cidade</label>
                                <div class="col-10">
                                    <input class="form-control" type="text" value="<?php echo $resultado['cidade'];?>" id="cidade" name="cidade">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="complemento" class="col-2 col-form-label">Estado</label>
                                <div class="col-10">
                                    <input class="form-control" type="text" value="<?php echo $resultado['estado'];?>" id="estado" name="estado">
                                </div>
                            </div>
                            <button type="submit" class="btn btn-success"><span class="glyphicon glyphicon-ok"></span> Realizar cadastro</button>
                        </form>


                    </div>

                    <table class="table table-hover table-striped">
                        <tr>
                            <th>id Fornecedor</th>
                            <th>Nome</th>
                            <th>CNPJ</th>
                            <th>Telefone</th>
                            <th>Bairro</th>
                            <th>Número</th>
                            <th>Logradouro</th>
                            <th>Complemento</th>
                            <th>CEP</th>
                            <th>Cidade</th>
                            <th>Estado</th>
                            <th>País</th>
                            <th>Data de cadastro</th>
                            <th>Alterar</th>
                        </tr>
                        <tr>
                            <td>1</td>
                            <td>Maria da Silva</td>
                            <td>02364491765</td>
                            <td>3321-2482</td>
                            <td>Centro</td>
                            <td>2345</td>
                            <td>Rua Doi</td>
                            <td>Em frente a NerdStore</td>
                            <td>76987-008</td>
                            <td>Vilhena</td>
                            <td>Rondônia</td>
                            <td>Brasil</td>
                            <td>09/02/2017</td>
                            <td><button class="btn btn-warning"><span class="glyphicon glyphicon-pencil"></span> Alterar</button></td>
                        </tr>

                    </table>

                    <ul class="pagination">
                        <li><a href="#"><span class="glyphicon glyphicon-backward"></span></a></li>
                        <li><a href="#"><span class="glyphicon glyphicon-chevron-left"></span></a></li>
                        <li class="active"><a href="#">1</a></li>
                        <li><a href="#">2</a></li>
                        <li><a href="#">3</a></li>
                        <li><a href="#">4</a></li>
                        <li><a href="#"><span class="glyphicon glyphicon-chevron-right"></span></a></li>
                        <li><a href="#"><span class="glyphicon glyphicon-forward"></span></a></li>
                    </ul>
                </div>
        </div>
    </div>
</body>

</html>
