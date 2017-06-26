<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
    <!-- <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Creative - Bootstrap 3 Responsive Admin Template">
    <meta name="author" content="GeeksLabs">
    <meta name="keyword" content="Creative, Dashboard, Admin, Template, Theme, Bootstrap, Responsive, Retina, Minimal"> -->
    <link rel="shortcut icon" href="../img/favicon.png">
	<title>REGISTRO DE ALUMNO</title>
	 <!-- Bootstrap CSS -->
	<link href="../css/bootstrap.min.css" rel="stylesheet">
    <!-- bootstrap theme -->
    <link href="../css/bootstrap-theme.css" rel="stylesheet">
    <!--external css-->
    <!-- font icon -->
    <link href="../css/elegant-icons-style.css" rel="stylesheet" />
    <link href="../css/font-awesome.min.css" rel="stylesheet" />
    <!-- date picker -->
    
    <!-- color picker -->
    
    <!-- Custom styles -->
    <link href="../css/style.css" rel="stylesheet">
    <link href="../css/style-responsive.css" rel="stylesheet" />
</head>
<body><center>
    <!--header start-->
    <header class="header dark-bg">
            <div class="toggle-nav">
                <div class="icon-reorder tooltips" data-original-title="Toggle Navigation" data-placement="bottom"><i class="icon_menu"></i></div>
            </div>

            <!--logo start-->
            <a href="../index_admin.php" class="logo">SAInt <span class="lite">Admin</span></a>
            <!--logo end-->

            <!--  search form start -->
            <div class="nav search-row" id="top_menu">
                <ul class="nav top-menu">                    
                    <li>
                        <form class="navbar-form">
                            <input class="form-control" placeholder="Buscar" type="text">
                        </form>
                    </li>                    
                </ul>
            </div>
            <!--  search form end -->                

            <!-- notificatoin dropdown start-->
            <div class="top-nav notification-row">                
                <!-- user login dropdown start -->
                <ul class="nav pull-right top-menu">
                  <li class="dropdown">
                        <a data-toggle="dropdown" class="dropdown-toggle" href="#">
                            <span class="profile-ava">
                                <img alt="" src="../img/avatar1_small.jpg">
                            </span>
                            <span class="username">Admin</span>
                            <b class="caret"></b>
                        </a>
                        <ul class="dropdown-menu extended logout">
                            <div class="log-arrow-up"></div>
                            <li class="eborder-top">
                                <a href="#"><i class="icon_profile"></i>Perfil</a>
                            </li>
                            <li>
                                <a href="../index.php"><i class="icon_key_alt"></i>Salir</a>
                            </li>
                        </ul>
                    </li>
                </ul>
                <!-- user login dropdown end -->
            </div>
            <!-- notificatoin dropdown end-->
    </header>      
    <!--header end-->

      <!--sidebar start-->
        <aside>
          <div id="sidebar"  class="nav-collapse ">
              <!-- sidebar menu start-->
              <ul class="sidebar-menu">                
                  <li class="active">
                      <a class="" href="../index_admin.php">
                          <i class="icon_house_alt"></i>
                          <span>Inicio</span>
                      </a>
                  </li>          
                  <li class="sub-menu">
                        <a class="" href="../basic_table.php">
                          <i class="icon_table"></i>
                          <span>Gestor de Alumnos</span>
                        </a>
                  
              </ul>
              <!-- sidebar menu end-->
          </div>
      </aside>

      <!--Comienzo del contenido-->
      <section id="main-content">
          <section class="wrapper">
             <div class="row" >
                <div class="col-lg-12">
					<h3 class="page-header"><i class="fa fa-file-text-o"></i>REGISTO DE NUEVO ALUMNO</h3>
				</div>
			</div>
              <div class="row">
                  <div class="col-lg-12">
                      <section class="panel">
                          <header class="panel-heading">
                             DATOS DEL TUTOR
                          </header>
                          <div class="panel-form">
                              <form class="form-horizontal" method="get">
                              
                                  <div class="form-group">
                                      <label class="col-sm-2 control-label">Nombre</label>
                                      <div class="col-sm-10">
                                          <input type="text" class="form-control round-input">
                                      </div>
                                  </div>
                                  <div class="form-group">
                                      <label class="col-sm-2 control-label" color = "#E8E8E8">Apellido</label>
                                      <div class="col-sm-10">
                                          <input type="text" class="form-control round-input">
                                      </div>
                                  </div>
                                  <div class="form-group">
                                      <label class="col-sm-2 control-label">DNI</label>
                                      <div class="col-sm-10">
                                          <input type="text" class="form-control round-input">
                                      </div>
                                  </div>
                                  <div class="form-group">
                                      <label class="col-sm-2 control-label">Sexo</label>
                                      <div class="btn-group">
                                                  <a class="btn btn-default" href="" title="Bootstrap 3 themes generator">Seleccionar</a>
                                                  <a class="btn btn-default dropdown-toggle" data-toggle="dropdown" href="" title="Bootstrap 3 themes generator"><span class="caret"></span></a>
                                                  <ul class="dropdown-menu">
                                                    <li><a href="" title="Bootstrap 3 themes generator">Femenino</a></li>
                                                    <li class="divider"></li>
                                                    <li><a href="" title="Bootstrap 3 themes generator">Masculino</a></li>
                                                  </ul>
                                            </div>
                                  </div>
                                  <header class="panel-heading">
                                     LUGAR DONDE VIVE
                                  </header>
                                  <div class="panel-form">
                                  <div class="form-group">
                                      <label class="col-sm-2 control-label">Provincia</label>
                                      <div class="col-sm-10">
                                          <input type="text" class="form-control round-input">
                                      </div>
                                  </div>
                                  <div class="form-group">
                                      <label class="col-sm-2 control-label">Localidad</label>
                                      <div class="col-sm-10">
                                          <input type="text" class="form-control round-input">
                                      </div>
                                  </div>
                                  <div class="form-group">
                                      <label class="col-sm-2 control-label">Barrio</label>
                                      <div class="col-sm-10">
                                          <input type="text" class="form-control round-input">
                                      </div>
                                  </div>
                                  <div class="form-group">
                                      <label class="col-sm-2 control-label">Calle</label>
                                      <div class="col-sm-10">
                                          <input type="text" class="form-control round-input">
                                      </div>
                                  </div>
                                  <div class="form-group">
                                      <label class="col-sm-2 control-label">Manzana</label>
                                      <div class="col-sm-10">
                                          <input type="text" class="form-control round-input">
                                      </div>
                                  </div>
                                  <div class="form-group">
                                      <label class="col-sm-2 control-label">Casa</label>
                                      <div class="col-sm-10">
                                          <input type="text" class="form-control round-input">
                                      </div>
                                  </div>
                                  <div class="form-group">
                                      <label class="col-sm-2 control-label">Nacionalidad</label>
                                      <div class="col-sm-10">
                                          <input type="text" class="form-control round-input">
                                      </div>
                                  </div>
                              </form>
                          </div>
            </section>
            <!-- SIGUIENTE PÁGINA -->
                <!-- <div class="row">
                    <div class="col-lg-3">
                        <form action="">
                            <button type="submit" class="btn btn-primary btn-lg btn-block" onclick="this.form.action='forms-abm/parte-diario.php'">Siguiente</button>  
                        </form>
                    </div>
                </div>
 -->            </section>
                      </section>
    <!-- javascripts -->
    <script src="../js/jquery.js"></script>
    <script src="../js/bootstrap.min.js"></script>
    <!-- nice scroll -->
    <script src="../js/jquery.scrollTo.min.js"></script>
    <script src="../js/jquery.nicescroll.js" type="text/javascript"></script>
    <!--custome script for all page-->
    <script src="../js/scripts.js"></script>

</center></body>
</html>