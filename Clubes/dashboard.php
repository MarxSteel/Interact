<?php
include_once '../sess.php';
include_once '../dados.php';
include_once '../lib/qyuser.php';
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
	<script type="text/javascript" src="../assets/js/plugins/loaders/pace.min.js"></script>
	<script type="text/javascript" src="../assets/js/core/libraries/jquery.min.js"></script>
	<script type="text/javascript" src="../assets/js/core/libraries/bootstrap.min.js"></script>
	<script type="text/javascript" src="../assets/js/plugins/loaders/blockui.min.js"></script>
	<!-- /core JS files -->

	<!-- Theme JS files -->
 <script type="text/javascript" src="../assets/js/plugins/tables/datatables/datatables.min.js"></script>
 <script type="text/javascript" src="../assets/js/pages/datatables_basic.js"></script>

	<!-- Theme JS files -->
	<script type="text/javascript" src="../assets/js/core/libraries/jquery_ui/core.min.js"></script>
	<script type="text/javascript" src="../assets/js/plugins/forms/wizards/form_wizard/form.min.js"></script>
	<script type="text/javascript" src="../assets/js/plugins/forms/wizards/form_wizard/form_wizard.min.js"></script>
	<script type="text/javascript" src="../assets/js/plugins/forms/selects/select2.min.js"></script>
	<script type="text/javascript" src="../assets/js/plugins/forms/styling/uniform.min.js"></script>
	<script type="text/javascript" src="../assets/js/core/libraries/jasny_bootstrap.min.js"></script>
	<script type="text/javascript" src="../assets/js/plugins/forms/validation/validate.min.js"></script>
	<script type="text/javascript" src="../assets/js/plugins/notifications/sweet_alert.min.js"></script>

	<script type="text/javascript" src="../assets/js/core/app.js"></script>
	<script type="text/javascript" src="../assets/js/pages/wizard_form.js"></script>

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
		<button type="button" class="btn bg-blue-400 btn-sm btn-labeled btn-rounded" data-toggle="modal" data-target="#modal_default"><b><i class="icon-play3 position-right"></i></b> Cadastrar Club</button>
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

<div id="modal_default" class="modal fade">
 <div class="modal-dialog modal-lg">
  <div class="modal-content">
   <div class="modal-header">
	<button type="button" class="close" data-dismiss="modal">&times;</button>
	<h5 class="modal-title">Basic modal</h5>
   </div>
   <div class="modal-body">


<form class="form-ajax" action="ajax.php" method="post">
 <fieldset class="step" id="ajax-step1">
  <h6 class="form-wizard-title text-semibold">
   <span class="form-wizard-count">1</span>Informações do Clube
  </h6>
  <div class="row">
   <div class="col-md-6">
	<div class="form-group">
	 <label>Interact Club de:</label>
	 <input type="text" name="clubeNome" class="form-control" placeholder="John Doe">
    </div>
   </div>
   <div class="col-md-6">
   <label>Date of birth:</label>
   <input type="text" name="DataFund" class="form-control" minlength="10" maxlength="10" OnKeyPress="formatar('##/##/####', this)" required="required" placeholder="Data">
   </div>
   <div class="col-md-12">
	<div class="form-group">
	 <label>Rotary Club(s) Patrocinador(es):</label>
	 <input type="text" name="clubeNome" class="form-control" placeholder="John Doe">
    </div>
   </div>
  </div>
 </fieldset>
 <fieldset class="step" id="ajax-step2">
  <h6 class="form-wizard-title text-semibold">
   <span class="form-wizard-count">2</span>
	Informações de Endereço e de Reunião
	<small class="display-block"></small>
  </h6>
  <div class="row">
   <div class="col-md-8">
	<div class="form-group">
     <label>Locald e Reunião:</label>
      <input type="text" name="local" placeholder="Ex.: Casa da Amizade" class="form-control">
	</div>
   </div>
   <div class="col-md-4">
	<div class="form-group">
     <label>Horário:</label>
      <input type="text" name="horario" placeholder="22:00" minlength="5" maxlength="5" class="form-control">
	</div>
   </div>
   <div class="col-md-6">
	<div class="form-group">
	 <label>Periodo:</label>
     <select name="periodo" data-placeholder="Selecione um Estado..." class="select">
	  <option></option> 
      <option value="Semanal"> Semanal</option>
      <option value="Quinzenal"> Quinzenal</option>
      <option value="Mensal"> Mensal</option>
	 </select>
	</div>
  </div>
   <div class="col-md-6">
	<div class="form-group">
	 <label>Dia da Semana:</label>
     <select name="semana" data-placeholder="Selecione um Estado..." class="select">
	  <option></option> 
      <option value="SEG"> Segunda-Feira</option>
      <option value="TER"> Terça-Feira</option>
      <option value="Qua"> Quarta-Feira</option>
      <option value="Qui"> Quinta Feira</option>
      <option value="SEX"> Sexta-Feira</option>
      <option value="SAB"> S&aacute;bado</option>
      <option value="DOM"> Domingo</option>
	 </select>
	</div>
  </div>
   <div class="col-md-8">
	<div class="form-group">
     <label>Rua:</label>
      <input type="text" name="rua" placeholder="Ex.: Avenida 7 de Setembro" class="form-control">
	</div>
   </div>
   <div class="col-md-4">
	<div class="form-group">
     <label>Número:</label>
      <input type="text" name="rua" placeholder="1234" class="form-control">
	</div>
   </div>
   <div class="col-md-4">
	<div class="form-group">
     <label>CEP</label>
      <input type="text" name="cep" class="form-control">
	</div>
   </div>
   <div class="col-md-8">
	<div class="form-group">
     <label>Bairro/setor:</label>
      <input type="text" name="bairro" class="form-control">
	</div>
   </div>
   <div class="col-md-6">
	<div class="form-group">
     <label>Cidade</label>
      <input type="text" name="cidade" class="form-control">
	</div>
   </div>
   <div class="col-md-6">
	<div class="form-group">
	 <label>Estado:</label>
     <select name="UF" data-placeholder="Selecione um Estado..." class="select">
	  <option></option> 
         <option value="AC"> Acre</option>
         <option value="AL"> Alagoas</option>
         <option value="AM"> Amap&aacute;</option>
         <option value="BA"> Bahia</option>
         <option value="CE"> Cear&aacute;</option>
         <option value="DF"> Distrito Federal</option>
         <option value="ES"> Esp&iacute;rito Santo</option>
         <option value="GO"> Goi&aacute;</option>
         <option value="MA"> Maranh&atilde;o</option>
         <option value="MT"> Mato Grosso</option>
         <option value="MS"> Mato Grosso do Sul</option>
         <option value="MG"> Minas Gerais</option>
         <option value="PA"> Par&aacute;</option>
         <option value="PB"> Para&iacute;ba</option>
         <option value="PR"> Paran&aacute;</option>
         <option value="PE"> Pernambuco</option>
         <option value="PI"> Piau&iacute;</option>
         <option value="RJ"> Rio de Janeiro</option>
         <option value="RN"> Rio Grande do Norte</option>
         <option value="RS"> Rio Grande do Sul</option>
         <option value="RO"> Rond&ocirc;nia</option>
         <option value="RR"> Roraima</option>
         <option value="SC"> Santa Catarina</option>
         <option value="SP"> S&atilde;o Paulo</option>
         <option value="SE"> Sergipe</option>
         <option value="TO"> Tocantins</option>
	 </select>
	</div>
  </div>
 </div>
 </fieldset>
 <fieldset class="step" id="ajax-step3">
  <h6 class="form-wizard-title text-semibold">
   <span class="form-wizard-count">3</span>
	Contato e Redes Sociais
  </h6>
  <div class="row">
   <div class="col-md-6">
    <div class="form-group">
	 <label>E-Mail do Clube</label>
	  <input type="email" name="mail1" class="form-control" placeholder="your@email.com">
	</div>
   </div>
  <div class="col-md-6">
    <div class="form-group">
	 <label>E-Mail para Projetos</label>
	  <input type="email" name="mail2" class="form-control" placeholder="your@email.com">
	</div>
   </div>
  <div class="col-md-6">
   <div class="form-group">
	<label>Telefone 1</label>
	 <input type="text" name="tel1" class="form-control" placeholder="66-777-888-999" data-mask="99-999-999-999">
	</div> 
  </div>
  <div class="col-md-6">
   <div class="form-group">
	<label>Telefone 2</label>
	 <input type="text" name="tel2" class="form-control" placeholder="66-777-888-999" data-mask="99-999-999-999">
	</div> 
  </div>
 </div>
</fieldset>
<div class="form-wizard-actions">
 <button class="btn btn-default" id="ajax-back" type="reset">Voltar</button>
 <button class="btn btn-info" id="ajax-next" type="submit">Proximo</button>
</div>
</form>
 </div>
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

<script language="JavaScript">
function abrir(URL) {
 
  var width = 1200;
  var height = 650;
 
  var left = 99;
  var top = 99;
 
  window.open(URL,'janela', 'width='+width+', height='+height+', top='+top+', left='+left+', scrollbars=yes, status=no, toolbar=no, location=no, directories=no, menubar=no, resizable=no, fullscreen=no');
 
}
</script>
<script>
function formatar(mascara, documento){
  var i = documento.value.length;
  var saida = mascara.substring(0,1);
  var texto = mascara.substring(i)
  
  if (texto.substring(0,1) != saida){
            documento.value += texto.substring(0,1);
  }
  
}
</script>

</body>
</html>
