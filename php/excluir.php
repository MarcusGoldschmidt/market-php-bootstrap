<?php

include "conexao.php";
$sql = "delete from alunos where id_aluno = :id_aluno";
$excluir = $conexao->prepare($sql);
$excluir->bindValue(":id_aluno", $_GET['id_aluno']);
$excluir->execute();
echo "Aluno excluido com sucesso";


<?php

include "../../php/conexao.php";
$sql = "delete from cliente where idcliente = :idcliente";
$excluir = $conexao->prepare($sql);
$excluir->bindValue(":idcliente", $_GET['idcliente']);
$excluir->execute();
echo "<h2>Excluido com sucesso</h2>";
?>