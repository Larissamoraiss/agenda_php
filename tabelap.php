<?php
require("conexao.php");
$resultado = $pdo->query("SELECT * FROM PACIENTE");
?>

<table BORDER="1">
    <tr> Cadastro de paciente</tr>
   
    <tr>

        <td>CPF</td>
        <td>NOME</td>
        <td>SOBRENOME</td>
        <td>DATA DE NASCIMENTO</td>
        <td>TELEFONE</td>
      
    </tr>

<?php 
while($linha = $resultado->fetch(PDO::FETCH_ASSOC)){?>
    <tr>
        <td><?php echo "{$linha['CPF']}"; ?> </td>
        <td><?php echo "{$linha['NOME']}";?> </td>
        <td><?php echo "{$linha['SOBRENOME']}";?> </td>
        <td><?php echo "{$linha['DATA_DE_NASCIMENTO']}";?> </td>
        <td><?php echo "{$linha['TELEFONE']}";?> </td>
      
    </tr>
  <?php  
}
?>
</table>
<?php

?>