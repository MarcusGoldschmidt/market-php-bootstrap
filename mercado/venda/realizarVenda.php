<?php

    include "../../php/conexao.php";
        
        $idcliente = $_REQUEST["idcliente"];
        $idvenda = $_REQUEST["idvenda"];

        

         $sql = "select * from venda_has_produto
         inner join produto
         on idproduto = produto_idproduto
         where venda_idvenda = :idvenda";

        $resultados = $conexao->prepare($sql);
        $resultados->bindValue(":idvenda", $idvenda);
        $resultados->execute();

        $total = 0;

        foreach($resultados as $linha){
            $totalProduto = $linha['quantidadeVenda'] * $linha['preco'];

            $total = $total + $totalProduto;

        }


    date_default_timezone_set('America/Sao_Paulo');
    $date = date('Y-m-d');

    $sql = "update venda set valor = :valor, data = :date, cliente_idcliente = :idcliente, Realizada = true where idvenda = :idvenda";
    $alteracao = $conexao->prepare($sql);
    $alteracao->bindValue(":valor", $total);
    $alteracao->bindValue(":date", $date);
    $alteracao->bindValue(":idcliente", $idcliente);
    $alteracao->bindValue(":idvenda", $idvenda);
    $alteracao->execute();

    echo "<h2> Venda Concluida com Sucesso</h3>"

?>
