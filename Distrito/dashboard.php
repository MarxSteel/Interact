<?php
include_once '../sess.php';
include_once '../dados.php';
$hosts = 'http://localhost:8888/interact/Interact/';
include_once '../lib/qyuser.php';
$aUser = 'class="active"';
  $db = DB();
   $ChamaNome = $db->prepare("SELECT nomeCom FROM ic_socio WHERE id='$a'");
    $ChamaNome->execute();
     $Nom = $ChamaNome->fetch();
     $ANome = $Nom['nomeCom'];

?>
<!DOCTYPE html>
<html lang="pt">
<head>
 <meta charset="utf-8">
 <meta http-equiv="X-UA-Compatible" content="IE=edge">
 <meta name="viewport" content="width=device-width, initial-scale=1">
 <title><?php echo $server; ?></title>
 <link href="https://fonts.googleapis.com/css?family=Roboto:400,300,100,500,700,900" rel="stylesheet" type="text/css">
 <link href="../assets/css/icons/icomoon/styles.css" rel="stylesheet" type="text/css">
 <link href="../assets/css/bootstrap.css" rel="stylesheet" type="text/css">
 <link href="../assets/css/core.css" rel="stylesheet" type="text/css">
 <link href="../assets/css/components.css" rel="stylesheet" type="text/css">
 <link href="../assets/css/colors.css" rel="stylesheet" type="text/css">
	<!-- /global stylesheets -->


	<!-- /theme JS files -->


<style type="text/css">


a:visited{
text-decoration:none;
color:white;
}

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
 <div class="navbar navbar-default " style="position: relative; z-index: 30">
  <div class="navbar-header">
   <a class="navbar-nav pull-right" >
    <img src="<?php echo $hosts; ?>assets/images/logos/icbr_logo.png" width=200 alt=""></a>
   <ul class="nav navbar-nav pull-left visible-xs-block">
    <li><a class="sidebar-mobile-main-toggle"><i class="icon-paragraph-justify3"></i></a></li>
   </ul>	
  </div>
  <div class="navbar-collapse collapse" id="navbar-mobile">
   <div class="navbar-right">
    <p class="navbar-text">Ol&aacute;, <?php echo $nomSocio; ?>!</p>				
    <?php include_once '../notifications.php' ?>
   </div>
  </div>
 </div>
 <div class="page-container">
  <div class="page-content">
   <?php include_once '../sidebar.php'; ?>
   <div class="content-wrapper">
    <div class="content">
     <div class="col-md-4 col-xs-12">
	  <div class="sidebar-detached">
	   <div class="sidebar sidebar-default sidebar-separate">
		<div class="sidebar-content">
		 <!-- User details -->
		 <div class="content-group">
		  <div class="panel-body bg-indigo-400 border-radius-top text-center" style="background-image: url(http://demo.interface.club/limitless/assets/images/bg.png); background-size: contain;">
		   <div class="content-group-sm">
			<h6 class="text-semibold no-margin-bottom"><?php echo userNome($dRDI); ?></h6>
			<span class="display-block"><?php echo userMail($dRDI); ?></span>
		   </div>
		   <a href="#" class="display-inline-block content-group-sm">
			<img src="../assets/images/perfil/<?php echo userFoto($dRDI); ?>" class="img-circle img-responsive" alt="" style="width: 110px; height: 110px;">
		   </a>
		  </div>
		  <div class="panel no-border-top no-border-radius-top">
		   <ul class="navigation">
			<li>
			 <a href="#profile" data-toggle="tab">Nascimento: 20/10/2010</a>
			</li>
			<li>
			 <a href="#schedule" data-toggle="tab"><i class="icon-files-empty"></i> Schedule</a>
			</li>
			<li>
			 <a href="#messages" data-toggle="tab"><i class="icon-files-empty"></i> Inbox <span class="badge bg-warning-400">23</span></a>
			</li>
			<li><a href="#orders" data-toggle="tab"><i class="icon-files-empty"></i> Orders</a></li>
			<li class="navigation-divider"></li>
			<li><a href="login_advanced.html"><i class="icon-switch2"></i> Log out</a></li>
										</ul>
									</div>
								</div>
								<!-- /user details -->


								<!-- Online users -->
								<div class="sidebar-category">
									<div class="category-title">
										<span>Online users</span>
										<ul class="icons-list">
											<li><a href="#" data-action="collapse"></a></li>
										</ul>
									</div>

									<div class="category-content">
										<ul class="media-list">
											<li class="media">
												<a href="#" class="media-left"><img src="assets/images/placeholder.jpg" class="img-sm img-circle" alt=""></a>
												<div class="media-body">
													<a href="#" class="media-heading text-semibold">James Alexander</a>
													<span class="text-size-mini text-muted display-block">Santa Ana, CA.</span>
												</div>
												<div class="media-right media-middle">
													<span class="status-mark border-success"></span>
												</div>
											</li>

											<li class="media">
												<a href="#" class="media-left"><img src="assets/images/placeholder.jpg" class="img-sm img-circle" alt=""></a>
												<div class="media-body">
													<a href="#" class="media-heading text-semibold">Jeremy Victorino</a>
													<span class="text-size-mini text-muted display-block">Dowagiac, MI.</span>
												</div>
												<div class="media-right media-middle">
													<span class="status-mark border-danger"></span>
												</div>
											</li>

											<li class="media">
												<a href="#" class="media-left"><img src="assets/images/placeholder.jpg" class="img-sm img-circle" alt=""></a>
												<div class="media-body">
													<a href="#" class="media-heading text-semibold">Margo Baker</a>
													<span class="text-size-mini text-muted display-block">Kasaan, AK.</span>
												</div>
												<div class="media-right media-middle">
													<span class="status-mark border-success"></span>
												</div>
											</li>

											<li class="media">
												<a href="#" class="media-left"><img src="assets/images/placeholder.jpg" class="img-sm img-circle" alt=""></a>
												<div class="media-body">
													<a href="#" class="media-heading text-semibold">Beatrix Diaz</a>
													<span class="text-size-mini text-muted display-block">Neenah, WI.</span>
												</div>
												<div class="media-right media-middle">
													<span class="status-mark border-warning"></span>
												</div>
											</li>

											<li class="media">
												<a href="#" class="media-left"><img src="assets/images/placeholder.jpg" class="img-sm img-circle" alt=""></a>
												<div class="media-body">
													<a href="#" class="media-heading text-semibold">Richard Vango</a>
													<span class="text-size-mini text-muted display-block">Grapevine, TX.</span>
												</div>
												<div class="media-right media-middle">
													<span class="status-mark border-grey-400"></span>
												</div>
											</li>
										</ul>
									</div>
								</div>
								<!-- /online-users -->


								<!-- Latest updates -->
								<div class="sidebar-category">
									<div class="category-title">
										<span>Latest updates</span>
										<ul class="icons-list">
											<li><a href="#" data-action="collapse"></a></li>
										</ul>
									</div>

									<div class="category-content">
										<ul class="media-list">
											<li class="media">
												<div class="media-left">
													<a href="#" class="btn border-primary text-primary btn-flat btn-rounded btn-icon btn-sm"><i class="icon-git-pull-request"></i></a>
												</div>

												<div class="media-body">
													Drop the IE <a href="#">specific hacks</a> for temporal inputs
													<div class="media-annotation">4 minutes ago</div>
												</div>
											</li>

											<li class="media">
												<div class="media-left">
													<a href="#" class="btn border-warning text-warning btn-flat btn-rounded btn-icon btn-sm"><i class="icon-git-commit"></i></a>
												</div>
												
												<div class="media-body">
													Add full font overrides for popovers and tooltips
													<div class="media-annotation">36 minutes ago</div>
												</div>
											</li>

											<li class="media">
												<div class="media-left">
													<a href="#" class="btn border-info text-info btn-flat btn-rounded btn-icon btn-sm"><i class="icon-git-branch"></i></a>
												</div>
												
												<div class="media-body">
													<a href="#">Chris Arney</a> created a new <span class="text-semibold">Design</span> branch
													<div class="media-annotation">2 hours ago</div>
												</div>
											</li>

											<li class="media">
												<div class="media-left">
													<a href="#" class="btn border-success text-success btn-flat btn-rounded btn-icon btn-sm"><i class="icon-git-merge"></i></a>
												</div>
												
												<div class="media-body">
													<a href="#">Eugene Kopyov</a> merged <span class="text-semibold">Master</span> and <span class="text-semibold">Dev</span> branches
													<div class="media-annotation">Dec 18, 18:36</div>
												</div>
											</li>

											<li class="media">
												<div class="media-left">
													<a href="#" class="btn border-primary text-primary btn-flat btn-rounded btn-icon btn-sm"><i class="icon-git-pull-request"></i></a>
												</div>
												
												<div class="media-body">
													Have Carousel ignore keyboard events
													<div class="media-annotation">Dec 12, 05:46</div>
												</div>
											</li>
										</ul>
									</div>
								</div>
								<!-- /latest updates -->

							</div>
						</div>
					</div>







     </div>



 



	<?php include_once '../footer.php'; ?>
	</div>
   </div>
  </div>
 </div>
</body>
	<!-- Core JS files -->
 <script type="text/javascript" src="../assets/js/plugins/loaders/pace.min.js"></script>
 <script type="text/javascript" src="../assets/js/core/libraries/jquery.min.js"></script>
 <script type="text/javascript" src="../assets/js/core/libraries/bootstrap.min.js"></script>
 <script type="text/javascript" src="../assets/js/plugins/loaders/blockui.min.js"></script>
	<!-- /core JS files -->

	<!-- Theme JS files -->
 <script type="text/javascript" src="../assets/js/plugins/visualization/d3/d3.min.js"></script>
 <script type="text/javascript" src="../assets/js/plugins/visualization/d3/d3_tooltip.js"></script>
 <script type="text/javascript" src="../assets/js/plugins/forms/styling/switchery.min.js"></script>
 <script type="text/javascript" src="../assets/js/plugins/forms/styling/uniform.min.js"></script>
 <script type="text/javascript" src="../assets/js/plugins/forms/selects/bootstrap_multiselect.js"></script>
 <script type="text/javascript" src="../assets/js/plugins/ui/moment/moment.min.js"></script>
 <script type="text/javascript" src="../assets/js/plugins/pickers/daterangepicker.js"></script>

 <script type="text/javascript" src="../assets/js/core/app.js"></script>
 <script type="text/javascript" src="../assets/js/pages/dashboard.js"></script>

 <script type="text/javascript" src="../assets/js/plugins/ui/ripple.min.js"></script>

</html>
