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
                    <h3 class="menu">Consulta Cliente</h3>
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
                    <li><a href="cliente-inicio.php">Inicio Cliente</a></li>
                    <li><a href="cliente-inicio.php">Pessoa fisica</a></li>
                    <div class="topico">
                        <ul class="nav navbar-nav">
                            <li><a href="cliente-fisico-cadastro.php">Cadastrar</a></li>
                            <li class="active"><a href="cliente-fisico-consulta.php">Consultar</a></li>
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
                            <li><a href="cliente-fisico-cadastro.php">Cadastrar</a></li>
                            <li class="active"><a href="cliente-fisico-consulta.php">Consultar</a></li>
                        </ul>
                    </div>
                </ul><br>
            </div>
            <br>
            <div class="col-sm-10">
                <form method="post" action="cliente-fisico-consulta.php">
                    <div class="row">
                        <div class="col-sm-2">
                            <span class="glyphicon glyphicon-tasks"></span>
                        </div>
                        <div class="col-sm-2">
                            <h3>Pesquisar por:</h3>
                        </div>
                        <div class="col-sm-2">
                            <div class="form-group">
                                <select class="form-control" id="option" name="option">
                                    <option id="optionID" value="idcliente">ID</option>
                                    <option id="optionNome" value="nome" selected>Nome</option>
                                    <option id="optionCpf" value="cpf">CPF</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-sm-2">
                            <input class="form-control" type="text" placeholder="Pesquise aqui" id="nome" name="nome">
                        </div>
                        <div class="col-sm-2">
                            <button class="btn btn-primary"><span class="glyphicon glyphicon-search"></span>  Pesquisar</button>
                        </div>
                    </div>
                </form>
                <div class="consulta-cliente-fisico">
                    <table class="table table-hover table-striped">
                        <tr>
                            <th>Id</th>
                            <th>Nome</th>
                            <th>CPF</th>
                            <th>E-mail</th>
                            <th>Telefone 1</th>
                            <th>Telefone 2</th>
                            <th>Bairro</th>
                            <th>Número</th>
                            <th>Logradouro</th>
                            <th>Complemento</th>
                            <th>Data de cadastro</th>
                            <th>Alterar</th>
                            <th>Excluir</th>
                        </tr>
                        <?php
                            
                            // atribuir null, resolve bug do xamp
                            $_POST['option'] = isset($_POST['option']) ? $_POST['option'] : null;
                        
                            if ($_POST['option']) { //verifica se algum valor foi inserido
                                
                                if ($_POST['option'] == "nome") {//verifica se a caixa nome select
                                    
                                        if ($_GET) $nome = $_GET{'nome'}; else $nome = "";
                                        include "../../php/conexao.php";
                                        $sql = "select * from cliente where nome like :nome";
                                        $resultados = $conexao->prepare($sql);
                                        $resultados->bindValue(":nome", "%".$_POST['nome']."%"); //foi feito direto para pegar o valor do nome que é o input de pesquisa
                                        $resultados->execute();
                                        //sql
                                    
                                        foreach($resultados as $linha){
                                            echo "<tr>";
                                            
                                            echo "<td>".$linha['idcliente']."</td>";
                                            echo "<td>".$linha['nome']."</td>";
                                            echo "<td>".$linha['cpf']."</td>";
                                            echo "<td>".$linha['email']."</td>";
                                            echo "<td>".$linha['telefone']."</td>";
                                            echo "<td>".$linha['telefone2']."</td>";
                                            echo "<td>".$linha['bairro']."</td>";
                                            echo "<td>".$linha['numero']."</td>";
                                            echo "<td>".$linha['logradouro']."</td>";
                                            echo "<td>".$linha['complemento']."</td>";
                                            echo "<td>".$linha['dataCadastro']."</td>";

                                            //botoes
                                            
                                            echo "<td><a href='cliente-fisico-alterar.php?idcliente=".$linha['idcliente']."'<button class='btn btn-warning'><span class='glyphicon glyphicon-pencil'></span> Alterar</button></a></td>";
                                            echo "<td><a href='excluir.php?idcliente=".$linha['idcliente']."'><button class='btn btn-danger'><span class='glyphicon glyphicon-remove'></span>Excluir</button></a></td>";

                                            echo "</tr>";
                                        }
                                    }
                                
                                if ($_POST['option'] == "idcliente") {//verifica se a caixa nome select
                                        //para valores unicos, não se utiliza %
                                        if ($_GET) $nome = $_GET{'nome'}; else $nome = "";
                                        include "../../php/conexao.php";
                                        $sql = "select * from cliente where idcliente = :nome";
                                        $resultados = $conexao->prepare($sql);
                                        $resultados->bindValue(":nome",$_POST['nome']); //foi feito direto para pegar o valor do nome que é o input de pesquisa
                                        $resultados->execute();
                                        //sql
                                    
                                        foreach($resultados as $linha){
                                            echo "<tr>";
                                            
                                            echo "<td>".$linha['idcliente']."</td>";
                                            echo "<td>".$linha['nome']."</td>";
                                            echo "<td>".$linha['cpf']."</td>";
                                            echo "<td>".$linha['email']."</td>";
                                            echo "<td>".$linha['telefone']."</td>";
                                            echo "<td>".$linha['telefone2']."</td>";
                                            echo "<td>".$linha['bairro']."</td>";
                                            echo "<td>".$linha['numero']."</td>";
                                            echo "<td>".$linha['logradouro']."</td>";
                                            echo "<td>".$linha['complemento']."</td>";
                                            echo "<td>".$linha['dataCadastro']."</td>";

                                            //botoes
                                            
                                            echo "<td><button class='btn btn-warning'><span class='glyphicon glyphicon-pencil'></span> Alterar</button></td>";
                                            echo "<td><a href='excluir.php?idcliente=".$linha['idcliente']."'><button class='btn btn-danger'><span class='glyphicon glyphicon-remove'></span>Excluir</button></a></td>";

                                            echo "</tr>";
                                        }
                                    }
                                
                                if ($_POST['option'] == "cpf") {//verifica se a caixa nome select
                                    
                                        if ($_GET) $nome = $_GET{'nome'}; else $nome = "";
                                        include "../../php/conexao.php";
                                        $sql = "select * from cliente where cpf = :nome";
                                        $resultados = $conexao->prepare($sql);
                                        $resultados->bindValue(":nome",$_POST['nome']); //foi feito direto para pegar o valor do nome que é o input de pesquisa
                                        $resultados->execute();
                                        //sql
                                        
                                            foreach($resultados as $linha){
                                                echo "<tr>";

                                                echo "<td>".$linha['idcliente']."</td>";
                                                echo "<td>".$linha['nome']."</td>";
                                                echo "<td>".$linha['cpf']."</td>";
                                                echo "<td>".$linha['email']."</td>";
                                                echo "<td>".$linha['telefone']."</td>";
                                                echo "<td>".$linha['telefone2']."</td>";
                                                echo "<td>".$linha['bairro']."</td>";
                                                echo "<td>".$linha['numero']."</td>";
                                                echo "<td>".$linha['logradouro']."</td>";
                                                echo "<td>".$linha['complemento']."</td>";
                                                echo "<td>".$linha['dataCadastro']."</td>";

                                                //botoes

                                                echo "<td><button class='btn btn-warning'><span class='glyphicon glyphicon-pencil'></span> Alterar</button></td>";
                                                echo "<td><a href='excluir.php?idcliente=".$linha['idcliente']."'><button class='btn btn-danger'><span class='glyphicon glyphicon-remove'></span>Excluir</button></a></td>";

                                                echo "</tr>";

                                                $resultados = $resultados++;
                                            }
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
