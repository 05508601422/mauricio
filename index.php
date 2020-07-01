<?php
require 'config.php';
?>
<a href="adicionar.php">Adicionar novo usuário</a>
<table border="0" width="100%">
	<tr>
		<th>NOME</th>
		<th>E-MAIL</th>
		<th>AÇÕES</th>
	</tr>

	<?php

	   $sql = "SELECT * FROM usuarios";
	   $sql = $pdo->query($sql);
       if ($sql->rowCount() > 0) {
       	foreach ($sql->fetchAll() as $usuario) {
       		echo'<tr>';
       		echo'<td>' .$usuario['nome'].'</td>';
       		echo'<td>' .$usuario['e-mail'].'</td>';
       		echo '<td><a href="editar.php?id='.$usuario['id'].'">Editar</a> - <a href="excluir.php?id='.$usuario['id'].'">Excluir</a></td>';
       		echo '</br>';
       		
       	}

       }

	?>  

</table>