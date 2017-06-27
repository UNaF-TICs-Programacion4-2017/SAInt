<?php 
    include_once "consultar.php";
    include "noreturn.php";
 ?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="img/favicon.png">

    <title>Datos del Curso</title>

    <!-- Bootstrap CSS -->    
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <!-- bootstrap theme -->
    <link href="css/bootstrap-theme.css" rel="stylesheet">
    <!--external css-->
    <!-- font icon -->
    <link href="css/elegant-icons-style.css" rel="stylesheet" />
    <link href="css/font-awesome.min.css" rel="stylesheet" />
    <!-- Custom styles -->
    <link href="css/style.css" rel="stylesheet">
    <link href="css/style-responsive.css" rel="stylesheet" />

  </head>

  <body>
  <!-- container section start -->
  <section id="container" class="">
      <!--header start-->
    <header class="header dark-bg">
            <div class="toggle-nav">
                <div class="icon-reorder tooltips" data-original-title="Toggle Navigation" data-placement="bottom"><i class="icon_menu"></i></div>
            </div>

            <!--logo start-->
            <a href="../index-admin.php" class="logo">SAInt <span class="lite">Admin</span></a>
            <!--logo end-->

            <!--  search form start -->
            <div class="nav search-row" id="top_menu">
                <ul class="nav top-menu">                    
                    <li>
                        <form class="navbar-form">
                            <input class="form-control" placeholder="Search" type="text">
                        </form>
                    </li>                    
                </ul>
            </div>
            <!--  search form end -->                

            <!-- notificatoin dropdown start-->
            <div class="top-nav notification-row">                
                <!-- user login dropdown start-->
                <ul class="nav pull-right top-menu">
                    <li class="dropdown">
                        <a data-toggle="dropdown" class="dropdown-toggle" href="#">
                            <span class="profile-ava">
                                <img alt="" src="img/avatar1_small.jpg">
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
                                <a href="index.php"><i class="icon_key_alt"></i>Salir</a>
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
          <!-- sidebar menu start-->
          <div id="sidebar"  class="nav-collapse ">
              <ul class="sidebar-menu">                
                  <li class="active">
                      <a class="" href="index_admin.php">
                          <i class="icon_house_alt"></i>
                          <span>Inicio</span>
                      </a>
                  </li>          
                  <li class="sub-menu">
                        <a class="" href="basic_table.php">
                          <i class="icon_table"></i>
                          <span>Gestor de Alumnos</span>
                        </a>    
              </ul>
          </div>
          <!-- sidebar menu end-->
      </aside>
      <!--sidebar end-->
      <!--main content start-->
      <section id="main-content">
          <section class="wrapper">
          <!--overview start-->
          <div class="row">
                <div class="col-lg-12">
                    <h3 class="page-header"><i class="fa fa-table"></i> Detalle Alumnos</h3>
                </div>
            </div>
              <!-- page start-->
              
              </div>
              <div class="row">
                  <div class="col-lg-12">
                      <section class="panel">
                          <header class="panel-heading">
                            <a class="btn btn-primary" href="forms-abm/registar-alumno.php" title="Agregar un nuevo alumno">Agregar</a>
                              Curso 4 IV
                          </header>
                          <table class="table table-striped table-advance table-hover">
                           <tbody>
                              <tr>
                                 <th><i class="icon_profile"></i> Apellido y Nombre</th>
                                 <th></i> DNI</th>
                                 <th><i class="icon_mobile"></i> Telefono</th>
                                 <th><i class="icon_mobile"></i>Telefono Tutor</th>
                                 <th><i class="icon_cogs"></i>Accion</th>
                              </tr>
                              <tr>
                                 <td>Angeline Mcclain</td>
                                 <td>234234234</td>
                                 <td>3704897632</td>
                                 <td>3704897632</td>
                                 
                                 <td>
                                  <div class="btn-group">
                                      <a class="btn btn-primary" href="forms-abm\registar-alumno.php" title = "Modificar"><i class="icon_plus_alt2"></i></a>
                                      
                                      <a class="btn btn-danger" href="" title = "Eliminar"><i class="icon_close_alt2"></i></a>
                                  </div>
                                  </td>
                              </tr>
                              <tr>
                                 <td>Sung Carlson</td>
                                 <td>234234234</td>
                                 <td>3704897632</td>
                                 <td>3704897632</td>
                                
                                 <td>
                                  <div class="btn-group">
                                      <a class="btn btn-primary" href="#" title = "Modificar"><i class="icon_plus_alt2"></i></a>
                                      
                                      <a class="btn btn-danger" href="#" title="Eliminar"><i class="icon_close_alt2"></i></a>
                                  </div>
                                  </td>
                              </tr>
                              <tr>
                                 <td>Bryon Osborne</td>
                                 <td>234234234</td>
                                 <td>3704897632</td>
                                 <td>3704897632</td>
                                 
                                 <td>
                                 <div class="btn-group">
                                      <a class="btn btn-primary" href="#" title = "Modificar"><i class="icon_plus_alt2"></i></a>
                                      
                                      <a class="btn btn-danger" href="#" title="Eliminar"><i class="icon_close_alt2"></i></a>
                                  </div>
                                  </td>
                              </tr>
                              <tr>
                                 <td>Dalia Marquez</td>
                                 <td>234234234</td>
                                 <td>3704897632</td>
                                 <td>3704897632</td>
                                 
                                 <td>
                                  <div class="btn-group">
                                      <a class="btn btn-primary" href="#" title = "Modificar"><i class="icon_plus_alt2"></i></a>
                                      
                                      <a class="btn btn-danger" href="#" title="Eliminar"><i class="icon_close_alt2"></i></a>
                                  </div>
                                  </td>
                              </tr>
                                              
                           </tbody>
                        </table>
                      </section>
                  </div>
              </div>
              <!-- page end-->
          </section>
      </section>
      <!--main content end-->
      <div class="text-right">
            <div class="credits">
                
            </div>
        </div>
  </section>
      <!--main content end-->
      <div class="text-right">
            <div class="credits">
                
            </div>
        </div>
  </section>
  <!-- container section end -->
    <!-- javascripts -->
    <script src="js/jquery.js"></script>
    <script src="js/jquery-1.8.3.min.js"></script
    script type="text/javascript" src="js/jquery-ui-1.9.2.custom.min.js"></script>    <script src="js/bootstrap.min.js"></script>
    <!-- nicescroll -->
    <script src="js/jquery.scrollTo.min.js"></script>
    <!-- <script src="js/jquery.nicescroll.js" type="text/javascript"></script> -->
    <!--custome script for all page-->
    <!-- <script src="js/scripts.js"></script> -->


  </body>
</html>
