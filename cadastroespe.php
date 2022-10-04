<?php

$crm = $_POST['crm'];
$area = $_POST['area'];
$nome = $_POST['nome'];
$sobrenome = $_POST['sobrenome'];
$telefone = $_POST['telefone'];
$disponibilidade = $_POST['disponibilidade'];


require("conexao.php");
$res = $pdo->prepare("INSERT INTO ESPECIALISTA(CRM, AREA, NOME, SOBRENOME, TELEFONE, DISPONIBILIDADE  ) VALUES (:crm,:area, :nome, :sobrenome, :telefone, :disponibilidade)");

$res->bindparam(":crm", $crm);
$res->bindparam(":area", $area);
$res->bindparam(":nome", $nome);
$res->bindparam(":sobrenome", $sobrenome);
$res->bindparam(":telefone",$telefone);
$res->bindparam(":disponibilidade",$disponibilidade);

$res->execute();
?>