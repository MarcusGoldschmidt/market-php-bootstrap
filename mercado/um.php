<!DOCTYPE html>
<html lang="pt-br">

<head>
    <title>Introdução ao Bootstrap</title>
    <meta charset="utf-8">

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">


    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">


    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>

</head>

<body>
    <div class="container">
        <h1>Gerenciamento De Usuários</h1>

        <form>
            <div class="form-group">
                <label for="nome">Nome</label>
                <input type="text" class="form-control" id="nome" />
            </div>
            <div class="form-group">
                <label for="email">Email</label>
                <input type="text" class="form-control" id="email" />
            </div>
            <div class="form-group">
                <label for="senha">Senha</label>
                <input type="password" class="form-control" id="senha">

            </div>

            <button class="btn btn-success"><span class="glyphicon glyphicon-ok"></span> Salvar</button>


        </form>

        <br /><br />
        <form class="form-inline">
            <div class="form-group">
                <label for="busca-nome">Nome</label>
                <input type="text" class="form-control" id="busca-nome" />
            </div>
            <button class="btn btn-primary"><span class="glyphicon glyphicon-search"></span> Pesquisar</button>

        </form>
        <br /><br />

        <table class="table table-hover">
            <tr>
                <th>Nome</th>
                <th>E-mail</th>
                <th></th>
                <th></th>
            </tr>
            <tr>
                <td>Maria da Silva</td>
                <td>maria@gmail.com</td>
                <td>
                    <button class="btn btn-danger"><span class="glyphicon glyphicon-trash"></span> Excluir</button>
                </td>
                <td>
                    <button class="btn btn-warning"><span class="glyphicon glyphicon-pencil"></span> Alterar</button>
                </td>
            </tr>
            <tr>
                <td>José da Silva</td>
                <td>jose@gmail.com</td>
                <td>
                    <button class="btn btn-danger"><span class="glyphicon glyphicon-trash"></span> Excluir</button>
                </td>
                <td>
                    <button class="btn btn-warning"><span class="glyphicon glyphicon-pencil"></span> Alterar</button>
                </td>
            </tr>
        </table>

        <ul class="pagination">
            <li><a href="#">1</a></li>
            <li class="active"><a href="#">2</a></li>
            <li><a href="#">3</a></li>
            <li><a href="#">4</a></li>
        </ul>


    </div>







</body>

</html>
