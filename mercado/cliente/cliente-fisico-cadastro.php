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
                    <h3 class="menu">Cadastro Cliente</h3>
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
                            <li><a href="cliente-fisico-consulta.php">Consultar</a></li>
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
            
                
            
                if ($_POST){
                    include "../../php/conexao.php";
                    $sql = "insert into cliente (nome, telefone, telefone2, bairro, numero, logradouro, complemento, cpf, sexo, dataCadastro, email) values (:nome, :telefone1, :telefone2, :bairro, :numero, :logradouro, :complemento, :cpf, :sexo, :dataCadastro, :email)";
                    $prepara = $conexao->prepare($sql);
                    $prepara->bindValue(":nome", $_POST['nome']);
                    $prepara->bindValue(":telefone1", $_POST['telefone1']);
                    $prepara->bindValue(":telefone2", $_POST['telefone2']);
                    $prepara->bindValue(":bairro", $_POST['bairro']);
                    $prepara->bindValue(":numero", $_POST['numero']);
                    $prepara->bindValue(":logradouro", $_POST['logradouro']);
                    $prepara->bindValue(":complemento", $_POST['complemento']);
                    $prepara->bindValue(":cpf", $_POST['cpf']);
                    $prepara->bindValue(":sexo", $_POST['sexo']);
                    $prepara->bindValue(":dataCadastro", $_POST['data']);
                    $prepara->bindValue(":email", $_POST['email']);
                    $prepara->execute();
                    echo "<h2>Cliente cadastrado com sucesso </h2>";
                }

            ?>
                <div class="col-sm-8">
                    <div>
                        <span class="glyphicon glyphicon-tasks"></span>
                    </div>
                    <div class="row">
                        <form method="post" action="cliente-fisico-cadastro.php">
                            <div class="form-group row">
                                <label for="nome" class="col-2 col-form-label">Nome Completo</label>
                                <div class="col-10">
                                    <input class="form-control" type="text" id="nome" name="nome">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="email" class="col-2 col-form-label">Email</label>
                                <div class="col-10">
                                    <input class="form-control" type="email" id="email" name="email">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="cpf" class="col-2 col-form-label">CPF</label>
                                <div class="col-10">
                                    <input class="form-control" type="text" id="cpf" name="cpf">
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="telefone1" class="col-2 col-form-label">Telefone 1</label>
                                <div class="col-10">
                                    <input class="form-control" type="tel" id="telefone1" name="telefone1">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="telefone2" class="col-2 col-form-label">Telefone 2</label>
                                <div class="col-10">
                                    <input class="form-control" type="tel" value="" id="telefone2" name="telefone2">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="bairro" class="col-2 col-form-label">Bairro</label>
                                <div class="col-10">
                                    <input class="form-control" type="text" value="" id="bairro" name="bairro">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="numero" class="col-2 col-form-label">Número Residencial</label>
                                <div class="col-10">
                                    <input class="form-control" type="text" value="" id="numero" name="numero">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="logradouro" class="col-2 col-form-label">Logradouro</label>
                                <div class="col-10">
                                    <input class="form-control" type="text" value="" id="logradouro" name="logradouro">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="complemento" class="col-2 col-form-label">Complemento</label>
                                <div class="col-10">
                                    <input class="form-control" type="text" value="" id="complemento" name="complemento">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="data" class="col-2 col-form-label">Data</label>
                                <div class="col-10">
                                    <input class="form-control" type="date" value="" id="data" name="data">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="example-text-input" class="col-2 col-form-label">Sexo</label>
                                <div class="col-10">
                                    <label class="radio-inline">
                              <input type="radio" name="sexo" id="sexo" value="M"> Masculino
                            </label>
                                    <label class="radio-inline">
                              <input type="radio" name="sexo" id="sexo" value="F"> Feminino
                            </label>
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
