<?php
include_once '../sess.php';
include_once '../dados.php';
include_once '../lib/qyuser.php';

$ClID = $_GET['ID'];
$db = DB();
 $ChamaCl = $db->prepare("SELECT * FROM ic_clube WHERE id='$ClID'");
 $ChamaCl->execute();
  $Cl = $ChamaCl->fetch();
   $ClNome = $Cl['clubeNome'];				//NOME DO CLUBE

?>
<!DOCTYPE html>
<html lang="pt">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title><?php echo $Titulo; ?></title>

	<!-- Global stylesheets -->
	<link href="https://fonts.googleapis.com/css?family=Roboto:400,300,100,500,700,900" rel="stylesheet" type="text/css">
	<link href="../assets/css/icons/icomoon/styles.css" rel="stylesheet" type="text/css">
	<link href="../assets/css/bootstrap.css" rel="stylesheet" type="text/css">
	<link href="../assets/css/core.css" rel="stylesheet" type="text/css">
	<link href="../assets/css/components.css" rel="stylesheet" type="text/css">
	<link href="../assets/css/colors.css" rel="stylesheet" type="text/css">
	<!-- /global stylesheets -->

	<!-- Core JS files -->
	<script type="text/javascript" src="../assets/js/core/libraries/jquery.min.js"></script>
	<script type="text/javascript" src="../assets/js/core/libraries/bootstrap.min.js"></script>
	<!-- /core JS files -->

	<!-- Theme JS files -->
	<script type="text/javascript" src="../assets/js/plugins/ui/drilldown.js"></script>

	<script type="text/javascript" src="../assets/js/core/app.js"></script>

	<script type="text/javascript" src="../assets/js/plugins/ui/ripple.min.js"></script>
	<!-- /theme JS files -->

</head>

<body>
 <div class="navbar navbar-inverse">
  <div class="navbar-header">
   <a class="navbar-brand">
    <img src="<?php echo $server; ?>assets/images/logos/ic_br_white.png"></a>
  </div>
  <div class="navbar-collapse collapse" id="navbar-mobile">
   <ul class="nav navbar-nav navbar-right">
	<li><a href="../#">MDIO Interact Brasil </a></li>
   </ul>
  </div>
 </div>
 <div class="page-container">
  <div class="page-content">
   <div class="content-wrapper">
	<div class="page-header">
	 <div class="page-header-content">
	  <div class="page-title">
	   <h4>
	    <i class="icon-arrow-left52 position-left"></i> 
	    <span class="text-semibold">Distrito <?php echo $Distrito; ?></span> - Inativar Clube
	   </h4>
	  </div>
	 </div>
	</div>
	<div class="content">
	 <div class="panel panel-flat">
	  <div class="panel-heading">
	   <h5 class="panel-title">Interact Club de <?php echo $ClNome; ?></h5>
	  </div>
	  <div class="panel-body">
	  <h2><b>Aten&ccedil;&atilde;o!</b> Ao desativar o Clube, os associados pertencentes a este club serão automaticamente desativados, tem certeza disto?</h2>
							       <form name="ReativaClube" id="name" method="post" action="" enctype="multipart/form-data">
        <div class="col-xs-12">
         <input name="ReativaClube" type="submit" class="btn btn-danger btn-lg btn-block" value="SIM, DESATIVAR CLUBE"  />
        
       </form>
       <?php 
        if(@$_POST["ReativaClube"])
        {
  $Inativar = $db->query("UPDATE ic_clube SET status='I' WHERE id='$ClID'");
  if ($Inativar) {
   $InSocio = $db->query("UPDATE ic_socio SET aStatus='I' WHERE codClub='$ClID'");
    if ($InSocio) {
    	$DataCad = date('Y-m-d H:i:s');
    	$Descrito = "Clube Desativado. Código do Club: " . $ClID;
     $InLog = $db->query("INSERT INTO logs (user, logCod, descreve, dtCadastro) VALUES ('$nickname', '105', '$Descrito', '$DataCad')");
     if ($InLog) {
      echo '<script type="text/javascript">alert("Clube Desativado com Sucesso");</script>';
      echo '<script type="text/javascript">window.close();</script>';
     }
     else
     {
      echo '<script type="text/javascript">alert("Erro ao Inativar. Erro: 0x20");</script>';
      echo '<script type="text/javascript">window.close();</script>';      
      //ELSE CADASTRAR LOG
     }
    }
    else
    {
	 echo '<script type="text/javascript">alert("Erro ao Inativar. Erro: 0x21");</script>';
     echo '<script type="text/javascript">window.close();</script>';      
    //ELSE INATIVAR SOCIO
    }
  }
  else
  {
  	echo '<script type="text/javascript">alert("Erro ao Inativar. Erro: 0x22");</script>';
    echo '<script type="text/javascript">window.close();</script>';
  	//ELSE INATIVAR CLUB
  }
 }
?>
	  </div>
	 </div>
	 <?php include_once '../footer.php'; ?>
	</div>
   </div>
  </div>
 </div>
</body>
</html>
