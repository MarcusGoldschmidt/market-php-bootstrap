<?php
try{
    $conexao = new PDO("mysql:host=localhost;port=3306;dbname=mercado", "root", "");   
}catch (Excepetion $e){
    echo "<h2>Aconteceu o seguinte erro: " . $e . "</h2>";
} ?>
