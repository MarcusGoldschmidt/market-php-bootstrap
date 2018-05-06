<?php
                                                    
                                                    include "../../php/conexao.php";

                                                     $_GET['nome'] = isset($_GET['nome']) ? $_GET['nome'] : null;
                                

                                                    $nome = $_REQUEST["nome"];
                                                    $sql = "select * from cliente where nome like :nomecli";
                                                    
                                                    $resultados = $conexao->prepare($sql);
                                                    $resultados->bindValue(":nomecli", "%".$nome."%");
                                                    $resultados->execute();
                                                    
                                                   
                                                        
                                                    echo "<option id='optionNome' value='' selected>Selecionar Cliente</option>";

                                                    foreach($resultados as $linha){
                                                        
                                                         echo "<option id='optionNome' value='".$linha['idcliente']."'>".$linha['nome']."</option>";
                                                        
                                                        }

                                                    
                                                ?>
