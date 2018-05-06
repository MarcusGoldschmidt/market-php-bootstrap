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
                    <h3 class="menu">Consulta Entrega</h3>
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
                            <li class="active"><a href="entrega-consultar.php">Consultar</a></li>
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
                            <li class="active"><a href="entrega-consultar.php">Consultar</a></li>
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
                    <form method="post" action="entrega-consultar.php">
                        <div class="col-sm-2">

                            <input class="form-control" type="search" id="busca" name="busca">

                        </div>
                        <div class="col-sm-2">
                            <button type="submit" class="btn btn-primary"><span class="glyphicon glyphicon-search"></span> Pesquisar</button>
                        </div>
                    </form>
                </div>
                <div class="consulta-cliente-fisico">
                    <table class="table table-hover table-striped">
                        <tr>
                            <th>ID Cliente</th>
                            <th>ID Venda</th>
                            <th>ID Entrega</th>
                            <th>Telefone</th>
                            <th>Logradouro</th>
                            <th>Bairro</th>
                            <th>Número</th>
                            <th>Complemento</th>
                            <th>Saída</th>
                            <th>Entrega</th>
                            <th>Alterar</th>
                            <th>Excluir</th>
                        </tr>

                        <?php
                        
                        if($_GET){
                            
                            include "../../php/conexao.php";
                            $sql = "delete from entrega where identrega = :identrega";
                            $excluir = $conexao->prepare($sql);
                            $excluir->bindValue(":identrega", $_GET['identrega']);
                            $excluir->execute();
                            echo "<h2>Excluido com sucesso</h2>";
                            
                        }
                        
                        if($_POST){
                        
                            include "../../php/conexao.php";
                            $sql = "select * from cliente 
                                    inner join entrega
                                    on idcliente = cliente_idcliente
                                    where nome like :nome";
                                        $resultados = $conexao->prepare($sql);
                                        $resultados->bindValue(":nome", "%".$_POST['busca']."%"); //foi feito direto para pegar o valor do nome que é o input de pesquisa
                                        $resultados->execute();
                            
                                        foreach($resultados as $linha){        
                                            echo "<tr>";
                                            
                                            echo "<td>".$linha['idcliente']."</td>";
                                            echo "<td>".$linha['venda_idvenda']."</td>";
                                            echo "<td>".$linha['identrega']."</td>";
                                            echo "<td>".$linha['telefone']."</td>";
                                            echo "<td>".$linha['logradouro']."</td>";
                                            echo "<td>".$linha['bairro']."</td>";
                                            echo "<td>".$linha['numero']."</td>";
                                            echo "<td>".$linha['complemento']."</td>";
                                            echo "<td>".$linha['dataSaida']."</td>";
                                            echo "<td>".$linha['dataEntrega']."</td>";

                                            //botoes
                                            
                                            echo "<td><a href='entrega-alterar.php?identrega=".$linha['identrega']."'<button class='btn btn-warning'><span class='glyphicon glyphicon-pencil'></span> Alterar</button></a></td>";
                                            echo "<td><a href='entrega-consultar.php?identrega=".$linha['identrega']."'><button class='btn btn-danger'><span class='glyphicon glyphicon-remove'></span>Excluir</button></a></td>";

                                            echo "</tr>";
                                        }
                        }
                        ?>

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
