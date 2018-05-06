<?php

    include "../../php/conexao.php";
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

    echo $total;

?>