<?php 
  include_once "core/xconfig.php";
 ?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <!-- <title>.: DREP :.</title> -->
    <title><?php echo $config['titulo']; ?></title>
    <!-- Bootstrap core CSS -->
    <!-- <link rel="stylesheet" href="static/css/normalize.css"> -->
    <link href="static/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="static/plugins/datepicker/css/bootstrap-datepicker.min.css">

    <!-- Add custom CSS here -->
    <link href="static/css/sb-admin.css" rel="stylesheet">
    <link rel="stylesheet" href="static/plugins/font-awesome/css/font-awesome.min.css">
    <!-- <script src="static/js/modernizr-2.8.3.min.js"></script> -->
  </head>

  <body>
    <div id="wrapper">
      <!-- Sidebar -->
      <nav class="navbar navbar-fixed-top nav-style" role="navigation">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
            <span class="sr-only">Toggle navigation</span>
            <i class="fa fa-bars" aria-hidden="true"></i>
          </button>
          <a class="navbar-brand" href="./">Sistema de Resoluciones 
            <sup>
              <small>
                <span class="label label-info">v1.0</span>
              </small>
            </sup>
          </a>
        </div>

        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse navbar-ex1-collapse">
          <ul class="nav navbar-nav">
            <li><a href="#"><i class="fa fa-plus"></i> Buscar</a></li>
          </ul> 
          <ul class="nav navbar-nav side-nav">
            <li><a href="panel.php"><i class="fa fa-home"></i> Inicio</a></li>
            <li><a href="registrar.php"><i class="fa fa-database"></i> Registrar RDR</a></li>
            <li><a href="buscar.php"><i class="fa fa-search"></i> Buscar RDR</a></li>
            <li><a href="#"><i class="fa fa-users"></i> Usuarios </a></li>
          </ul>
          <ul class="nav navbar-nav navbar-right navbar-user">
            <li class="dropdown user-dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-user"></i> Administrador <b class="caret"></b>
              </a>
              <ul class="dropdown-menu">
                <li><a href="#"><i class="fa fa-cog"></i> Configuracion</a></li>
                <li><a href="#"><i class="fa fa-sign-out"></i> Salir</a></li>
              </ul>
            </li>
            </ul>
          </div><!-- /.navbar-collapse -->
      </nav>