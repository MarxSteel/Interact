<?php
/*
** CHAMANDO PRIVILÉGIOS DE LOGIN
*/
$db = DB();
$nickname = $user->username;
$Distrito = $user->dist;
 $query = $db->prepare("SELECT * FROM priv WHERE user='$nickname'");
 $query->execute();
  $row = $query->fetch();
  $CorLayout = $row['color'];
  $PriA = $row['priA']; 		// Privilégio de Cadastro de Associados
  $PriC = $row['priC']; 		// Privilégio de Cadastro de Clubes
  $PriD = $row['priD']; 		// Privilégio de Gerenciar Distrito
  $PriP = $row['priP']; 		// Privilégio de Gerenciar ANP
?>