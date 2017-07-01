<?php //Simepre primero estos dos en todas las paginas exepto index
      include_once "session.php";
      Comprobar_Login_User($Obj_BD);
      //Fin comprobacion
      include_once "db_coloquio.php";

      $id = isset($_GET['id'])? intval($_GET['id']) : Null;
      if ($id != NULL){
        //Eliminar($Obj_BD, $id);
        //header("location: basic_table.php");
      }
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
    <!-- CSS para el degradado -->
  <!-- <link href="css/styledegrade.css" rel="stylesheet">  -->
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
            <a href="index_admin.php" class="logo">SAInt <span class="lite">Admin</span></a>
            <!--logo end-->

            <!--  search form start -->
            <div class="nav search-row" id="top_menu">
                <ul class="nav top-menu">                    
                    <li>
                        <form class="navbar-form">
                            <!-- <input class="form-control" placeholder="Buscar" type="text"> -->
                        </form>
                    </li>                    
                </ul>
            </div>
            <!-- notificatoin dropdown start-->
            <div class="top-nav notification-row">                
                <!-- user login dropdown start -->
                <ul class="nav pull-right top-menu">
                  <li class="dropdown">
                        <a data-toggle="dropdown" class="dropdown-toggle" href="#">
                            <span class="profile-ava">
                                <img alt="" src="img/avatar1_small.jpg">
                            </span>
                            <span class="username"><?php echo $_SESSION['user_name']; ?></span>
                            <b class="caret"></b>
                        </a>
                        <ul class="dropdown-menu extended logout">
                            <div class="log-arrow-up"></div>
                            <li class="eborder-top">
                                <a href="#"><i class="icon_profile.jpg"></i>Perfil</a>
                            </li>
                            <li>
                                <a href="logout.php"><i class="icon_key_alt"></i>Salir</a>
                            </li>
                        </ul>
                    </li>
                </ul>
            </div>
    </header>      
    <!--header end-->

      <!--sidebar start-->
      <aside>
          <!-- sidebar menu start-->
          <div id="sidebar"  class="nav-collapse ">
              <ul class="sidebar-menu">                
                  <li class="sub-menu">
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
                            <div class="btn-group col-lg-2" style="padding-right: 1px;width: 116px;">
                                     <a class="btn btn-default">Curso</a>
                                     <a class="btn btn-default dropdown-toggle" data-toggle="dropdown" href=""><span class="caret"></span></a>
                                     <ul class="dropdown-menu">
                                      <li><a href="" >1°</a></li>
                                      <li><a href="" >2°</a></li>
                                      <li><a href="" >3°</a></li>
                                      <li><a href="">4°</a></li>
                                      <li><a href="">5°</a></li>
                                      <li><a href="">6°</a></li>
                                    </ul>
                            </div>
                          <div class="btn-group col-lg-4"> 
                            <a class="btn btn-primary" href="forms-abm/asistencia-coloquio.php" 
                              title="Agregar un nuevo alumno">Agregar</a>
                         </div>
                          </header>
                          <table class="table table-striped table-advance table-hover">
                           <tbody>
                              <tr>
                                 <th><i class="icon_profile"></i> Apellido</th>
                                 <th><i class="icon_profile"></i> Nombre</th>
                                 <th><i class="icon_mobile"></i> Telefono</th>
                                 <th><i class="icon_mobile"></i> Identificador NFC</th>
                                 <th><i class="icon_cogs"></i> Accion</th>
                              </tr>
                              <?php 
                                  $extradio_DB = Rellenar_Tabla($Obj_BD);
                                  foreach ($extradio_DB as $row) {
                                    echo "<tr>";
                                    echo "<td>".$row['pers_apellido']."</td>";
                                    echo "<td>".$row['pers_nombre']."</td>";
                                    echo "<td>".$row['cont_nro_telefono']."</td>";
                                    echo "<td>".$row['alum_nfc']."</td>";
                                    ?>
                                    <td>
                                  <div class="btn-group">
                                      <a class="btn btn-primary" href= <?php echo 'forms-abm\registar-alumno.php?id='.$row['id_persona']; ?> 
                                         title = "Modificar"><i class="icon_plus_alt2"></i></a>
                                      
                                      <a class="btn btn-danger" href= <?php echo 'basic_table.php?id='.$row['id_persona']; ?>
                                         title = "Eliminar"><i class="icon_close_alt2"></i></a>
                                  </div>
                                  </td>
                                  <?php echo "</tr>";
                                  } ?>
                               ?>             
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
