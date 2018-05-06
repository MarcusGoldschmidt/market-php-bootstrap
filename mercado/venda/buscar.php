<?php
                                                    
                                                    include "../../php/conexao.php";

                                                     $_GET['q'] = isset($_GET['q']) ? $_GET['q'] : null;
                                

                                                    $q = $_REQUEST["q"];
                                                    $sql = "select * from produto where nome like :nomeProduto";
                                                    
                                                    $resultados = $conexao->prepare($sql);
                                                    $resultados->bindValue(":nomeProduto", "%".$q."%");
                                                    $resultados->execute();
                                                    
                                                   
                                                        
                                                    echo "<table class='table table-hover table-striped'>";

                                                    echo "<tr>
                                                            <th>Id</th>
                                                            <th>Nome</th>
                                                            <th>Preço unitário</th>
                                                            <th>Quantidade</th>
                                                            <th>Adicionar</th>
                                                        </tr>";

                                                    foreach($resultados as $linha){
                                                        
                                                        echo "<tr>";
                                                        echo "<td>".$linha['idproduto']."</td>";
                                                        echo "<td>".$linha['nome']."</td>";
                                                        echo "<td>".$linha['preco']."</td>";
                                                        echo "<td>"."<input class='form-control' type='number' id='quantidadeVenda".$linha['idproduto']."' name='quantidadeVenda'>"."</td>";
                                                        echo "<td>"."<input value='Inserir' onclick=\"adicionarPro('".$linha['idproduto']."')\" type='submit' class='btn btn-primary' ></td>";
                                                        echo "</tr>";
                                                        }
                                                        echo "</table>"
                                                    
                                                ?>
