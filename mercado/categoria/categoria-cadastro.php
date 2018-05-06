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
                    <h3 class="menu">Cadastro Categoria</h3>
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
                            <li class="active"><a href="categoria-cadastro.php">Cadastrar</a></li>
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
                    <li><a href="../inicial.php">Inicio</a></li>
                    <li><a href="#section2">Realizar Venda</a></li>
                    <li><a href="#section3">Entregas</a></li>
                    <li><a href="categoria-inicio.php">Inicio Categoria</a></li>
                    <div class="topico">
                        <ul class="nav nav-pills nav-stacked">
                            <li class="active"><a href="categoria-cadastro.php">Cadastrar</a></li>
                            <li><a href="categoria-consultar.php">Consultar</a></li>
                        </ul>
                    </div>
                </ul><br>
            </div>
            <br>
            <?php
                if ($_POST){
                    include "../../php/conexao.php";
                    $sql = "insert into categoria (nome, descricao) values (:nome, :descricao)";
                    $prepara = $conexao->prepare($sql);
                    $prepara->bindValue(":nome", $_POST['name']);
                    $prepara->bindValue(":descricao", $_POST['descricao']);
                    $prepara->execute();
                    echo "<h2>Categoria cadastrada com sucesso </h2>";
                }

            ?>
                <div class="col-sm-10">
                    <div>
                        <span class="glyphicon glyphicon-tasks"></span>
                    </div>
                    <div class="row">
                        <form method="post" action="categoria-cadastro.php">
                            <div class="form-group row">
                                <label for="example-text-input" class="col-2 col-form-label">Nome</label>
                                <div class="col-10">
                                    <input class="form-control" type="text" value="" id="name" name="name">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="example-email-input" class="col-2 col-form-label">Descrição</label>
                                <div class="col-10">
                                    <input class="form-control" type="text" value="" id="descricao" name="descricao">
                                </div>
                            </div>
                            <button type="submit" class="btn btn-success"><span class="glyphicon glyphicon-ok"></span>Realizar cadastro</button>
                            <br>
                            <br>
                        </form>
                    </div>
                </div>
        </div>
    </div>
</body>

</html>
