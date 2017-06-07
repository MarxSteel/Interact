   <div class="sidebar sidebar-main">
	<div class="sidebar-content">
	 <div class="sidebar-user-material">
	  <div class="category-content">
	   <div class="sidebar-user-material-content">
		<a href="#"><img src="<?php echo $server; ?>assets/images/perfil/<?php echo $phoSocio; ?>" class="img-circle img-responsive" alt=""></a>
		<h6><?php echo $nomSocio; ?></h6>
		<span class="text-size-small"><?php echo $NomeClube; ?><br />Distrito <?php echo $Distrito; ?></span>
	   </div>														
	   <div class="sidebar-user-material-menu">
		<a href="#user-nav" data-toggle="collapse"><span>Minha Conta</span> <i class="caret"></i></a>
	   </div>
	  </div>
      <div class="navigation-wrapper collapse" id="user-nav">
	   <ul class="navigation">
	    <li><a href="#"><i class="icon-user-plus"></i> <span>Meu Perfil</span></a></li>
	    <li><a href="#"><i class="icon-coins"></i> <span>Relatório de Uso</span></a></li>
	    <li class="divider"></li>
	    <li><a href="#"><i class="icon-cog5"></i> <span>Configura&ccedil;&atilde;o de Perfil</span></a></li>
	    <li><a href="#"><i class="icon-switch2"></i> <span>Sair do Sistema</span></a></li>
	   </ul>
	  </div>
	 </div>
	 <div class="sidebar-category sidebar-category-visible">
	  <div class="category-content no-padding">
	   <ul class="navigation navigation-main navigation-accordion">
		<li class="active">
		 <a href="index.html"><i class="icon-home4"></i> <span>In&iacute;cio</span></a>
		</li>
		<li <?php echo $aDist; ?>>
		 <a href="#"><i class="icon-cog"></i> <span>Distrito <?php echo $Distrito; ?></span></a>
	      <ul>
		   <li <?php echo $aDClube; ?>><a href="Clubes/dashboard.php">
		    <i class="icon-flag3"></i>Clubes</a></li>
		   <li <?php echo $aDSocio; ?>><a href="Associados/dashboard.php">
		    <i class="icon-users2"></i>Associados</a></li>
		   <li <?php echo $aDProjeto; ?>><a href="Projetos/dashboard.php">
		    <i class="icon-users2"></i>Projetos</a></li>
		  </ul>
		</li>
	   </ul>
	  </div>
	 </div>
	</div>
   </div>