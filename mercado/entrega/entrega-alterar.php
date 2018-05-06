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
                    <h3 class="menu">Alterar Entrega</h3>
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
                    <li><a href="entrega-cadastro.php">Entregas</a></li>
                    <li><a href="entrega-inicio.php">Início Entregas</a></li>
                    <div class="topico">
                        <ul class="nav nav-pills nav-stacked">
                            <li><a href="entrega-cadastro.php">Cadastrar</a></li>
                            <li><a href="entrega-consultar.php">Consultar</a></li>
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
                    <li><a href="entrega-cadastro.php">Entregas</a></li>
                    <li><a href="entrega-inicio.php">Início Entregas</a></li>
                    <div class="topico">
                        <ul class="nav nav-pills nav-stacked">
                            <li><a href="entrega-cadastro.php">Cadastrar</a></li>
                            <li><a href="entrega-consultar.php">Consultar</a></li>
                        </ul>
                    </div>
                </ul><br>
            </div>
            <br>
            <div class="col-sm-10">
                <div class="row">
                    <div class="col-sm-2">
                        <span class="glyphicon glyphicon-tasks"></span>
                    </div>
                </div>

                <?php
                
                    $_GET ? $id = $_GET ['identrega']  : $id = $_POST['identrega'];
                
                    
                    if($_POST){
                        
                        include "../../php/conexao.php";

                         $sql = "update entrega set logradouro = :logradouro, bairro = :bairro, telefone = :telefone, numero = :numero, complemento = :complemento, dataEntrega = :dataEntrega where identrega = :identrega";
                         $alteracao = $conexao->prepare($sql);
                         $alteracao->bindValue(":identrega", $id);
                         $alteracao->bindValue(":logradouro", $_POST['logradouro']);
                         $alteracao->bindValue(":bairro", $_POST['bairro']);
                         $alteracao->bindValue(":telefone", $_POST['telefone']);
                         $alteracao->bindValue(":numero", $_POST['numero']);
                         $alteracao->bindValue(":complemento", $_POST['complemento']);
                         $alteracao->bindValue(":dataEntrega", $_POST['dataentrega']);
                    if ($alteracao->execute())
                    echo "<h2>Alterado com sucesso</h2>";
                    else echo "<h2>Houve algum erro</h2>";
                    }
                    
                
                    include "../../php/conexao.php";
                    $sql = "select * from entrega inner join cliente on idcliente = cliente_idcliente where identrega = :identrega";
                    $selecao = $conexao->prepare($sql);
                    $selecao->bindValue(":identrega", $id);   
                    $selecao->execute();
                    $resultado = $selecao->fetch();
                
                ?>
                    <form method="post" action="entrega-alterar.php">
                        <div class="form-group row">
                            <label for="nome" class="col-2 col-form-label">ID Entrega</label>
                            <div class="col-10">
                                <input class="form-control" type="text" id="identrega" readonly name="identrega" value="<?php echo $resultado['identrega'];?>">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="nome" class="col-2 col-form-label">ID Venda</label>
                            <div class="col-10">
                                <input class="form-control" type="text" id="idvenda" readonly name="idvenda" value="<?php echo $resultado['venda_idvenda'];?>">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="nome" class="col-2 col-form-label">ID CLiente</label>
                            <div class="col-10">
                                <input class="form-control" type="text" id="idcliente" readonly name="idcliente" value="<?php echo $resultado['cliente_idcliente'];?>">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="nome" class="col-2 col-form-label">Nome Cliente</label>
                            <div class="col-10">
                                <input class="form-control" type="text" id="nomecliente" readonly name="nomecliente" value="<?php echo $resultado['nome'];?>">
                            </div>
                        </div>
                        <?php
                        
                            include "../../php/conexao.php";
                            $sql = "select * from entrega where identrega = :identrega";
                            $selecao = $conexao->prepare($sql);
                            $selecao->bindValue(":identrega", $id);   
                            $selecao->execute();
                            $resultado = $selecao->fetch();
                
                        ?>
                        
                        
                        <div class="form-group row">
                            <label for="nome" class="col-2 col-form-label">Logradouro</label>
                            <div class="col-10">
                                <input class="form-control" type="text" id="logradouro" name="logradouro" value="<?php echo $resultado['logradouro'];?>">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="nome" class="col-2 col-form-label">Bairro</label>
                            <div class="col-10">
                                <input class="form-control" type="text" id="bairro" name="bairro" value="<?php echo $resultado['bairro'];?>">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="nome" class="col-2 col-form-label">Telefone</label>
                            <div class="col-10">
                                <input class="form-control" type="text" id="telefone" name="telefone" value="<?php echo $resultado['telefone'];?>">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="nome" class="col-2 col-form-label">Número</label>
                            <div class="col-10">
                                <input class="form-control" type="text" id="numero" name="numero" value="<?php echo $resultado['numero'];?>">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="nome" class="col-2 col-form-label">Complemento</label>
                            <div class="col-10">
                                <input class="form-control" type="text" id="complemento" name="complemento" value="<?php echo $resultado['complemento'];?>">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="nome" class="col-2 col-form-label">Data Entrega</label>
                            <div class="col-10">
                                <input class="form-control" type="date" id="dataentrega" name="dataentrega" value="<?php echo $resultado['dataEntrega'];?>">
                            </div>
                        </div>
                        <input class="btn btn-success" type="submit">
                    </form>

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
