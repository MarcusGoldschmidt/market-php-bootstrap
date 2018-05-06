<form action="pesquisa.php" method="get">
    <label for="nome">Nome:</label>
    <input type="text" id="nome" name="nome">
    <input type="submit">
</form>


<?php
    if ($_GET) $nome = $_GET{'nome'}; else $nome = "";
    include "conexao.php";
    $sql = "select * from alunos where nome like :nome";
    $resultados = $conexao->prepare($sql);
    $resultados->bindValue(":nome", "%".$nome."%");
    $resultados->execute();
    echo "<table>";
    foreach($resultados as $linha){
        echo "<tr>";
        echo "<td>".$linha['id_aluno']."</td>";
        echo "<td>".$linha['nome']."</td>";
        echo "<td>".$linha['email']."</td>";
        echo "<td><a href='excluir.php?id_aluno=".$linha['id_aluno']."'>Excluir</a></td>";
        echo "</tr>";
    }
    echo "</table>";

?>