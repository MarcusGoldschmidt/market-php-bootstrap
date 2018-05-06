<?php
                                                    
                                                    include "../../php/conexao.php";

                                                     
                                

                                                    $nome = $_REQUEST["idcliente"];
                                                    $sql = "select * from venda 
                                                            inner join cliente
                                                            on idcliente = cliente_idcliente
                                                            where cliente_idcliente = :idcli";
                                                    
                                                    $resultados = $conexao->prepare($sql);
                                                    $resultados->bindValue(":idcli", $_GET['idcliente']);
                                                    $resultados->execute();
                                                    
                                                   
                                                    echo "<div class='form-group row>
                                                                <div class='col-sm-3'>
                                                                        <label for='example-tel-input' class='col-2 col-form-label'>Venda</label>
                                                                        <select class='form-control' id='idvenda' name='idvenda'>";
                                                                         echo "<option id='optionNome' selected>Selecionar Venda</option>";

                                                    foreach($resultados as $linha){
                                                                        echo "'<option value='".$linha['idvenda']."'>".$linha['idvenda']."</option>'"; 
                                                        
                                                        }
                                            
                                                    echo "      </select>
                                                            </div>
                                                        </div>";
                                                
                                                    $sql = "select * from cliente
                                                            where idcliente = :idcli";
                                                    $selecao = $conexao->prepare($sql);
                                                    $selecao->bindValue(":idcli", $_GET['idcliente']);
                                                    $selecao->execute();
                                                    $resultado = $selecao->fetch();

                                                    echo "
                                                        <div class='form-group row'>
                                                            <label for='example-text-input' class='col-2 col-form-label'>Logradouro</label>
                                                            <div class='col-10'>
                                                                <input class='form-control' type='text' value='".$resultado['logradouro']."' id='logradouro' name='logradouro'>
                                                            </div>
                                                        </div>
                                                        <div class='form-group row'>
                                                            <label for='example-text-input' class='col-2 col-form-label'>Bairro</label>
                                                            <div class='col-10'>
                                                                <input class='form-control' type='text' value='".$resultado['bairro']."' id='bairro' name='bairro'>
                                                            </div>
                                                        </div>
                                                        <div class='form-group row'>
                                                            <label for='example-text-input' class='col-2 col-form-label'>Telefone</label>
                                                            <div class='col-10'>
                                                                <input class='form-control' type='text' value='".$resultado['telefone']."' id='telefone' name='telefone'>
                                                            </div>
                                                        </div>
                                                        <div class='form-group row'>
                                                            <label for='example-text-input' class='col-2 col-form-label'>numero</label>
                                                            <div class='col-10'>
                                                                <input class='form-control' type='text' value='".$resultado['numero']."' id='nmero' name='numero'>
                                                            </div>
                                                        </div>
                                                        <div class='form-group row'>
                                                            <label for='example-text-input' class='col-2 col-form-label'>Complemento</label>
                                                            <div class='col-10'>
                                                                <input class='form-control' type='text' value='".$resultado['complemento']."' id='complemento' name='complemento'>
                                                            </div>
                                                        </div>";

                                                    ?>
