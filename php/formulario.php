<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <title>Cadastro de alunos</title>
</head>

<body>
    <h1>Cadastro de alunos</h1>
    <?php
    echo "aaaa";
        if ($_POST){
            include "conexao.php";
            $sql = "insert into alunos (nome, email) values (:nome, :email)";
            $prepara = $conexao->prepare($sql);
            $prepara->bindValue(":nome", $_POST['nome']);
            $prepara->bindValue(":email", $_POST['email']);
            $prepara->execute();
            echo "Aluno cadastrado com sucesso";
        }
    
    ?>


        <form method="post" action="formulario.php">
            <label for="nome">Nome:</label>
            <input type="text" id="nome" name="nome">
            <label for="email">E-mail:</label>
            <input type="text" id="email" name="email">
            <input type="submit">
        </form>
</body>

</html>
