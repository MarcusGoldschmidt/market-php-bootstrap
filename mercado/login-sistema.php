<!DOCTYPE html>
<html lang="pt-br">

<head>
    <title>Mercadoria</title>
    <meta charset="utf-8">
    
    <link rel="icon" href="assets/imagens/fav.png"/>

    <link href="https://fonts.googleapis.com/css?family=Raleway" rel="stylesheet">

    <link rel="stylesheet" href="assets/css/estilo.css">

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">


    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">


    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>

</head>

<body>
    <div class="menu-top">
        <div class="col-md-12">
            <div class="row">
                <div class="col-sm-1">
                    <span class="glyphicon glyphicon-user"></span>
                </div>
                <div class="col-sm-9">
                    <h3 class="menu">Autenticação</h3>
                </div>
            </div>
        </div>
        <div class="col-md-1">
            <div class="row">
                <div class="col-sm-1">
                    <a href="login-sistema.php">
                        <button type="button" class="btn btn-success"><h3>Login</h3></button>
                    </a>
                </div>
            </div>
        </div>
    </div>
    <div class="login">
        <div class="row">
            <div class="col-md-10">
                <h1>MERCADOria</h1>
            </div>
            <div class="col-md-1"><span class="glyphicon glyphicon-user"></span></div>
        </div>
        <form>
            <div class="form-group">
                <label for="nome">Nome</label>
                <input type="text" class="form-control" id="nome" />
            </div>
            <div class="form-group">
                <label for="senha">Senha</label>
                <input type="password" class="form-control" id="senha">

            </div>
            <br>
            <div class="row">
                <div class="col-md-1"></div>
                <div class="col-md-2"><a href="inicial.php"><button type="button" class="btn btn-success"><h4>Autenticar</h4></button></a></div>
                <div class="col-md-2"></div>
                <div class="col-md-2"></div>
                <div class="col-md-5">
                    <a href="login-recuperar-senha.php">
                        <h3>Esqueci minha senha</h3>
                    </a>
                </div>
            </div>

        </form>
    </div>
    <div class="footer"></div>
</body>

</html>
