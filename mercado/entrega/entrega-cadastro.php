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
                    <h3 class="menu">Cadastro Entrega</h3>
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
                            <li class="active"><a href="entrega-cadastro.php">Cadastrar</a></li>
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
                            <li class="active"><a href="entrega-cadastro.php">Cadastrar</a></li>
                            <li><a href="entrega-consultar.php">Consultar</a></li>
                        </ul>
                    </div>
                </ul><br>
            </div>
            <br>
            <div class="col-sm-8">
                <div>
                    <span class="glyphicon glyphicon-tasks"></span>
                </div>
                

                <script>
                    function buscar(str) {
                        if (str.length == 0) {
                            document.getElementById("idcliente").innerHTML = "";
                            return;
                        } else {
                            var xmlhttp = new XMLHttpRequest();
                            xmlhttp.onreadystatechange = function() {
                                if (this.readyState == 4 && this.status == 200) {
                                    document.getElementById("idcliente").innerHTML = this.responseText;
                                }
                            };
                            xmlhttp.open("GET", "buscar.php?nome=" + str, true);
                            xmlhttp.send();
                        }



                    }

                    function selecionar(str) {

                        console.log('Teste');

                        if (str.length == 0) {
                            document.getElementById("dadoscli").innerHTML = "";
                            return;
                        } else {
                            var xmlhttp = new XMLHttpRequest();
                            xmlhttp.onreadystatechange = function() {
                                if (this.readyState == 4 && this.status == 200) {
                                    document.getElementById("dadoscli").innerHTML = this.responseText;
                                }
                            };
                            xmlhttp.open("GET", "selecionarcli.php?idcliente=" + str, true);
                            xmlhttp.send();
                        }
                    }

                </script>
                
                    <?php 
                
                       
                
                        if($_POST){

                            include "../../php/conexao.php";
                            $sql = "insert into entrega (logradouro, bairro, telefone, numero, complemento, dataSaida, dataEntrega, venda_idvenda, cliente_idcliente) values (:logradouro, :bairro, :telefone, :numero, :complemento, :dataSaida, :dataEntrada, :idvenda, :idcliente)";
                            $prepara = $conexao->prepare($sql);
                            $prepara->bindValue(":logradouro", $_POST['logradouro']);
                            $prepara->bindValue(":bairro", $_POST['bairro']);
                            $prepara->bindValue(":telefone", $_POST['telefone']);
                            $prepara->bindValue(":numero", $_POST['numero']);
                            $prepara->bindValue(":complemento", $_POST['complemento']);
                            $prepara->bindValue(":dataSaida", $_POST['datasaida']);
                            $prepara->bindValue(":dataEntrada", $_POST['dataentrega']);
                            $prepara->bindValue(":idvenda", $_POST['idvenda']);
                            $prepara->bindValue(":idcliente", $_POST['idcliente']);
                            $prepara->execute();
                            if ($prepara->execute())
                            echo "<h2>Entraga Realizada com sucesso</h2>";
                            else echo "<h2>Houve algum erro</h2>";
                        }
                ?>

                <div class="row">
                    <form method="post" action="entrega-cadastro.php">
                        <div class="form-group row">
                            <label for="example-tel-input" class="col-2 col-form-label">Nome Cliente</label>
                            <div class="col-10">
                                <input onkeyup="buscar(this.value)" class="form-control" type="tel" value="" id="nomecli" name="nomecli">
                            </div>
                        </div>
                        <div class="form-group row">
                            <div class="col-sm-3">
                                <div class="form-group">
                                    <select onchange="selecionar(this.value)" class="form-control" id="idcliente" name="idcliente">
                                        <option id='optionNome' value='' selected>Selecionar Cliente</option>";
                                    </select>
                                </div>
                            </div>
                        </div>

                        <div id="dadoscli">

                        </div>
                        <div class="form-group row">
                            <label for="example-date-input" class="col-2 col-form-label">Data de Saída</label>
                            <div class="col-4">
                                <input class="form-control" type="date" value="" id="datasainda" name="datasaida">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="example-date-input" class="col-2 col-form-label">Data de Entrega</label>
                            <div class="col-4">
                                <input class="form-control" type="date" value="" id="dataentrega" name="dataentrega">
                            </div>
                        </div>
                        <button type="submit" class="btn btn-success"><span class="glyphicon glyphicon-ok"></span> Realizar cadastro</button>
                        <br>
                        <br>
                    </form>
                </div>
            </div>
        </div>
    </div>

</body>

</html>
