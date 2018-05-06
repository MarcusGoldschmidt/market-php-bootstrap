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
                <ul class="nav nav-pills nav-stacked">
                    <li><a href="../inicial.php">Início</a></li>
                    <li><a href="../venda/venda-cadastro.php">Realizar Venda</a></li>
                    <li><a href="../entrega/entrega-cadastro.php">Entregas</a></li>
                    <li><a href="cliente-inicio.php">Inicio Cliente</a></li>
                    <li><a href="cliente-fisico-inicio.php">Pessoa fisica</a></li>
                    <div class="topico">
                        <ul class="nav nav-pills nav-stacked">
                            <li class="active"><a href="cliente-fisico-cadastro.php">Cadastrar</a></li>
                            <li><a href="cliente-fisico-alterar.php">Alterar</a></li>
                            <li><a href="cliente-fisico-consulta.php">Consultar</a></li>
                            <li><a href="cliente-fisico-excluir.php">Excluir</a></li>
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
                    <li><a href="cliente-inicio.php">Inicio Cliente</a></li>
                    <li><a href="cliente-fisico-inicio.php">Pessoa fisica</a></li>
                    <div class="topico">
                        <ul class="nav nav-pills nav-stacked">
                            <li class="active"><a href="cliente-fisico-cadastro.php">Cadastrar</a></li>
                            <li><a href="cliente-fisico-consulta.php">Consultar</a></li>
                        </ul>
                    </div>
                </ul><br>
            </div>
            <br>
            <?php
            $_GET ? $id = $_GET ['idcliente']  : $id = $_POST['idcliente'];
            include "../../php/conexao.php";

            if ($_POST){
                    $sql = "update cliente set nome = :nome, telefone = :telefone, telefone2 = :telefone2, bairro = :bairro, numero = :numero, logradouro = :logradouro, complemento = :complemento, cpf = :cpf, email = :email where idcliente = :idcliente";
                    $alteracao = $conexao->prepare($sql);
                    $alteracao->bindValue(":idcliente", $id);
                    $alteracao->bindValue(":nome", $_POST['nome']);
                    $alteracao->bindValue(":telefone", $_POST['telefone']);
                    $alteracao->bindValue(":telefone2", $_POST['telefone2']);
                    $alteracao->bindValue(":bairro", $_POST['bairro']);
                    $alteracao->bindValue(":numero", $_POST['numero']);
                    $alteracao->bindValue(":logradouro", $_POST['logradouro']);
                    $alteracao->bindValue(":complemento", $_POST['complemento']);
                    $alteracao->bindValue(":cpf", $_POST['cpf']);
                    $alteracao->bindValue(":email", $_POST['email']);
                    if ($alteracao->execute())
                    echo "<h2>Alterado com sucesso</h2>";
                    else echo "<h2>Houve algum erro</h2>";
    }
    
                    include "../../php/conexao.php";
                    $sql = "select * from cliente where idcliente = :idcliente";
                    $selecao = $conexao->prepare($sql);
                    $selecao->bindValue(":idcliente", $id);   
                    $selecao->execute();
                    $resultado = $selecao->fetch();
                    ?>

                <div class="col-sm-8">
                    <div>
                        <span class="glyphicon glyphicon-tasks"></span>
                    </div>
                    <div class="row">
                        <form method="post" action="cliente-fisico-alterar.php">
                            <div class="form-group row">
                                <label for="nome" class="col-2 col-form-label">ID</label>
                                <div class="col-10">
                                    <input class="form-control" type="text" id="idcliente" readonly name="idcliente" value="<?php echo $resultado['idcliente'];?>">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="nome" class="col-2 col-form-label">Nome Completo</label>
                                <div class="col-10">
                                    <input class="form-control" type="text" id="nome" name="nome" value="<?php echo $resultado['nome'];?>">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="email" class="col-2 col-form-label">Email</label>
                                <div class="col-10">
                                    <input class="form-control" type="email" id="email" name="email" value="<?php echo $resultado['email'];?>">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="cpf" class="col-2 col-form-label">CPF</label>
                                <div class="col-10">
                                    <input class="form-control" type="text" id="cpf" name="cpf" value="<?php echo $resultado['cpf'];?>">
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="telefone1" class="col-2 col-form-label">Telefone 1</label>
                                <div class="col-10">
                                    <input class="form-control" type="tel" id="telefone" name="telefone" value="<?php echo $resultado['telefone'];?>">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="telefone2" class="col-2 col-form-label">Telefone 2</label>
                                <div class="col-10">
                                    <input class="form-control" type="tel" value="<?php echo $resultado['telefone2'];?>" id="telefone2" name="telefone2">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="bairro" class="col-2 col-form-label">Bairro</label>
                                <div class="col-10">
                                    <input class="form-control" type="text" value="<?php echo $resultado['bairro'];?>" id="bairro" name="bairro">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="numero" class="col-2 col-form-label">Número Residencial</label>
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
                            <input class="btn btn-success" type="submit">
                        </form>
                        <br>
                        <br>

                    </div>
                </div>
        </div>
    </div>
</body>

</html>
