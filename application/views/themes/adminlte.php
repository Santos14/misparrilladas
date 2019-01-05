<?php $this->nombre_empresa = 'misparrilladas';
	  $this->metodo = 'Metodo';
	  $this->controller = 'Controlador';
?>

<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title><?php echo $this->nombre_empresa; ?></title>

  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <!-- Bootstrap 3.3.7 -->
  <link rel="stylesheet" href="<?php echo base_url('assets/themes/adminlte/bower_components/bootstrap/dist/css/bootstrap.min.css') ?>">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="<?php echo base_url('assets/themes/adminlte/bower_components/font-awesome/css/font-awesome.min.css')?>">
  <!-- Ionicons -->
  <link rel="stylesheet" href="<?php echo base_url('assets/themes/adminlte/bower_components/Ionicons/css/ionicons.min.css')?>">
  <!-- Theme style -->
  <link rel="stylesheet" href="<?php echo base_url('assets/themes/adminlte/dist/css/AdminLTE.min.css')?>">
  <!-- AdminLTE Skins. Choose a skin from the css/skins
       folder instead of downloading all of them to reduce the load. -->
  <link rel="stylesheet" href="<?php echo base_url('assets/themes/adminlte/dist/css/skins/_all-skins.min.css')?>">

	  <!-- jQuery 3 -->
	<script src="<?php echo base_url('assets/themes/adminlte/bower_components/jquery/dist/jquery.min.js')?>"></script>
	<!-- Bootstrap 3.3.7 -->
	<script src="<?php echo base_url('assets/themes/adminlte/bower_components/bootstrap/dist/js/bootstrap.min.js')?>"></script>
	<!-- AdminLTE App -->
	<script src="<?php echo base_url('assets/themes/adminlte/dist/js/adminlte.min.js')?>"></script>

<?php
	/** -- Copy from here -- */
	if(!empty($meta))
	foreach($meta as $name=>$content){
		echo "\n\t\t";
		?><meta name="<?php echo $name; ?>" content="<?php echo $content; ?>" /><?php
			 }
	echo "\n";

	if(!empty($canonical))
	{
		echo "\n\t\t";
		?><link rel="canonical" href="<?php echo $canonical?>" /><?php

	}
	echo "\n\t";

	foreach($css as $file){
	 	echo "\n\t\t";
		?><link rel="stylesheet" href="<?php echo $file; ?>" type="text/css" /><?php
	} echo "\n\t";

	foreach($js as $file){
			echo "\n\t\t";
			?><script src="<?php echo $file; ?>"></script><?php
	} echo "\n\t";
	/** -- to here -- */
?>


  <!-- Google Font -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
</head>



<body class="skin-green sidebar-mini fixed">
<!-- Site wrapper -->
<div class="wrapper">

 	<header class="main-header">
    <!-- Logo -->
	    <a href="../../index2.html" class="logo">
	      <!-- mini logo for sidebar mini 50x50 pixels -->
	      <span class="logo-mini"><b><?php echo $this->nombre_empresa[0] ?></b>Sis</span>
	      <!-- logo for regular state and mobile devices -->
	      <span class="logo-lg"><b><?php echo $this->nombre_empresa ?></b>SIS</span>
	    </a>
	    <!-- Header Navbar: style can be found in header.less -->
	    <nav class="navbar navbar-static-top">
	      <!-- Sidebar toggle button-->
	      <a href="#" class="sidebar-toggle" data-toggle="push-menu" role="button">
	        <span class="sr-only">Toggle navigation</span>
	        <span class="icon-bar"></span>
	        <span class="icon-bar"></span>
	        <span class="icon-bar"></span>
	      </a>

	      <div class="navbar-custom-menu">
	        <ul class="nav navbar-nav">
	          
	          <!-- User Account: style can be found in dropdown.less -->
	          <li class="dropdown user user-menu">
	            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
	              <img src="<?php echo base_url('assets/themes/adminlte/dist/img/user2-160x160.jpg')?>" class="user-image" alt="User Image">
	              <span class="hidden-xs">Alexander Pierce</span>
	            </a>
	            <ul class="dropdown-menu">
	              <!-- User image -->
	              <li class="user-header">
	                <img src="<?php echo base_url('assets/themes/adminlte/dist/img/user2-160x160.jpg')?>" class="img-circle" alt="User Image">

	                <p>
	                  Alexander Pierce - Web Developer
	                  <small>Member since Nov. 2012</small>
	                </p>
	              </li>
	              <!-- Menu Body -->
	              <li class="user-body">
	                <div class="row">
	                  <div class="col-xs-4 text-center">
	                    <a href="#">Followers</a>
	                  </div>
	                  <div class="col-xs-4 text-center">
	                    <a href="#">Sales</a>
	                  </div>
	                  <div class="col-xs-4 text-center">
	                    <a href="#">Friends</a>
	                  </div>
	                </div>
	                <!-- /.row -->
	              </li>
	              <!-- Menu Footer-->
	              <li class="user-footer">
	                <div class="pull-left">
	                  <a href="#" class="btn btn-default btn-flat">Profile</a>
	                </div>
	                <div class="pull-right">
	                  <a href="#" class="btn btn-default btn-flat">Sign out</a>
	                </div>
	              </li>
	            </ul>
	          </li>

	        </ul>
	      </div>
	    </nav>
  	</header>

  	<!-- =============================================== -->

  	<!-- Left side column. contains the sidebar -->
  	<aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
	    <section class="sidebar">
	      <!-- Sidebar user panel -->
	      	<div class="user-panel">
		        <div class="pull-left image">
		          <img src="<?php echo base_url('assets/themes/adminlte/dist/img/user2-160x160.jpg')?>" class="img-circle" alt="User Image">
		        </div>
		        <div class="pull-left info">
		          <p>Nombre Usuario</p>
		          <a href="#"><i class="fa fa-circle text-success"></i> Perfil</a>
		        </div>
	      	</div>
	      <!-- search form -->
		    <form action="#" method="get" class="sidebar-form">
		        <div class="input-group">
		          <input type="text" name="q" class="form-control" placeholder="Search...">
		          <span class="input-group-btn">
		                <button type="submit" name="search" id="search-btn" class="btn btn-flat"><i class="fa fa-search"></i>
		                </button>
		              </span>
		        </div>
		    </form>
	      <!-- /.search form -->
	      <!-- sidebar menu: : style can be found in sidebar.less -->
		    <ul class="sidebar-menu" data-widget="tree">
		        <li class="header">Navegación</li>
		        

		        <li class="treeview">
                <a href="#">
                    <i class="fa fa-key"></i> <span> Seguridad </span>
                    <span class="pull-right-container">
                      <i class="fa fa-angle-left pull-right"></i>
                    </span>
                  </a>
                  <ul class="treeview-menu"><li><a href="/template/seguridad/perfiles"><i class="fa fa-users"></i> Perfiles</a></li><li><a href="/template/seguridad/modulos"><i class="fa fa-table"></i> Modulos</a></li><li><a href="/template/seguridad/usuarios"><i class="fa fa-user"></i> Usuario</a></li></ul> 
              	</li>
		    </ul>
	    </section>
    <!-- /.sidebar -->
  	</aside>

  	  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->    
    <section class="content-header">
      <h1>
        <?php echo $this->controller ?>
        <small><?php echo $this->metodo ?></small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="<?php echo site_url();?>"><i class="fa fa-home"></i> Inicio</a></li>
        <li><a href="#"><?php echo $this->controller ?></a></li>
        <li class="active"><?php echo $this->metodo ?></li>
      </ol>
    </section>



    <!-- Main content -->
    <section class="content">

     	<?php echo $output;?>

    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

    <footer class="main-footer">
	    <div class="pull-right hidden-xs">
	      <b>Version</b> 1.0
	    </div>
	    <strong>Copyright &copy; 2018 <a href="https://adminlte.io"><?php echo $this->nombre_empresa ?></a>.</strong> All rights
	    reserved.
  	</footer>

  


<?php 

	

	

?>


</body>
</html>



