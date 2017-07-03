<?php //Simepre primero estos dos en todas las paginas exepto index
      include_once "../session.php";
      Comprobar_Login_User($Obj_BD);
      include_once "../db_coloquio.php";
      //Fin comprobacion
// >>>>>>> 077ccf4f71e70b29508c263553c8c8ad616bbaa0:forms-abm/asistencia-coloquio.php
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- <link rel="shortcut icon" href="img/favicon.png"> -->

    <title>SAInt - Admin</title>

    <!-- Bootstrap CSS -->    
    <link href="../css/bootstrap.min.css" rel="stylesheet">
    <!-- bootstrap theme -->
    <link href="../css/bootstrap-theme.css" rel="stylesheet">
    <!--external css-->
    <!-- font icon -->
    <link href="../css/elegant-icons-style.css" rel="stylesheet" />
    <link href="../css/font-awesome.min.css" rel="stylesheet" />    
    <!-- easy pie chart-->
    <!-- <link href="assets/jquery-easy-pie-chart/jquery.easy-pie-chart.css" rel="stylesheet" type="text/css" media="screen"/> -->
    <!-- owl carousel -->
    <!-- <link rel="stylesheet" href="css/owl.carousel.css" type="text/css">
  <link href="css/jquery-jvectormap-1.2.2.css" rel="stylesheet"> -->
    <!-- Custom styles -->
  <link rel="stylesheet" href="../css/fullcalendar.css">
    <link href="../css/style.css" rel="stylesheet">
    <link href="../css/style-responsive.css" rel="stylesheet" />
  <link href="../css/xcharts.min.css" rel=" stylesheet"> 
  <link href="../css/jquery-ui-1.10.4.min.css" rel="stylesheet">
    
  </head>
<body>
    <header class="header dark-bg">
            <div class="toggle-nav">
                <div class="icon-reorder tooltips" data-original-title="Toggle Navigation" data-placement="bottom"><i class="icon_menu"></i></div>
            </div>

            <!--logo start-->
            <a href="../index_admin.php" class="logo">SAInt <span class="lite">Admin</span></a>
            <!--logo end-->
            <!-- notificatoin dropdown start-->
            <div class="top-nav notification-row">                
                <!-- user login dropdown start -->
                <ul class="nav pull-right top-menu">
                  <li class="dropdown">
                        <a data-toggle="dropdown" class="dropdown-toggle" href="#">
                            <span class="profile-ava">
                                <img alt="" src="../img/avatar1_small.jpg">
                            </span>
                            <span class="username"><?php echo $_SESSION['user_name']; ?></span>
                            <b class="caret"></b>
                        </a>
                        <ul class="dropdown-menu extended logout">
                            <div class="log-arrow-up"></div>
                            <li class="eborder-top">
                                <a href="#"><i class="../icon_profile.jpg"></i>Perfil</a>
                            </li>
                            <li>
                                <a href="../index.php"><i class="icon_key_alt"></i>Salir</a>
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
          </div>
          <!-- sidebar menu end-->
      </aside>
      <!--sidebar end-->
      <!--Comienzo del contenido-->
      <section id="main-content">
          <section class="wrapper">
             <div class="row" >
                <div class="col-lg-12">
                    <h3 class="page-header"><i class="fa fa-file-text-o"></i>REGISTRO DE NUEVO PARTICIPANTE</h3>
                </div>
            </div>
              <div class="row">
                
                  <div class="col-lg-12">
                      <section class="panel">
                          <header class="panel-heading">
                             DATOS DE PARTICIPANTE
                          </header>
                          <div class="panel-form">
                              <form class="form-horizontal" name = "Formulario" method="post" action = "../db_coloquio.php">
                              
                                  <div class="form-group">
                                      <label class="col-sm-2 control-label" color = "#E8E8E8">Nombre</label>
                                      <div class="col-sm-10">
                                          <input type="text" class="form-control round-input" name = "nombre" required>
                                      </div>
                                  </div>
                                  <div class="form-group">
                                      <label class="col-sm-2 control-label" color = "#E8E8E8">Apellido</label>
                                      <div class="col-sm-10">
                                          <input type="text" class="form-control round-input" name = "apellido" required>
                                      </div>
                                  </div>
                                  <div class="form-group">
                                      <label class="col-sm-2 control-label" color = "#E8E8E8">Teléfono</label>
                                      <div class="col-sm-10">
                                          <input type="text" class="form-control round-input" name = "telefono" required>
                                      </div>
                                  </div>
                                  
                                  <div class="form-group">
                                      <label class="col-sm-4 control-label">NFC</label>
                                      <div class="btn-group">
                                          <select name = "value_nfc" class="btn btn-default dropdown-toggle" required>
                                          <?php
                                              $extraido_DB = Cargar_Combo_NFC($Obj_BD);
                                              $count = $extraido_DB->rowCount();
                                              if ($count != 0){
                                                foreach ($extraido_DB as $row){
                                                  echo "<option value='".$row['nfc_indent']."'>".$row['nfc_fecha_hora']."</option>";
                                                }
                                              } else { $mensaje = "No hay Identificadores NFC disponibles"; }
                                           ?>
                                          </select> <label class="control-label" style="padding-left: 10px;"><?php if ($count == 0){ echo $mensaje; } ?></label>
                                      </div> 
                                  </div>
                          </div>
                      </section>
                        <div class="btn-group col-lg-4" style="padding-left: 450px; width: 230px; padding-right: 30px; "> 
                         <input type = "submit" class="btn btn-primary" title="Agregar un nuevo participante" value="Registrar" style="padding-right: 40px; padding-left: 40px;">
                        </div>
                            </form>
                  </div>
              </div>
          </section>
      </section>
    <!-- javascripts -->
    <script src="../js/jquery.js"></script>
    <script src="../js/jquery-1.8.3.min.js"></script>
    <script type="text/javascript" src="../js/jquery-ui-1.9.2.custom.min.js"></script>
  <!-- <script src="js/jquery-ui-1.10.4.min.js"></script> -->
    <!-- bootstrap -->
    <script src="../js/bootstrap.min.js"></script>
    <!-- nice scroll -->
    <script src="../js/jquery.scrollTo.min.js"></script>
    <script src="../js/jquery.nicescroll.js" type="text/javascript"></script>
    <!-- custom select -->
    <script src="../js/jquery.customSelect.min.js" ></script>
  <script src="../assets/chart-master/Chart.js"></script>
   
    <!--custome script for all page-->
    <script src="../js/scripts.js"></script>
  <script>

      //knob
      $(function() {
        $(".knob").knob({
          'draw' : function () { 
            $(this.i).val(this.cv + '%')
          }
        })
      });

      //carousel
      $(document).ready(function() {
          $("#owl-slider").owlCarousel({
              navigation : true,
              slideSpeed : 300,
              paginationSpeed : 400,
              singleItem : true

          });
      });

      //custom select box

      $(function(){
          $('select.styled').customSelect();
      });
    
    /* ---------- Map ---------- */
  $(function(){
    $('#map').vectorMap({
      map: 'world_mill_en',
      series: {
        regions: [{
          values: gdpData,
          scale: ['#000', '#000'],
          normalizeFunction: 'polynomial'
        }]
      },
    backgroundColor: '#eef3f7',
      onLabelShow: function(e, el, code){
        el.html(el.html()+' (GDP - '+gdpData[code]+')');
      }
    });
  });

  </script>

</body>
</html>