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
                    <span class="glyphicon glyphicon-search"></span>
                </div>
                <div class="col-sm-9">
                    <h3 class="menu">Consulta Cliente Jurídico</h3>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <h3 class="usuario-nome">'Nome do usuário logado'</h3>
        </div>
        <div class="col-md-1">
            <div class="row">
                <div class="col-sm-1">
                    <a href="../login-sistema.html">
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
                    <li><a href="../inicial.html">Início</a></li>
                    <li><a href="venda/venda-cadastro.html">Realizar Venda</a></li>
                    <li><a href="entrega/entrega-cadastro.html">Entregas</a></li>
                    <li><a href="produtos-inicio.html">Inicio Produtos</a></li>
                    <div class="topico">
                        <ul class="nav navbar-nav">
                            <li><a href="produtos-cadastro.html">Cadastrar</a></li>
                            <li><a href="produtos-alterar.html">Alterar</a></li>
                            <li class="active"><a href="-consulta.html">Consultar</a></li>
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
                    <li><a href="../inicial.html">Início</a></li>
                    <li><a href="venda/venda-cadastro.html">Realizar Venda</a></li>
                    <li><a href="entrega/entrega-cadastro.html">Entregas</a></li>
                    <li><a href="produtos-inicio.html">Inicio Produtos</a></li>
                    <div class="topico">
                        <ul class="nav nav-pills nav-stacked">
                            <li><a href="produtos-cadastro.html">Cadastrar</a></li>
                            <li><a href="produtos-alterar.html">Alterar</a></li>
                            <li class="active"><a href="produtos-consulta.html">Consultar</a></li>
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
                    <div class="col-sm-2">
                        <h3>Pesquisar por:</h3>
                    </div>
                    <div class="col-sm-2">
                        <div class="form-group">
                            <select class="form-control" id="sel1">
                                <option>ID</option>
                                <option>Nome</option>
                                <option>Preço</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-sm-2">
                        <input class="form-control" type="search" value="Pesquise aqui" id="example-search-input">
                    </div>
                    <div class="col-sm-2">
                        <button class="btn btn-primary"><span class="glyphicon glyphicon-search"></span> Pesquisar</button>
                    </div>
                </div>
                <div class="consulta-cliente-fisico">
                    <table class="table table-hover table-striped">
                        <tr>
                            <th>Id</th>
                            <th>Nome</th>
                            <th>Descrição</th>
                            <th>Preço</th>
                            <th>Quantidade</th>
                            <th>Data de Cadastro</th>
                        </tr>
                        <tr>
                            <td>1</td>
                            <td>Caneca Xovem nerd</td>
                            <td>Utilitária</td>
                            <td>59.99</td>
                            <td>42</td>
                            <td>21/05/2005</td>
                        </tr>
                    </table>
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
