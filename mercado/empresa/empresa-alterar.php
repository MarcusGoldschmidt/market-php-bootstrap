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
                    <span class="glyphicon glyphicon-list-alt"></span>
                </div>
                <div class="col-sm-9">
                    <h3 class="menu">Alterar Cliente</h3>
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
                <ul class="nav navbar-nav">
                    <li><a href="../inicial.php">Início</a></li>
                    <li><a href="../venda/venda-cadastro.php">Realizar Venda</a></li>
                    <li><a href="../entrega/entrega-cadastro.php">Entregas</a></li>
                    <li><a href="empresa-inicio.php">Inicio Empresa</a></li>
                    <div class="topico">
                        <ul class="nav navbar-nav">
                            <li class="active"><a href="empresa-cadastro.php">Cadastrar</a></li>
                            <li><a href="empresa-consulta.php">Consultar</a></li>
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
                    <li><a href="../inicial.php">Inicio</a></li>
                    <li><a href="#section2">Realizar Venda</a></li>
                    <li><a href="#section3">Entregas</a></li>
                    <li><a href="empresa-inicio.php">Inicio Empresa</a></li>
                    <div class="topico">
                        <ul class="nav nav-pills nav-stacked">
                            <li class="active"><a href="empresa-cadastro.php">Cadastrar</a></li>
                            <li><a href="empresa-consulta.php">Consultar</a></li>
                        </ul>
                    </div>
                </ul><br>
            </div>
            <br>
            <div class="col-sm-8">
                <div>
                    <span class="glyphicon glyphicon-tasks"></span>
                </div>
                
                <?php
                
                    $_GET ? $id = $_GET ['idempresa']  : $id = $_POST['id'];
                include "../../php/conexao.php";

            if ($_POST){
                $sql = "update empresa set nomeempresa = :nome, cnpj = :cnpj, telefone = :telefone, bairro = :bairro, numero = :numero, logradouro = :logradouro, complemento = :complemento, cep = :cep, cidade = :cidade, estado = :estado where idempresa = :id";
                    $alteracao = $conexao->prepare($sql);
                    $alteracao = $conexao->prepare($sql);
                    $alteracao->bindValue(":nome", $_POST['nome']);
                    $alteracao->bindValue(":id",$id);
                    $alteracao->bindValue(":cnpj", $_POST['cnpj']);
                    $alteracao->bindValue(":telefone", $_POST['telefone']);
                    $alteracao->bindValue(":bairro", $_POST['bairro']);
                    $alteracao->bindValue(":numero", $_POST['numero']);
                    $alteracao->bindValue(":logradouro", $_POST['logradouro']);
                    $alteracao->bindValue(":complemento", $_POST['complemento']);
                    $alteracao->bindValue(":cep", $_POST['cep']);
                    $alteracao->bindValue(":cidade", $_POST['cidade']);
                    $alteracao->bindValue(":estado", $_POST['estado']);
                    if ($alteracao->execute())
                    echo "<h2>Alterado com sucesso</h2>";
                    else echo "<h2>Houve algum erro</h2>";
            }
    
                    include "../../php/conexao.php";
                    $sql = "select * from empresa where idempresa = :idempresa";
                    $selecao = $conexao->prepare($sql);
                    $selecao->bindValue(":idempresa", $id);    
                    $selecao->execute();
                    $resultado = $selecao->fetch();
                

            ?>
                <form method="post" action="empresa-alterar.php">
                    <div class="row">
                        <div class="form-group row">
                            <label for="cnpj" class="col-2 col-form-label">ID</label>
                            <div class="col-10">
                                <input class="form-control" readonly type="text" value="<?php echo $resultado['idempresa'];?>" id="id" name="id">
                            </div>
                        </div><div class="form-group row">
                            <label for="cnpj" class="col-2 col-form-label">Nome</label>
                            <div class="col-10">
                                <input class="form-control" type="text" value="<?php echo $resultado['nomeempresa'];?>" id="nome" name="nome">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="cnpj" class="col-2 col-form-label">CNPJ</label>
                            <div class="col-10">
                                <input class="form-control" type="text" value="<?php echo $resultado['cnpj'];?>" id="cnpj" name="cnpj">
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="telefone" class="col-2 col-form-label">Telefone</label>
                            <div class="col-10">
                                <input class="form-control" type="tel" value="<?php echo $resultado['telefone'];?>" id="telefone" name="telefone">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="cep" class="col-2 col-form-label">CEP</label>
                            <div class="col-10">
                                <input class="form-control" type="text" value="<?php echo $resultado['cep'];?>" id="cep" name="cep">
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
                            <label for="estado" class="col-2 col-form-label">Estado</label>
                            <div class="col-10">
                                <input class="form-control" type="text" value="<?php echo $resultado['estado'];?>" id="estado" name="estado">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="cidade" class="col-2 col-form-label">Cidade</label>
                            <div class="col-10">
                                <input class="form-control" type="text" value="<?php echo $resultado['cidade'];?>" id="cidade" name="cidade">
                            </div>
                        </div>
                        <button type="submit" class="btn btn-success"><span class="glyphicon glyphicon-ok"></span>Realizar cadastro</button>
                        <br>
                        <br>

                    </div>
                </form>
            </div>
        </div>
    </div>

</body>

</html>
