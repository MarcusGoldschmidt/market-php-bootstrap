<!DOCTYPE html>
<html lang="pt-br">

<head>
    <title>Mercadoria</title>
    <meta charset="utf-8">

    <link rel="icon" href="../assets/imagens/fav.png" />

    <link href="https://fonts.googleapis.com/css?family=Raleway" rel="stylesheet">

    <link rel="stylesheet" href='../assets/css/estilo.css'>

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

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
                    <h3 class="menu">Realizar venda</h3>
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
                    <li><a href="venda-inicio.php">Inicio Cliente</a></li>
                    <div class="topico">
                        <ul class="nav nav-pills nav-stacked">
                            <li class="active"><a href="venda-cadastro.php">Cadastrar</a></li>
                            <li><a href="venda-consulta.php">Consultar</a></li>
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
                    <li><a href="venda-inicio.php">Inicio Venda</a></li>
                    <div class="topico">
                        <ul class="nav nav-pills nav-stacked">
                            <li class="active"><a href="venda-cadastro.php">Cadastrar</a></li>
                            <li><a href="venda-consulta.php">Consultar</a></li>
                        </ul>
                    </div>
                </ul><br>
            </div>
            <br>

            <br>
            <div>
                <span class="glyphicon glyphicon-tasks"></span>
            </div>

            <div class="col-sm-10">
                <div class="form-group row">
                    <form method="post" action="venda-cadastro.php">
                        <div class="col-sm-3">
                            <label for="nomecliente" class="col-2 col-form-label">Cliente</label>
                            <input class="form-control" type="text" value="" id="nomecliente" name="nomecliente">
                            <br>
                            <div class="col-sm-1">
                                <input class="btn btn-primary" type="submit">
                            </div>
                        </div>
                    </form>
                    <div class="col-sm-1"></div>
                    <div class="col-sm-3">

                        <table class="table table-hover table-striped">

                            <div>
                                <h2>Selecionar Cliente</h2>
                                <tr>
                                    <th>Id</th>
                                    <th>Nome</th>
                                    <th>Selecionar</th>
                                </tr>
                                <?php
                                                    include "../../php/conexao.php";
                                                    
                                                    
                                                    $_GET['idcliente'] = isset($_GET['idcliente']) ? $_GET['idcliente'] : null;
                                                    $_POST['idvenda'] = isset($_POST['idvenda']) ? $_POST['idvenda'] : null;
                                                    $_POST['nomecliente'] = isset($_POST['nomecliente']) ? $_POST['nomecliente'] : null;
                                                    // seta o valor null para o nome cliente
                                
                                
                                                    date_default_timezone_set('America/Sao_Paulo');
                                                    $date = date('Y-m-d');
                                                          

                                
                                                    $sql = "insert into venda (valor, data, cliente_idcliente) values (:valor, :data, :cliente_idcliente)";
                                                    $prepara = $conexao->prepare($sql);
                                                    $prepara->bindValue(":valor", '0');
                                                    $prepara->bindValue(":data", $date);
                                                    $prepara->bindValue(":cliente_idcliente", $_GET['idcliente']);
                                                    $prepara->execute();
                                                    
                                                    $sql = "select * from venda where idvenda in (Select max(idvenda) from venda)";
                                                    $resultados = $conexao->prepare($sql);
                                                    $resultados->execute();
                                                    $idvenda = '';
                                                    foreach($resultados as $linha){
                                                    $idvenda = $linha['idvenda'];
                                                    }
                                                  
                                
                                                    $sql = "select * from cliente where nome like :nome";
                                                    $resultados = $conexao->prepare($sql);
                                                    $resultados->bindValue(":nome", "%".$_POST['nomecliente']."%");
                                                    $resultados->execute();

                                                    foreach($resultados as $linha){
                                                        echo "<tr>";
                                                        echo "<td>".$linha['idcliente']."</td>";
                                                        echo "<td>".$linha['nome']."</td>";
                                                        echo "<td><a href='venda-cadastro.php?idcliente=".$linha['idcliente']."&idvenda=".$idvenda."'>"."<button type='button' class='btn btn-primary'>"."Inserir"."</button></a></td>";
                                                        echo "</tr>";
                                                    }
                                
                                                        
                                                   

                                    ?>
                            </div>
                        </table>

                    </div>
                </div>
                <div class="form-group row">
                    <div class="col-sm-8">
                        <div class="col-10" id="venda">
                            <hr/>
                            <div>
                                <div class="venda">
                                    <div class="well">
                                        <div class="menu-top">
                                            <div class="col-md-10">
                                                <div class="row">
                                                    <div class="col-sm-1">
                                                        <span class="glyphicon glyphicon-plus"></span>
                                                    </div>
                                                    <div class="col-sm-7">
                                                        <h3 class="menu">Adicionar Produto:</h3>
                                                    </div>
                                                    <div class="col-sm-2"></div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="pad-top">
                                                <div class="col-sm-1"></div>
                                                <div class="col-sm-3">
                                                    <h4>Consultar Por:</h4>
                                                </div>
                                                <div class="col-sm-2">
                                                    <h4>Nome</h4>
                                                </div>
                                                <div class="col-sm-4">
                                                    <input onkeyup="buscar(this.value)" class="form-control" type="text" id="palavra" name="palavra">
                                                </div>
                                            </div>
                                        </div>

                                        <br>
                                        <hr/>
                                        <div id="recebepro" class="table table-hover table-striped">
                                            <h3>Aqui Aparecerá os produtos pesquisados</h3>
                                        </div>
                                        <script>
                                            function buscar(str) {
                                                if (str.length == 0) {
                                                    document.getElementById("recebepro").innerHTML = "";
                                                    return;
                                                } else {
                                                    var xmlhttp = new XMLHttpRequest();
                                                    xmlhttp.onreadystatechange = function() {
                                                        if (this.readyState == 4 && this.status == 200) {
                                                            document.getElementById("recebepro").innerHTML = this.responseText;
                                                        }
                                                    };
                                                    xmlhttp.open("GET", "buscar.php?q=" + str, true);
                                                    xmlhttp.send();
                                                }



                                            }

                                            function adicionarPro(idpro) {

                                                var query = location.search.slice(1);
                                                var partes = query.split('&');
                                                var data = {};
                                                partes.forEach(function(parte) {
                                                    var chaveValor = parte.split('=');
                                                    var chave = chaveValor[0];
                                                    var valor = chaveValor[1];
                                                    data[chave] = valor;
                                                });

                                                var idvenda = data['idvenda'];

                                                var produto = "quantidadeVenda";
                                                var idproduto = produto.concat(idpro);

                                                var quant = document.getElementById(idproduto).value;

                                                if (idpro.length == 0) {
                                                    document.getElementById("recebeVendaPro").innerHTML = "";
                                                    return;
                                                } else {
                                                    var xmlhttp = new XMLHttpRequest();
                                                    xmlhttp.onreadystatechange = function() {
                                                        if (this.readyState == 4 && this.status == 200) {
                                                            document.getElementById("recebeVendaPro").innerHTML = this.responseText;


                                                            var xmlhttp = new XMLHttpRequest();
                                                            xmlhttp.onreadystatechange = function() {
                                                                if (this.readyState == 4 && this.status == 200) {
                                                                    document.getElementById("valorTotal").innerHTML = this.responseText;
                                                                }
                                                            };
                                                            xmlhttp.open("GET", "valortotal.php?idvenda=" + idvenda, true);
                                                            xmlhttp.send();






                                                        }
                                                    };
                                                    xmlhttp.open("GET", "add_produto.php?idvenda=" + idvenda + "&quantidade=" + quant + "&idproduto=" + idpro, true);
                                                    xmlhttp.send();
                                                }

                                                console.log(idvenda);
                                                console.log(quant);
                                                console.log(idpro);

                                            }

                                            function quantidade(idpro) {


                                                var query = location.search.slice(1);
                                                var partes = query.split('&');
                                                var data = {};
                                                partes.forEach(function(parte) {
                                                    var chaveValor = parte.split('=');
                                                    var chave = chaveValor[0];
                                                    var valor = chaveValor[1];
                                                    data[chave] = valor;
                                                });

                                                var idvenda = data['idvenda'];


                                                var produto = "produto";
                                                var aspas = "";
                                                var res = produto.concat(idpro);

                                                var id = res.concat(aspas);

                                                console.log(id);

                                                var quant = document.getElementById(id).value;

                                                if (idpro.length == 0) {
                                                    document.getElementById("recebeVendaPro").innerHTML = "";

                                                } else {
                                                    var xmlhttp = new XMLHttpRequest();
                                                    xmlhttp.onreadystatechange = function() {

                                                        document.getElementById("recebeVendaPro").innerHTML = this.responseText;

                                                        var xmlhttp = new XMLHttpRequest();
                                                        xmlhttp.onreadystatechange = function() {
                                                            if (this.readyState == 4 && this.status == 200) {
                                                                document.getElementById("valorTotal").innerHTML = this.responseText;
                                                            }
                                                        };
                                                        xmlhttp.open("GET", "valortotal.php?idvenda=" + idvenda, true);
                                                        xmlhttp.send();

                                                    };
                                                    xmlhttp.open("GET", "update_pro_quantidade.php?idvenda=" + idvenda + "&quantidade=" + quant + "&idproduto=" + idpro, true);
                                                    xmlhttp.send();
                                                }



                                            }

                                            function excluir(idpro) {


                                                var query = location.search.slice(1);
                                                var partes = query.split('&');
                                                var data = {};
                                                partes.forEach(function(parte) {
                                                    var chaveValor = parte.split('=');
                                                    var chave = chaveValor[0];
                                                    var valor = chaveValor[1];
                                                    data[chave] = valor;
                                                });

                                                var idvenda = data['idvenda'];


                                                var produto = "produto";
                                                var aspas = "";
                                                var res = produto.concat(idpro);

                                                var id = res.concat(aspas);

                                                console.log(id);

                                                var quant = document.getElementById(id).value;

                                                if (idpro.length == 0) {
                                                    document.getElementById("recebeVendaPro").innerHTML = "";

                                                } else {
                                                    var xmlhttp = new XMLHttpRequest();
                                                    xmlhttp.onreadystatechange = function() {

                                                        document.getElementById("recebeVendaPro").innerHTML = this.responseText;

                                                        var xmlhttp = new XMLHttpRequest();
                                                        xmlhttp.onreadystatechange = function() {
                                                            if (this.readyState == 4 && this.status == 200) {
                                                                document.getElementById("valorTotal").innerHTML = this.responseText;
                                                            }
                                                        };
                                                        xmlhttp.open("GET", "valortotal.php?idvenda=" + idvenda, true);
                                                        xmlhttp.send();

                                                    };
                                                    xmlhttp.open("GET", "excluir.php?idvenda=" + idvenda + "&idproduto=" + idpro, true);
                                                    xmlhttp.send();
                                                }



                                            }

                                            function concluirvenda() {

                                                var query = location.search.slice(1);
                                                var partes = query.split('&');
                                                var data = {};
                                                partes.forEach(function(parte) {
                                                    var chaveValor = parte.split('=');
                                                    var chave = chaveValor[0];
                                                    var valor = chaveValor[1];
                                                    data[chave] = valor;
                                                });

                                                var idvenda = data['idvenda'];
                                                var idcliente = data['idcliente'];
                                                
                                                console.log(idvenda);

                                                var xmlhttp = new XMLHttpRequest();
                                                xmlhttp.onreadystatechange = function() {
                                                    if (this.readyState == 4 && this.status == 200) {
                                                        document.getElementById("recebeVendaPro").innerHTML = "";
                                                        document.getElementById("recebepro").innerHTML = "";
                                                        
                                                        document.getElementById("recebeVendaPro").innerHTML = this.responseText;
                                                    }
                                                };
                                                xmlhttp.open("GET", "realizarVenda.php?idcliente=" + idcliente + "&idvenda=" + idvenda, true);
                                                xmlhttp.send();




                                            }

                                        </script>
                                    </div>
                                </div>
                            </div>
                            <h3>Cliente:
                                <?php 
                                 if ($_GET) $nome = $_GET{'idcliente'}; else $nome = "";
                                // deu erro de indefinido, coloca isso que é gg
                                // ou seta null, o que der vc tenta
                                
                                include "../../php/conexao.php";
                                $sql = "select * from cliente where idcliente = :idcliente";
                                $selecao = $conexao->prepare($sql);
                                $selecao->bindValue(":idcliente", $nome);  
                                $selecao->execute();
                                $resultado = $selecao->fetch();
                                
                                echo $resultado['nome'];
                                ?>
                            </h3>
                            <hr />
                            <?php
                                
                            ?>
                                <div id="recebeVendaPro">
                                    <?php
                                    
                                        include "../../php/conexao.php";
                                    
                                        $_GET['idvenda'] = isset($_GET['idvenda']) ? $_GET['idvenda'] : null;
                                    
                                        $sql = "select * from venda_has_produto 
                                                            inner join produto
                                                            on produto_idproduto = idproduto
                                                            where venda_idvenda =  :idvenda";
                                                    $resultados = $conexao->prepare($sql);
                                                    $resultados->bindValue(":idvenda", $_GET['idvenda']);
                                                    $resultados->execute();
                                                        
                                                    echo "<table class='table table-hover table-striped'>";

                                                    echo "<tr>
                                                            <th>Id</th>
                                                            <th>Nome</th>
                                                            <th>Preço unitário</th>
                                                            <th>Quantidade</th>
                                                            <th>Alterar</th>
                                                            <th>Excluir</th>
                                                        </tr>";

                                                    foreach($resultados as $linha){
                                                        
                                                        echo "<tr>";
                                                        echo "<td> <imput name='idprodutoVenda' id='idprodutoVenda' readonly value'".$linha['idproduto']."'>".$linha['idproduto']."</td>";
                                                        echo "<td>".$linha['nome']."</td>";
                                                        echo "<td>".$linha['preco']."</td>";
                                                        echo "<td><input class='form-control' id='produto".$linha['idproduto']."' type='number' value='".$linha['quantidadeVenda']."' name='quantidadeVenda'></td>";
                                                        
                                                        echo "<td>"."<imput onclick=\"quantidade('".$linha['idproduto']."')\" type='submit' class='btn btn-warning' >"."Alterar"."</td>";
                                                        
                                                        echo "<td>"."<imput onclick=\"excluir('".$linha['idproduto']."')\" type='submit' class='btn btn-danger' >"."Excluir"."</td>";
                                                        echo "</tr>";
                                                        }
                                                        echo "</table>"
                                    
                                    ?>
                                </div>
                        </div>
                        <hr />
                    </div>
                </div>
                <div class="form-group row">
                    <div class="col-sm-4"></div>
                    <div class="col-sm-2"><label for="example-text-input" class="col-2 col-form-label">Data Atual</label>
                        <h3>
                            <?php 
                            date_default_timezone_set('America/Sao_Paulo');
                            $date = date('d-m-Y');
                            echo $date; 
                            ?>

                        </h3>
                    </div>
                    <div class="col-sm-2">
                        <label for="example-text-input" class="col-2 col-form-label">Valor Total</label>
                        <h3 id="valorTotal">
                        
                            <?php
                            
                                 $_GET['idvenda'] = isset($_GET['idvenda']) ? $_GET['idvenda'] : null;

                                include "../../php/conexao.php";

                                 $sql = "select * from venda_has_produto
                                 inner join produto
                                 on idproduto = produto_idproduto
                                 where venda_idvenda = :idvenda";

                                $resultados = $conexao->prepare($sql);
                                $resultados->bindValue(":idvenda", $_GET['idvenda']);
                                $resultados->execute();

                                $total = 0;

                                foreach($resultados as $linha){
                                    $totalProduto = $linha['quantidadeVenda'] * $linha['preco'];

                                    $total = $total + $totalProduto;

                                }

                                echo $total;

                            ?>
                        
                        </h3>
                    </div>
                </div>
                <hr />
                <div class="form-group row">
                    <div class="col-sm-4"></div>
                    <div class="col-sm-2"><button class="btn btn-danger"><span class="glyphicon glyphicon-remove"></span>    Cancelar Venda</button></div>
                    <div class="col-sm-2">
                        <button onclick="concluirvenda()" class="btn btn-success"><span class="glyphicon glyphicon-ok"></span>Realizar Venda</button>
                        <br>
                        <br>
                    </div>
                </div>


            </div>
        </div>

    </div>
</body>

</html>
