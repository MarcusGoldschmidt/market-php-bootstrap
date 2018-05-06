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

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

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
                    <h3 class="menu">Cadastro Fornecedor</h3>
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
                    <li><a href="fornecedor-inicio.php">Início Fornecedor</a></li>
                    <div class="topico">
                        <ul class="nav navbar-nav">
                            <li class="active"><a href="fornecedor-cadastro.php">Cadastrar</a></li>
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
                            <li class="active"><a href="fornecedor-cadastro.php">Cadastrar</a></li>
                            <li><a href="fornecedor-consultar.php">Consultar</a></li>
                        </ul>
                    </div>
                </ul><br>
            </div>
            <br>
            <?php
                if ($_POST){
                    include "../../php/conexao.php";
                    $sql = "insert into fornecedor (nome, cnpj, telefone, bairro, numero, logradouro, complemento, cep, cidade, estado,  dataCadastro, funcionario_idfuncionario) values (:nomefornecedor, :cnpj, :telefone, :bairro, :numero, :logradouro, :complemento, :cep, :cidade, :estado,  :dataCadastro, :idfun)";
                    $prepara = $conexao->prepare($sql);
                    $prepara->bindValue(":nomefornecedor", $_POST['nomefornecedor']);
                    $prepara->bindValue(":cnpj", $_POST['cnpj']);
                    $prepara->bindValue(":telefone", $_POST['telefone']);
                    $prepara->bindValue(":bairro", $_POST['bairro']);
                    $prepara->bindValue(":logradouro", $_POST['logradouro']);
                    $prepara->bindValue(":numero", $_POST['numero']);
                    $prepara->bindValue(":complemento", $_POST['complemento']);
                    $prepara->bindValue(":cep", $_POST['cep']);
                    $prepara->bindValue(":cidade", $_POST['cidade']);
                    $prepara->bindValue(":estado", $_POST['estado']);
                    $prepara->bindValue(":dataCadastro", $_POST['dataCadastro']);
                    $prepara->bindValue(":idfun", $_POST['recebeFun']);
                    $prepara->execute();
                    echo "<h2>Fornecedor cadastrado com sucesso </h2>";
                }

            ?>

                <script>
                    function buscar(str) {
                        if (str.length == 0) {
                            document.getElementById("recebeFun").innerHTML = "";
                            return;
                        } else {
                            var xmlhttp = new XMLHttpRequest();
                            xmlhttp.onreadystatechange = function() {
                                if (this.readyState == 4 && this.status == 200) {
                                    document.getElementById("recebeFun").innerHTML = this.responseText;
                                }
                            };
                            xmlhttp.open("GET", "buscar.php?nome=" + str, true);
                            xmlhttp.send();
                        }

                    }

                </script>
                <div class="col-sm-8">
                    <div>
                        <span class="glyphicon glyphicon-tasks"></span>
                    </div>
                    <div class="row">
                        <form action="fornecedor-cadastro.php" method="post">
                            <div class="form-group row">
                                <label for="example-text-input" class="col-2 col-form-label">Funcionário</label>
                                <div id="nomeTexto" class="col-10">
                                    <input class="form-control" onkeyup="buscar(this.value)" type="text" value="" id="nomeFun" name="nomeFun">
                                </div>

                            </div>
                            <div class="form-group row">
                                <div class="col-sm-3">
                                    <div class="form-group">
                                        <select class="form-control" id="recebeFun" name="recebeFun">
                                        <option id='optionNome' value='' selected>Selecionar Funcionário</option>";
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="example-text-input" class="col-2 col-form-label">Nome Fornecedor</label>
                                <div class="col-10">
                                    <input class="form-control" type="text" value="" id="nomefornecedor" name="nomefornecedor">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="cpf" class="col-2 col-form-label">CNPJ</label>
                                <div class="col-10">
                                    <input class="form-control" type="text" id="cnpj" name="cnpj">
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="telefone1" class="col-2 col-form-label">Telefone</label>
                                <div class="col-10">
                                    <input class="form-control" type="tel" id="telefone" name="telefone">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="bairro" class="col-2 col-form-label">Bairro</label>
                                <div class="col-10">
                                    <input class="form-control" type="text" value="" id="bairro" name="bairro">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="numero" class="col-2 col-form-label">Número</label>
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
                                <label for="complemento" class="col-2 col-form-label">CEP</label>
                                <div class="col-10">
                                    <input class="form-control" type="text" value="" id="cep" name="cep">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="complemento" class="col-2 col-form-label">Cidade</label>
                                <div class="col-10">
                                    <input class="form-control" type="text" value="" id="cidade" name="cidade">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="complemento" class="col-2 col-form-label">Estado</label>
                                <div class="col-10">
                                    <input class="form-control" type="text" value="" id="estado" name="estado">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="data" class="col-2 col-form-label">Data Cadastro</label>
                                <div class="col-10">
                                    <input class="form-control" type="date" value="" id="dataCadastro" name="dataCadastro">
                                </div>
                            </div>
                            <button type="submit" class="btn btn-success"><span class="glyphicon glyphicon-ok"></span> Realizar cadastro</button>
                        </form>
                    </div>
                    
                    <br>
                    <br>

                </div>
        </div>
    </div>

</body>

</html>
