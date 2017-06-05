<?php
/*
** CHAMANDO PRIVILÉGIOS DE LOGIN
*/
$db = DB();
$nickname = $user->username;
$Distrito = $user->dist;
$codAss = $user->codAss;
 $query = $db->prepare("SELECT * FROM priv WHERE user='$nickname'");
 $query->execute();
  $row = $query->fetch();
  $CorLayout = $row['color'];
  $PriA = $row['priA']; 		// Privilégio de Cadastro de Associados
  $PriC = $row['priC']; 		// Privilégio de Cadastro de Clubes
  $PriD = $row['priD']; 		// Privilégio de Gerenciar Distrito
  $PriP = $row['priP']; 		// Privilégio de Gerenciar ANP


/*
** CHAMANDO INFORMAÇÕES DO CADASTRO DO ASSOCIADO
*/
 $ChamaSocio = $db->prepare("SELECT * FROM ic_socio WHERE id='$codAss'");
 $ChamaSocio->execute();
  $Socio = $ChamaSocio->fetch();
   $nomSocio = $Socio['nomeCom'];		//NOME COMPLETO DO ASSOCIADO
   $phoSocio = $Socio['foto'];			//FOTO DO ASSOCIADO
   $CodClub = $Socio['codClub'];		//CODIGO DO CLUBE


/*
** CHAMANDO CLUBE DO ASSOCIADO
*/
 $ChamaClube = $db->prepare("SELECT * FROM ic_clube WHERE id='$CodClub'");
 $ChamaClube->execute();
  $Cl = $ChamaClube->fetch();
   $NomeClube = $Cl['clubeNome'];

?>