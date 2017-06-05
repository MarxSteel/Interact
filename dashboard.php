<?php
include_once 'sess.php';
include_once 'dados.php';
include_once 'lib/qyuser.php';
$cHome = 'class="active"';
$QuantClube = $db->query("SELECT COUNT(*) FROM ic_clube WHERE status='A' AND clubeDistrito='$Distrito'")->fetchColumn();

$QuantSocio = $db->query("SELECT COUNT(*) FROM ic_socio WHERE aStatus='A' AND aDist='$Distrito'")->fetchColumn();


?>
<!DOCTYPE html>
<html lang="pt">
<head>
 <meta charset="utf-8">
 <meta http-equiv="X-UA-Compatible" content="IE=edge">
 <meta name="viewport" content="width=device-width, initial-scale=1">
 <title><?php echo $Titulo; ?></title>
 <link href="https://fonts.googleapis.com/css?family=Roboto:400,300,100,500,700,900" rel="stylesheet" type="text/css">
 <link href="assets/css/icons/icomoon/styles.css" rel="stylesheet" type="text/css">
 <link href="assets/css/bootstrap.css" rel="stylesheet" type="text/css">
 <link href="assets/css/core.css" rel="stylesheet" type="text/css">
 <link href="assets/css/components.css" rel="stylesheet" type="text/css">
 <link href="assets/css/colors.css" rel="stylesheet" type="text/css">
	<!-- /global stylesheets -->

	<!-- Core JS files -->
 <script type="text/javascript" src="assets/js/plugins/loaders/pace.min.js"></script>
 <script type="text/javascript" src="assets/js/core/libraries/jquery.min.js"></script>
 <script type="text/javascript" src="assets/js/core/libraries/bootstrap.min.js"></script>
 <script type="text/javascript" src="assets/js/plugins/loaders/blockui.min.js"></script>
	<!-- /core JS files -->

	<!-- Theme JS files -->
 <script type="text/javascript" src="assets/js/plugins/visualization/d3/d3.min.js"></script>
 <script type="text/javascript" src="assets/js/plugins/visualization/d3/d3_tooltip.js"></script>
 <script type="text/javascript" src="assets/js/plugins/forms/styling/switchery.min.js"></script>
 <script type="text/javascript" src="assets/js/plugins/forms/styling/uniform.min.js"></script>
 <script type="text/javascript" src="assets/js/plugins/forms/selects/bootstrap_multiselect.js"></script>
 <script type="text/javascript" src="assets/js/plugins/ui/moment/moment.min.js"></script>
 <script type="text/javascript" src="assets/js/plugins/pickers/daterangepicker.js"></script>

 <script type="text/javascript" src="assets/js/core/app.js"></script>
 <script type="text/javascript" src="assets/js/pages/dashboard.js"></script>

 <script type="text/javascript" src="assets/js/plugins/ui/ripple.min.js"></script>
	<!-- /theme JS files -->


<style type="text/css">


a:visited{
text-decoration:none;
color:white;
}

a:hover{
text-decoration:none;
color:white;
}

a:active{
text-decoration:none;
color:white;
}

</style>
</head>

<body>

<!-- Main navbar -->
	<div class="navbar navbar-default header-dark">
 <div class="navbar-header">
  <a class="navbar-brand" href="index.html"><img src="assets/images/logos/ICLogo_Azul_Graf.png" height="60%" alt=""></a>
   <ul class="nav navbar-nav visible-xs-block">
	<li><a data-toggle="collapse" data-target="#navbar-mobile"><i class="icon-tree5"></i></a></li>
	<li><a class="sidebar-mobile-main-toggle"><i class="icon-paragraph-justify3"></i></a></li>
   </ul>
 </div>
 <div class="navbar-collapse collapse" id="navbar-mobile">
  <ul class="nav navbar-nav">
   <li>
	<a class="sidebar-control sidebar-main-toggle hidden-xs"><i class="icon-paragraph-justify3"></i></a>
   </li>
  </ul>
  <div class="navbar-right">
   <p class="navbar-text">Ol&aacute;, <?php echo $nomSocio; ?>!</p>				
	<ul class="nav navbar-nav">				
	 <li class="dropdown">
	  <a href="#" class="dropdown-toggle" data-toggle="dropdown">
	   <i class="icon-bell2"></i>
		<span class="visible-xs-inline-block position-right">Notifica&ccedil;&otilde;es</span>
		<span class="status-mark border-pink-300"></span>
	  </a>
	  <div class="dropdown-menu dropdown-content">
	   <div class="dropdown-content-heading">Atividade
		<ul class="icons-list"><li><a href="#"><i class="icon-menu7"></i></a></li></ul>
	   </div>
		<ul class="media-list dropdown-content-body width-350">
		 <li class="media">
		  <div class="media-left">
		   <a href="#" class="btn bg-success-400 btn-rounded btn-icon btn-xs"><i class="icon-mention"></i></a>
		  </div>
		  <div class="media-body">
		   <a href="#">Marx Medeiros</a> Adicionou pendência a um projeto seu
		   <div class="media-annotation">10/10/2010</div>
		  </div>
		 </li>
		</ul>
	   </div>
	 </li>				
	</ul>
   </div>
  </div>
 </div>
 <div class="page-container">
  <div class="page-content">
   <?php include_once 'sidebar.php'; ?>
   <div class="content-wrapper">
    <div class="content">
     <div class="col-md-4 col-xs-12">
      <div class="panel panel-body bg-blue-400" style="background-image: url(assets/images/backgrounds/bg.png);">
	   <div class="media no-margin">
	   <a href="" class="media-left media-middle" color="#ffffff"><i class="icon-flag3 icon-2x"></i></a>
		
		 <div class="media-body text-right">
		  <h5 class="media-heading text-semibold">Cadastro de Clubes</h5>
		   <span class="text-muted">Ativos no momento: <?php echo $QuantClube; ?> </span>
		 </div>
	   </div>
	  </div>
     </div>
     <div class="col-md-4 col-xs-12">
      <div class="panel panel-body bg-green-400" style="background-image: url(assets/images/backgrounds/bg.png);">
	   <div class="media no-margin">
	   <a href="" class="media-left media-middle" color="#ffffff"><i class="icon-users2 icon-2x"></i></a>
		
		 <div class="media-body text-right">
		  <h5 class="media-heading text-semibold">Cadastro de Associados</h5>
		   <span class="text-muted">Ativos no momento: <?php echo $QuantSocio; ?> </span>
		 </div>
	   </div>
	  </div>
     </div>
     <div class="col-md-4 col-xs-12">
      <div class="panel panel-body bg-orange-400" style="background-image: url(assets/images/backgrounds/bg.png);">
	   <div class="media no-margin">
	   <a href="" class="media-left media-middle" color="#ffffff"><i class="icon-cog icon-2x"></i></a>
		
		 <div class="media-body text-right">
		  <h5 class="media-heading text-semibold">Distrito <?php echo $Distrito; ?></h5>
		   <span class="text-muted">Gerenciar Configurações do  Distrito</span>
		 </div>
	   </div>
	  </div>
     </div>
     <div class="col-md-4 col-xs-12">
      <div class="panel panel-body bg-purple-400" style="background-image: url(assets/images/backgrounds/bg.png);">
	   <div class="media no-margin">
	   <a href="" class="media-left media-middle" color="#ffffff"><i class="icon-file-text2 icon-2x"></i></a>
		
		 <div class="media-body text-right">
		  <h5 class="media-heading text-semibold">Cadastro de Projetos</h5>
		  
		 </div>
	   </div>
	  </div>
     </div>
     <div class="col-md-4 col-xs-12">
      <div class="panel panel-body bg-teal-400" style="background-image: url(assets/images/backgrounds/bg.png);">
	   <div class="media no-margin">
	   <a href="" class="media-left media-middle" color="#ffffff"><i class="icon-media icon-2x"></i></a>
		
		 <div class="media-body text-right">
		  <h5 class="media-heading text-semibold">Imagem Pública</h5>
		 </div>
	   </div>
	  </div>
     </div>

 



	<?php include_once 'footer.php'; ?>
	</div>
   </div>
  </div>
 </div>
</body>
</html>
