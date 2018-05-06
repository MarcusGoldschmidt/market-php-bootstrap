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
                    <span class="glyphicon glyphicon-road"></span>
                </div>
                <div class="col-sm-9">
                    <h3 class="menu">Página Inicial</h3>
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
                    <li class="active"><a href="entrega-inicio.php">Início Entregas</a></li>
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
                    <li class="active"><a href="entrega-inicio.php">Início Entregas</a></li>
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
                <div>
                    <span class="glyphicon glyphicon-tasks"></span>
                </div>
                <div class="row">
                    <div class="col-sm-3">
                        <a href="entrega-cadastro.php">
                            <div class="well">
                                <div class="row">
                                    <div class="col-sm-8">
                                        <h2>Cadastrar</h2>
                                        <div class="row">
                                            <div class="col-sm-4">
                                                <p>Acessar</p>
                                            </div>
                                            <div class="col-sm-2">
                                                <span class="glyphicon glyphicon-circle-arrow-right"></span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-3">
                                        <span class="glyphicon glyphicon-list-alt"></span>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="col-sm-3">
                        <a href="entrega-consultar.php">
                            <div class="well">
                                <div class="row">
                                    <div class="col-sm-8">
                                        <h2>Consultar</h2>
                                        <div class="row">
                                            <div class="col-sm-4">
                                                <p>Acessar</p>
                                            </div>
                                            <div class="col-sm-2">
                                                <span class="glyphicon glyphicon-circle-arrow-right"></span>
                                            </div>
                                        </div>

                                    </div>
                                    <div class="col-sm-3">
                                        <span class="glyphicon glyphicon-search"></span>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>

                </div>
            </div>
        </div>
    </div>

</body>

</html>
