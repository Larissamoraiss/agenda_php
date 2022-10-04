<?php
require("conexao.php");
$resultado = $pdo->query("SELECT * FROM ESPECIALISTA");
?>

<table BORDER="1">
    <tr> Cadastro de especialista</tr>
   
    <tr>

        <td>CRM</td>
        <td> AREA</td>
        <td>NOME</td>
        <td>SOBRENOME</td>
        <td>TELEFONE</td>
        <td>DISPONIBILIDADE</td>
      
    </tr>

<?php 
while($linha = $resultado->fetch(PDO::FETCH_ASSOC)){?>
    <tr>
        <td><?php echo "{$linha['CRM']}"; ?> </td>
        <td><?php echo "{$linha['AREA']}"; ?> </td>
        <td><?php echo "{$linha['NOME']}";?> </td>
        <td><?php echo "{$linha['SOBRENOME']}";?> </td>
        <td><?php echo "{$linha['TELEFONE']}";?> </td>
        <td><?php echo "{$linha['DISPONIBILIDADE']}";?> </td>
      
    </tr>
  <?php  
}
?>
</table>
<?php

?>