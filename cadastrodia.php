<?php

$dia = $_POST['dia'];
require("conexao.php");

$res = $pdo->prepare("INSERT INTO DIA( DIA ) VALUES (:dia)");
$res->bindparam(":dia", $dia);

$res->execute();
?>