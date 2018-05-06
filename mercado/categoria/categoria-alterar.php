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
                    <h3 class="menu">Alterar Categoria</h3>
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
                    <li><a href="categoria-inicio.php">Inicio Categoria</a></li>

                    <div class="topico">
                        <ul class="nav nav-pills nav-stacked">
                            <li><a href="categoria-cadastro.php">Cadastrar</a></li>
                            <li><a href="categoria-consultar.php">Consultar</a></li>
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
                    <li><a href="categoria-inicio.php">Inicio Categoria</a></li>
                    <div class="topico">
                        <ul class="nav nav-pills nav-stacked">
                            <li><a href="categoria-cadastro.php">Cadastrar</a></li>
                            <li><a href="categoria-consultar.php">Consultar</a></li>
                        </ul>
                    </div>

                </ul><br>
            </div>
            <br>
            <?php
    $_GET ? $id = $_GET ['idcategoria']  : $id = $_POST['idcategoria'];
    include "../../php/conexao.php";
    
    if ($_POST){
        $sql = "update categoria set nome = :nome, idcategoria = :idcategoria, descricao = :descricao where idcategoria = :idcategoria";
        $alteracao = $conexao->prepare($sql);
        $alteracao->bindValue(":nome", $_POST['nome']);
        $alteracao->bindValue(":idcategoria", $id);
        $alteracao->bindValue(":descricao", $_POST['descricao']);
        if ($alteracao->execute())
            echo "<h3>Alterado com sucesso</h3>";
        else echo "Houve algum erro";
    }
    
    include "../../php/conexao.php";
    $sql = "select * from categoria where idcategoria = :idcategoria";
    $selecao = $conexao->prepare($sql);
    $selecao->bindValue(":idcategoria", $id);   
    $selecao->execute();
    $resultado = $selecao->fetch();
    ?>
                <div class="col-sm-10">
                    <div class="row">
                        <div class="col-sm-2">
                            <span class="glyphicon glyphicon-tasks"></span>
                        </div>
                        <form action="categoria-alterar.php" method="post">

                            <div class="row">
                                <div class="form-group row">
                                    <label for="nome" class="col-2 col-form-label">ID</label>
                                    <div class="col-10">
                                        <input class="form-control" type="text" id="idcategoria" readonly name="idcategoria" value="<?php echo $resultado['idcategoria'];?>">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="nome" class="col-2 col-form-label">Nome</label>
                                    <div class="col-10">
                                        <input class="form-control" type="text" id="nome" name="nome" value="<?php echo $resultado['nome'];?>">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="nome" class="col-2 col-form-label">Descrição</label>
                                    <div class="col-10">
                                        <input class="form-control" type="text" id="descricao" name="descricao" value="<?php echo $resultado['descricao'];?>">
                                    </div>
                                </div>
                                <br>
                                <br>

                            </div>

                            <input class="btn btn-success" type="submit">

                        </form>
                    </div>
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
