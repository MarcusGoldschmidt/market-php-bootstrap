<?php
                                                include "../../php/conexao.php";

                                                
                                                
                                                $quantidade = $_REQUEST["quantidade"];
                                                $idproduto = $_REQUEST["idproduto"];
                                                $idvenda = $_REQUEST["idvenda"];

                                                    
                                                        $sql = "update venda_has_produto set quantidadeVenda = :quantidade where venda_idvenda = :idvenda and produto_idproduto = :idproduto";
                                                        $alteracao = $conexao->prepare($sql);
                                                        $alteracao->bindValue(":idvenda", $idvenda);
                                                        $alteracao->bindValue(":idproduto", $idproduto);
                                                        $alteracao->bindValue(":quantidade", $quantidade);
                                                        $alteracao->execute();

                                                    




                                                        $sql = "select * from venda_has_produto 
                                                            inner join produto
                                                            on produto_idproduto = idproduto
                                                            where venda_idvenda =  :idvenda";
                                                    $resultados = $conexao->prepare($sql);
                                                    $resultados->bindValue(":idvenda", $idvenda);
                                                    $resultados->execute();
                                                    
                                                    echo "<h2>Alterado com sucesso</h2>";
                                                        
                                                    echo "<table class='table table-hover table-striped'>";

                                                    echo "<tr>
                                                            <th>Id</th>
                                                            <th>Nome</th>
                                                            <th>Preço unitário</th>
                                                            <th>Quantidade</th>
                                                            <th>Alterar</th>
                                                            <th>Excluir</th>
                                                        </tr>";

                                                    foreach($resultados as $linha){
                                                        
                                                        echo "<tr>";
                                                        echo "<td> <imput name='idprodutoVenda' id='idprodutoVenda' readonly value'".$linha['idproduto']."'>".$linha['idproduto']."</td>";
                                                        echo "<td>".$linha['nome']."</td>";
                                                        echo "<td>".$linha['preco']."</td>";
                                                        echo "<td><input class='form-control' id='produto".$linha['idproduto']."' type='number' value='".$linha['quantidadeVenda']."' name='quantidadeVenda'></td>";
                                                        
                                                        echo "<td>"."<imput onclick=\"quantidade('".$linha['idproduto']."')\" type='submit' class='btn btn-warning' >"."Alterar"."</td>";
                                                        
                                                        echo "<td>"."<imput onclick=\"excluir('".$linha['idproduto']."')\" type='submit' class='btn btn-danger' >"."Excluir"."</td>";
                                                        echo "</tr>";
                                                        }
                                                        echo "</table>"

?>
