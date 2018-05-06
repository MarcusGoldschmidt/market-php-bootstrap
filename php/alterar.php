<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <title>Alteração de alunos</title>
</head>

<body>
    <?php
    $_GET ? $id = $_GET ['id_aluno']  : $id = $_POST['id_aluno'];
    include "conexao.php";
    
    if ($_POST){
        $sql = "update alunos set nome = :nome, email = :email where id_aluno = :id_aluno"; 
        $alteracao = $conexao->prepare($sql);
        $alteracao->bindValue(":nome", $_POST['nome']);
        $alteracao->bindValue(":email", $_POST['email']);
        $alteracao->bindValue(":id_aluno", $_POST['id_aluno']);
        if ($alteracao->execute())
            echo "Alterado com sucesso";
        else echo "Houve algum erro";
    }
    
    include "conexao.php";
    $sql = "select * from alunos where id_aluno = :id_aluno";
    $selecao = $conexao->prepare($sql);
    $selecao->bindValue(":id_aluno", $id);   
    $selecao->execute();
    $resultado = $selecao->fetch();
    ?>
        <form action="altera.php" method="post">

            <label for="id_aluno">ID:</label>
            <input type="text" id="id_aluno" name="id_aluno" readonly value="<?php echo $resultado['id_aluno'];?>">
            <label for="nome">Nome:</label>
            <input type="text" id="nome" name="nome" value="<?php echo $resultado['nome'];?>">
            <label for="email">Email:</label>
            <input type="text" id="email" name="email" value="<?php echo $resultado['email'];?>">

            <input type="submit" >

        </form>
</body>

</html>
