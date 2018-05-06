<?php
                                                    
                                                    include "../../php/conexao.php";

                                                     $_GET['nome'] = isset($_GET['nome']) ? $_GET['nome'] : null;
                                

                                                    $nome = $_REQUEST["nome"];
                                                    $sql = "select * from funcionario where nome like :nomecli";
                                                    
                                                    $resultados = $conexao->prepare($sql);
                                                    $resultados->bindValue(":nomecli", "%".$nome."%");
                                                    $resultados->execute();
                                                    
                                                   
                                                        
                                                    echo "<option id='optionNome' value='' selected>Selecionar Funcionário</option>";

                                                    foreach($resultados as $linha){
                                                        
                                                         echo "<option onchange='muda(this.value)' id='idfuncionario' value='".$linha['idfuncionario']."'>".$linha['nome']."</option>";
                                                        
                                                        }

                                                    
                                                ?>
