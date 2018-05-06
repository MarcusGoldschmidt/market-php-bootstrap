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
                    <h3 class="menu">Alterar Funcionário</h3>
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
                    <li><a href="funcionario-inicio.php">Inicio Funcionário</a></li>

                    <div class="topico">
                        <ul class="nav nav-pills nav-stacked">
                            <li><a href="funcionario-cadastro.php">Cadastrar</a></li>
                            <li><a href="funcionario-consultar.php">Consultar</a></li>
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
                    <li><a href="funcionario-inicio.php">Inicio Funcionário</a></li>
                    <div class="topico">
                        <ul class="nav nav-pills nav-stacked">
                            <li><a href="funcionario-cadastro.php">Cadastrar</a></li>
                            <li><a href="funcionario-consultar.php">Consultar</a></li>
                        </ul>
                    </div>

                </ul><br>
            </div>
            <br>
            <div class="col-sm-10">

                <div class="row">
                    <div class="col-sm-8">
                        
                        <?php 
                        
                            $_GET ? $id = $_GET ['idfuncionario']  : $id = $_POST['idfuncionario'];
                
                            if ($_POST){
                            include "../../php/conexao.php";
                            $sql = "update from funcionario set cargo = :cargo, nome = :nome, telefone = :telefone, bairro = :bairro, numero = :numero, logradouro = :logradouro, complemento = :complemento, cpf = :cpf, sexo = :sexo, salario = :salario, rg = :rg, email = :email, senha = :senha, idempresa = :idempresa where idfuncionario = :idfuncionario";
                            $prepara = $conexao->prepare($sql);
                            $prepara->bindValue(":idfuncionario", $id);
                            $prepara->bindValue(":cargo", $_POST['cargo']);
                            $prepara->bindValue(":nome", $_POST['nome']);
                            $prepara->bindValue(":telefone", $_POST['telefone']);
                            $prepara->bindValue(":bairro", $_POST['bairro']);
                            $prepara->bindValue(":numero", $_POST['numero']);
                            $prepara->bindValue(":logradouro", $_POST['logradouro']);
                            $prepara->bindValue(":complemento", $_POST['complemento']);
                            $prepara->bindValue(":cpf", $_POST['cpf']);
                            $prepara->bindValue(":sexo", $_POST['sexo']);
                            $prepara->bindValue(":salario", $_POST['salario']);
                            $prepara->bindValue(":rg", $_POST['rg']);
                            $prepara->bindValue(":email", $_POST['email']);
                            $prepara->bindValue(":senha", $_POST['senha']);
                            $prepara->bindValue(":idempresa", $_POST['option']);
                            $prepara->execute();
                            echo "<h2>Alterado cadastrado com sucesso </h2>";
                        }
                        
                        include "../../php/conexao.php";
                        $sql = "select * from funcionario where idfuncionario = :idfuncionario";
                        $selecao = $conexao->prepare($sql);
                        $selecao->bindValue(":idfuncionario", $id);    
                        $selecao->execute();
                        $resultado = $selecao->fetch();
                
                        ?>
                        
                        <form method="post" action="funcionario-alterar.php">
                            <div class="form-group row">
                                <label for="example-text-input" class="col-2 col-form-label">ID</label>
                                <div class="col-10">
                                    <input class="form-control" type="text" readonly value="<?php echo $resultado['idfuncionario'] ?>" id="idfuncionario" name="idfuncionario">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="example-text-input" class="col-2 col-form-label">Cargo</label>
                                <div class="col-10">
                                    <input class="form-control" type="text" value="<?php echo $resultado['cargo'] ?>" id="cargo" name="cargo">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="example-email-input" class="col-2 col-form-label">Nome</label>
                                <div class="col-10">
                                    <input class="form-control" type="text" value="<?php echo $resultado['nome'] ?>" id="nome" name="nome">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="example-text-input" class="col-2 col-form-label">Telefone</label>
                                <div class="col-10">
                                    <input class="form-control" type="text" value="<?php echo $resultado['telefone'] ?>" id="telefone" name="telefone">
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="example-tel-input" class="col-2 col-form-label">Bairro</label>
                                <div class="col-10">
                                    <input class="form-control" type="text" value="<?php echo $resultado['bairro'] ?>" id="Bairro" name="bairro">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="example-tel-input" class="col-2 col-form-label">Numero</label>
                                <div class="col-10">
                                    <input class="form-control" type="text" value="<?php echo $resultado['numero'] ?>" id="numero" name="numero">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="example-tel-input" class="col-2 col-form-label">Logradouro</label>
                                <div class="col-10">
                                    <input class="form-control" type="text" value="<?php echo $resultado['logradouro'] ?>" id="logradouro" name="logradouro">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="example-tel-input" class="col-2 col-form-label">Complemento</label>
                                <div class="col-10">
                                    <input class="form-control" type="text" value="<?php echo $resultado['complemento'] ?>" id="complemento" name="complemento">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="example-tel-input" class="col-2 col-form-label">CPF</label>
                                <div class="col-10">
                                    <input class="form-control" type="text" value="<?php echo $resultado['cpf'] ?>" id="cpf" name="cpf">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="example-text-input" class="col-2 col-form-label">Sexo</label>
                                <div class="col-10">
                                    <label class="radio-inline">
                              <input type="radio" name="sexo" id="sexo" <?php if($resultado['sexo'] == 'M'){echo "CHECKED";} ?> value="M"> Masculino
                            </label>
                                    <label class="radio-inline">
                              <input type="radio" name="sexo" id="sexo" <?php if($resultado['sexo'] == 'F'){echo "CHECKED";} ?> value="F"> Feminino
                            </label>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="example-text-input" class="col-2 col-form-label">Salário</label>
                                <div class="col-10">
                                    <input class="form-control" type="number" value="<?php echo $resultado['salario'] ?>" id="salario" name="salario">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="example-text-input" class="col-2 col-form-label">RG</label>
                                <div class="col-10">
                                    <input class="form-control" type="text" value="<?php echo $resultado['rg'] ?>" id="rg" name="rg">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="example-email-input" class="col-2 col-form-label">Email</label>
                                <div class="col-10">
                                    <input class="form-control" type="email" value="<?php echo $resultado['email'] ?>" id="email" name="email">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="example-email-input" class="col-2 col-form-label">Senha</label>
                                <div class="col-10">
                                    <input class="form-control" type="password" value="<?php echo $resultado['senha'] ?>" id="senha" name="senha">
                                </div>
                            </div>
                            <div class="form-group row">
                                <div class="form-group">
                                    <label for="example-date-input" class="col-2 col-form-label">Selecionar Empresa</label>
                                    <select class="form-control" id="option" name="option">
                                    <?php
                                    
                                        include "../../php/conexao.php";
                                        
                                        $sql = "select * from empresa
                                                inner join funcionario
                                                on idempresa = empresa_idemepresa
                                                where id funcionario = :idfuncionario";
                                        $resul = $conexao->prepare($sql);
                                        $resul->bindValue(":idfuncionario",$id);
                                        $resul->execute();
                                        
                                        foreach($resul as $linha){
                                            echo "<option id='option' value='".$linha['idempresa']."' selected>".$linha['nomeempresa']."</option>";
                                        }
                                            
                                        $sql = "select * from empresa";
                                        $resultados = $conexao->prepare($sql);
                                        $resultados->bindValue(":nome",$_POST['nome']); //foi feito direto para pegar o valor do nome que é o input de pesquisa
                                        $resultados->execute();
                                        
                                        foreach($resultados as $linha){
                                            echo "<option id='option' value='".$linha['idempresa']."' >".$linha['nomeempresa']."</option>";
                                        }
                                    ?>
                                </select>
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
    </div>
</body>

</html>
