<?php
require("conexao.php");
$resultado = $pdo->query("SELECT * FROM DIA");
?>

<table BORDER="1">
    <tr> Agendamento do dia</tr>
   
    <tr>

        <td>DIA</td>
    
      
    </tr>

<?php 
while($linha = $resultado->fetch(PDO::FETCH_ASSOC)){?>
    <tr>
        <td><?php echo "{$linha['DIA']}"; ?> </td>
     
      
    </tr>
  <?php  
}
?>
</table>
<?php

?>