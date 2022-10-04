<?php

try {
    $pdo = new PDO("mysql:host=localhost;dbname=agenda", "root", "");
    
} catch (PDOException $e) {
    echo "Erro com o banco de dados".$e->getMessage();   
}catch(Exception $e){
    echo "Erro generico".$e->getMessage();
}catch(Exception $e){
    echo "cadastrado com sucesso".$e->getMessage();
}




?>