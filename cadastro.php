<?php
//INSERT
$cpf = $_POST['cpf'];
$nome = $_POST['nome'];
$sobrenome = $_POST['sobrenome'];
$data = $_POST['data'];
$telefone = $_POST['telefone'];

require("conexao.php");
$res = $pdo->prepare("INSERT INTO PACIENTE(CPF, NOME, SOBRENOME, DATA_DE_NASCIMENTO, TELEFONE ) VALUES (:cpf, :nome, :sobrenome, :data, :telefone)");
$res->bindparam(":cpf", $cpf);
$res->bindparam(":nome", $nome);
$res->bindparam(":sobrenome", $sobrenome);
$res->bindparam(":data",$data);
$res->bindparam(":telefone",$telefone);


$res->execute();


?>