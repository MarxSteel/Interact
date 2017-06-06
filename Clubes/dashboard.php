<?php
include_once '../sess.php';
include_once '../dados.php';
include_once '../lib/qyuser.php';
$cHome = 'class="active"';


?>
<!DOCTYPE html>
<html lang="en">
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
	<script type="text/javascript" src="../assets/js/plugins/loaders/pace.min.js"></script>
	<script type="text/javascript" src="../assets/js/core/libraries/jquery.min.js"></script>
	<script type="text/javascript" src="../assets/js/core/libraries/bootstrap.min.js"></script>
	<script type="text/javascript" src="../assets/js/plugins/loaders/blockui.min.js"></script>
	<!-- /core JS files -->

	<!-- Theme JS files -->
	<script type="text/javascript" src="../assets/js/plugins/tables/datatables/datatables.min.js"></script>
	<script type="text/javascript" src="../assets/js/plugins/forms/selects/select2.min.js"></script>

	<script type="text/javascript" src="../assets/js/core/app.js"></script>
	<script type="text/javascript" src="../assets/js/pages/datatables_basic.js"></script>

	<script type="text/javascript" src="../assets/js/plugins/ui/ripple.min.js"></script>
	<!-- /theme JS files -->

</head>

<body>

	<!-- Main navbar -->
	<div class="navbar navbar-default header-dark">
 <div class="navbar-header">
  <a class="navbar-brand" href="../index.html"><img src="<?php echo $server; ?>assets/images/logos/ICLogo_Azul_Graf.png" height="60%" alt=""></a>
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
	  <a href="../#" class="dropdown-toggle" data-toggle="dropdown">
	   <i class="icon-bell2"></i>
		<span class="visible-xs-inline-block position-right">Notifica&ccedil;&otilde;es</span>
		<span class="status-mark border-pink-300"></span>
	  </a>
	  <div class="dropdown-menu dropdown-content">
	   <div class="dropdown-content-heading">Atividade
		<ul class="icons-list"><li><a href="../#"><i class="icon-menu7"></i></a></li></ul>
	   </div>
		<ul class="media-list dropdown-content-body width-350">
		 <li class="media">
		  <div class="media-left">
		   <a href="../#" class="btn bg-success-400 btn-rounded btn-icon btn-xs"><i class="icon-mention"></i></a>
		  </div>
		  <div class="media-body">
		   <a href="../#">Marx Medeiros</a> Adicionou pendência a um projeto seu
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
   <?php include_once '../sidebar.php'; ?>
   <div class="content-wrapper">
	<div class="page-header">
	 <div class="page-header-content">
	  <div class="page-title">
	   <h4>
		 <span class="text-semibold">Distrito <?php echo $Distrito; ?></span> - Cadastro de Clubs
	   </h4>
	  </div>
	  <div class="heading-elements">
	   <div class="heading-btn-group">
		<a href="../#" class="btn btn-link btn-float text-size-small has-text"><i class="icon-bars-alt text-primary"></i><span>Estat&iacute;sticas</span></a>
		<a href="../#" class="btn btn-link btn-float text-size-small has-text"><i class="icon-calculator text-primary"></i> <span>Cadastrar Clube</span></a>
		<a href="../#" class="btn btn-link btn-float text-size-small has-text"><i class="icon-calendar5 text-primary"></i> <span>Manuais</span></a>
	   </div>
	  </div>
	 </div>
	</div>
	<div class="content">
	 <div class="row">
	  <div class="col-md-12">
	   <div class="panel panel-flat">
		<div class="panel-body">
		 <div class="tabbable">
		  <ul class="nav nav-pills">
		   <li class="active"> 
			<a href="../#ativos" data-toggle="tab">
			<i class="icon-shield-check position-left"></i> Clubes Ativos</a>
		   </li>
		   <li>
			<a href="../#inativos" data-toggle="tab">
			<i class="icon-shield-notice position-left"></i> Clubes Inativos</a>
		   </li>
		  </ul>
		  <div class="tab-content">
		   <div class="tab-pane active" id="ativos">
			<table class="table datatable-basic">
			 <thead>
			  <tr>
			   <th>ID</th>
			   <th>Interact Club de</th>
			   <th>Associados</th>
			   <th>Reuni&otilde;es</th>
			   <th></th>
			   <th></th>
			  </tr>
			 </thead>
			 <tbody>
         	 <?php
         	  $ClAtivo = "SELECT * FROM ic_clube WHERE clubeDistrito='$Distrito' AND status='A' ORDER BY id DESC";
         	  $CAtivo = $db->prepare($ClAtivo);
         	  $CAtivo->execute();
         	  while ($ca = $CAtivo->fetch(PDO::FETCH_ASSOC)){
			  echo '<tr>';
			  $idCl = $ca["id"];
			  echo '<td>' . $idCl . '</td>';
			  echo '<td>' . $ca["clubeNome"] . '</td>';
			  $QtSocio = $db->query("SELECT COUNT(*) FROM ic_socio WHERE aStatus='A' AND codClub='$idCl'")->fetchColumn();
			  echo '<td>' . $QtSocio . '</td>';
			  echo '<td>' . $ca["rSem"] . ', ' . $ca["rHora"] .  '</td>';
			 echo '<td>';
             echo '<a class="btn bg-danger-400 btn-labeled btn-rounded btn-xs" href="javascript:abrir(';
             echo "'Inativar.php?ID=" . $idCl . "');";
             echo '"><b><i class="icon-x"></i></b> Inativar</a>';
             echo '</td>';
			 echo '<td>';
             echo '<a class="btn bg-blue-400 btn-labeled btn-rounded btn-xs" href="javascript:abrir(';
             echo "'vClube.php?ID=" . $idCl . "');";
             echo '"><b><i class="icon-search4"></i></b> Visualizar</a>';
             echo '</td>';
			 echo '</tr>';
         	  }
            ?>
			 </tbody>
			</table>
		   </div>
		   <div class="tab-pane" id="inativos">
			<table class="table datatable-basic">
			 <thead>
			  <tr>
			   <th>ID</th>
			   <th>Interact Club de</th>
			   <th>Associados</th>
			   <th>Reuni&otilde;es</th>
			   <th></th>
			   <th></th>
			  </tr>
			 </thead>
			 <tbody>
         	 <?php
         	  $ClAtivo = "SELECT * FROM ic_clube WHERE clubeDistrito='$Distrito' AND status='I' ORDER BY id DESC";
         	  $CAtivo = $db->prepare($ClAtivo);
         	  $CAtivo->execute();
         	  while ($ca = $CAtivo->fetch(PDO::FETCH_ASSOC)){
			  echo '<tr>';
			  $idCl = $ca["id"];
			  echo '<td>' . $idCl . '</td>';
			  echo '<td>' . $ca["clubeNome"] . '</td>';
			  $QtSocio = $db->query("SELECT COUNT(*) FROM ic_socio WHERE aStatus='A' AND codClub='$idCl'")->fetchColumn();
			  echo '<td>' . $QtSocio . '</td>';
			  echo '<td>' . $ca["rSem"] . ', ' . $ca["rHora"] .  '</td>';
			 echo '<td>';
             echo '<a class="btn bg-green-400 btn-labeled btn-rounded btn-xs" href="javascript:abrir(';
             echo "'Reativar.php?ID=" . $idCl . "');";
             echo '"><b><i class="icon-check"></i></b> Reativar</a>';
             echo '</td>';
			 echo '<td>';
             echo '<a class="btn bg-blue-400 btn-labeled btn-rounded btn-xs" href="javascript:abrir(';
             echo "'vClube.php?ID=" . $at['icbr_id'] . "');";
             echo '"><b><i class="icon-search4"></i></b> Visualizar</a>';
             echo '</td>';
			 echo '</tr>';
         	  }
            ?>
			 </tbody>
			</table>
		   </div>
		  </div>
		 </div>
		</div>
	   </div>
	  </div>
	 </div>
	</div>


<div id="myModal" class="modal fade" role="dialog">
  <div class="modal-dialog">
    <div class="modal-content">
    </div>
  </div>
</div>

				<!-- /content area -->

			</div>
			<!-- /main content -->

		</div>
		<!-- /page content -->

	</div>
	<!-- /page container -->

<script>
    $('.ModalInativa').click(function(){
        var id = $(this).attr('data-id');
        $.ajax({url:"Inativar.php?id="+id,cache:false,success:function(result){
            $(".modal-content").html(result);
        }});
    });
</script>
<script>
    $('.ModalAtiva').click(function(){
        var id = $(this).attr('data-id');
        $.ajax({url:"Ativar.php?id="+id,cache:false,success:function(result){
            $(".modal-content").html(result);
        }});
    });
</script>
<script language="JavaScript">
function abrir(URL) {
 
  var width = 1200;
  var height = 650;
 
  var left = 99;
  var top = 99;
 
  window.open(URL,'janela', 'width='+width+', height='+height+', top='+top+', left='+left+', scrollbars=yes, status=no, toolbar=no, location=no, directories=no, menubar=no, resizable=no, fullscreen=no');
 
}
</script>


</body>
</html>
