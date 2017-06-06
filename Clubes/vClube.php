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
							
	  </div>
					</div>
					<!-- /simple panel -->


					<!-- Table -->
					<div class="panel panel-flat">
						<div class="panel-heading">
							<h5 class="panel-title">Basic table</h5>
							<div class="heading-elements">
								<ul class="icons-list">
			                		<li><a data-action="collapse"></a></li>
			                		<li><a data-action="close"></a></li>
			                	</ul>
		                	</div>
	                	</div>

	                	<div class="panel-body">
	                		Starter pages include the most basic components that may help you start your development process - basic grid example, panel, table and form layouts with standard components. Nothing extra.
	                	</div>

						<div class="table-responsive">
							<table class="table">
								<thead>
									<tr>
										<th>#</th>
										<th>First Name</th>
										<th>Last Name</th>
										<th>Username</th>
									</tr>
								</thead>
								<tbody>
									<tr>
										<td>1</td>
										<td>Eugene</td>
										<td>Kopyov</td>
										<td>@Kopyov</td>
									</tr>
									<tr>
										<td>2</td>
										<td>Victoria</td>
										<td>Baker</td>
										<td>@Vicky</td>
									</tr>
									<tr>
										<td>3</td>
										<td>James</td>
										<td>Alexander</td>
										<td>@Alex</td>
									</tr>
									<tr>
										<td>4</td>
										<td>Franklin</td>
										<td>Morrison</td>
										<td>@Frank</td>
									</tr>
								</tbody>
							</table>
						</div>
					</div>
					<!-- /table -->


					<!-- Grid -->
					<div class="row">
						<div class="col-md-6">

							<!-- Horizontal form -->
							<div class="panel panel-flat">
								<div class="panel-heading">
									<h5 class="panel-title">Horizontal form</h5>
									<div class="heading-elements">
										<ul class="icons-list">
					                		<li><a data-action="collapse"></a></li>
					                		<li><a data-action="close"></a></li>
					                	</ul>
				                	</div>
			                	</div>

								<div class="panel-body">
									<form class="form-horizontal" action="#">
										<div class="form-group">
											<label class="control-label col-lg-2">Text input</label>
											<div class="col-lg-10">
												<input type="text" class="form-control">
											</div>
										</div>

										<div class="form-group">
											<label class="control-label col-lg-2">Password</label>
											<div class="col-lg-10">
												<input type="password" class="form-control">
											</div>
										</div>

				                        <div class="form-group">
				                        	<label class="control-label col-lg-2">Select</label>
				                        	<div class="col-lg-10">
					                            <select name="select" class="form-control">
					                                <option value="opt1">Basic select</option>
					                                <option value="opt2">Option 2</option>
					                                <option value="opt3">Option 3</option>
					                                <option value="opt4">Option 4</option>
					                                <option value="opt5">Option 5</option>
					                                <option value="opt6">Option 6</option>
					                                <option value="opt7">Option 7</option>
					                                <option value="opt8">Option 8</option>
					                            </select>
				                            </div>
				                        </div>

										<div class="form-group">
											<label class="control-label col-lg-2">Textarea</label>
											<div class="col-lg-10">
												<textarea rows="5" cols="5" class="form-control" placeholder="Default textarea"></textarea>
											</div>
										</div>

										<div class="text-right">
											<button type="submit" class="btn btn-primary">Submit form <i class="icon-arrow-right14 position-right"></i></button>
										</div>
									</form>
								</div>
							</div>
							<!-- /horizotal form -->

						</div>

						<div class="col-md-6">

							<!-- Vertical form -->
							<div class="panel panel-flat">
								<div class="panel-heading">
									<h5 class="panel-title">Vertical form</h5>
									<div class="heading-elements">
										<ul class="icons-list">
					                		<li><a data-action="collapse"></a></li>
					                		<li><a data-action="close"></a></li>
					                	</ul>
				                	</div>
			                	</div>

								<div class="panel-body">
									<form action="#">
										<div class="form-group">
											<label>Text input</label>
											<input type="text" class="form-control">
										</div>

				                        <div class="form-group">
				                        	<label>Select</label>
				                            <select name="select" class="form-control">
				                                <option value="opt1">Basic select</option>
				                                <option value="opt2">Option 2</option>
				                                <option value="opt3">Option 3</option>
				                                <option value="opt4">Option 4</option>
				                                <option value="opt5">Option 5</option>
				                                <option value="opt6">Option 6</option>
				                                <option value="opt7">Option 7</option>
				                                <option value="opt8">Option 8</option>
				                            </select>
				                        </div>

										<div class="form-group">
											<label>Textarea</label>
											<textarea rows="4" cols="4" class="form-control" placeholder="Default textarea"></textarea>
										</div>

										<div class="text-right">
											<button type="submit" class="btn btn-primary">Submit form <i class="icon-arrow-right14 position-right"></i></button>
										</div>
									</form>
								</div>
							</div>
							<!-- /vertical form -->

						</div>
					</div>
					<!-- /grid -->


					<!-- Footer -->
					<?php 
					include_once 'footer.php';
					?>
					<!-- /footer -->

				</div>
				<!-- /content area -->

			</div>
			<!-- /main content -->

		</div>
		<!-- /page content -->

	</div>
	<!-- /page container -->

</body>
</html>
