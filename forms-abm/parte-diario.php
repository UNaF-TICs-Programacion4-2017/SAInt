<!DOCTYPE html>
<html lang="en">
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
    <!-- full calendar css-->
    <link href="../assets/fullcalendar/fullcalendar/bootstrap-fullcalendar.css" rel="stylesheet" />
	<link href="../assets/fullcalendar/fullcalendar/fullcalendar.css" rel="stylesheet" />
    <!-- easy pie chart-->
    <link href="../assets/jquery-easy-pie-chart/jquery.easy-pie-chart.css" rel="stylesheet" type="text/css" media="screen"/>
    <!-- owl carousel -->
    <link rel="stylesheet" href="../css/owl.carousel.css" type="text/css">
	<link href="../css/jquery-jvectormap-1.2.2.css" rel="stylesheet">
    <!-- Custom styles -->
	<link rel="stylesheet" href="../css/fullcalendar.css">
	<link href="../css/widgets.css" rel="stylesheet">
    <link href="../css/style.css" rel="stylesheet">
    <link href="../css/style-responsive.css" rel="stylesheet" />
	<link href="../css/xcharts.min.css" rel=" stylesheet">	
	<link href="../css/jquery-ui-1.10.4.min.css" rel="stylesheet">
    
  </head>

  <body>
  <section id="container" class="">
  	<!--Plantilla general-->
        <!--Plantilla general-->
    <!-- <?php //include 'plantilla/plantilla.html'; ?> -->
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
          </div>
          <!-- sidebar menu end-->
      </aside>
      <!--sidebar end-->
      
      <!--Inicio de Contenido particular-->
      <section id="main-content">
          <section class="wrapper">
          <div class="row">
                  <div class="col-lg-4">
                      <!-- Fecha-->
                      <section class="panel">
                        <div class="panel-body">
                            <div class="col-lg-4">
                              <input type="text" class="form-control">
                            </div>
                            <div class="col-lg-4">
                             <input type="text" class="form-control">
                            </div>
                            <div class="col-lg-4">
                             <input type="text" class="form-control">
                            </div>
                        </div>
                        <!-- Curso y División -->
                        <div class="panel-body">
                            <div class="col-lg-6">
                              <h4>Curso: 6to </h4>
                            </div>
                            <div class="col-lg-6">
                             <h4>División: I Nat. </h4>
                            </div>
                        </div>
                        <!-- Presentes -->
                        <div class="panel-body">
                            <div class="col-lg-6">
                              <h4>PRESENTES: 28 </h4>
                            </div>
                        </div>
                        <!-- AUSENTES -->
                        <div class="panel-body">
                            <div class="col-lg-6">
                              <h4>AUSENTES: 3 </h4>
                            </div>
                        </div>
                        <!-- RETIRADOS -->
                        <div class="panel-body">
                            <div class="col-lg-6">
                              <h4>RETIRADOS: 0 </h4>
                            </div>
                        </div>
                        <!-- TOTAL -->
                        <div class="panel-body">
                            <div class="col-lg-6">
                              <h4>TOTAL: 31 </h4>
                            </div>
                        </div>
                      </section>
                  </div>
                  <!-- LISTA DE AUSENTES -->
                  
                  <div class="col-lg-8">
                      <section class="panel">
                        <div class="panel-body">
                            <div class="col-lg-8">
                              <h3>LISTA DE ALUMNOS AUSENTES</h3>
                            </div>
                        </div>
                          <table class="table table-striped table-advance table-hover">
                           <tbody>
                              <tr>
                                 <th><i class="icon_profile"></i> Apellido y Nombre</th>
                                 <th></i> DNI</th>
                                 <th><i class="icon_mobile"></i> Telefono</th>
                                 <th><i class="icon_mobile"></i>Telefono Tutor</th>
                              </tr>
                              <tr>
                                 <td>Angeline Mcclain</td>
                                 <td>234234234</td>
                                 <td>3704897632</td>
                                 <td>3704897632</td>
                              </tr>
                              <tr>
                                 <td>Sung Carlson</td>
                                 <td>234234234</td>
                                 <td>3704897632</td>
                                 <td>3704897632</td>
                              </tr>
                              <tr>
                                 <td>Bryon Osborne</td>
                                 <td>234234234</td>
                                 <td>3704897632</td>
                                 <td>3704897632</td>
                              </tr>
                           </tbody>
                        </table>
                      </section>

                  </div>

          </div>
           <div class="row">
              <div class="col-lg-8">
                <div class="panel panel-primary">
                          <div class="panel-heading">
                            <label>Estado del aula</label>
                          </div>
                          <div class="panel-content">
                            <h5>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur blandit tempus porttitor. Maecenas faucibus mollis interdum. Aenean lacinia bibendum nulla sed consectetur.</h5>
                          </div>
                </div>
              </div>
           </div>
           <div class="row">
              <div class="col-lg-8">
                <div class="panel panel-primary">
                          <div class="panel-heading">
                            <label >Observaciones</label>
                          </div>
                          <div class="panel-content">
                            <h5>Maecenas faucibus mollis interdum. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed posuere consectetur est at lobortis. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum id ligula porta felis euismod semper.</h5>
                          </div>
                </div>
              </div>
           </div>         
              <!--overview start-->
       	 </section>
      <!--main content end-->
  </section>
  
  <!-- container section start -->

    <!-- javascripts -->
    <script src="../js/jquery.js"></script>
	<script src="../js/jquery-ui-1.10.4.min.js"></script>
    <script src="../js/jquery-1.8.3.min.js"></script>
    <script type="text/javascript" src="../js/jquery-ui-1.9.2.custom.min.js"></script>
    <!-- bootstrap -->
    <script src="../js/bootstrap.min.js"></script>
    <!-- nice scroll -->
    <script src="../js/jquery.scrollTo.min.js"></script>
    <script src="../js/jquery.nicescroll.js" type="text/javascript"></script>
    <!-- charts scripts -->
    <script src="../assets/jquery-knob/js/jquery.knob.js"></script>
    <script src="../js/jquery.sparkline.js" type="text/javascript"></script>
    <script src="../assets/jquery-easy-pie-chart/jquery.easy-pie-chart.js"></script>
    <script src="../js/owl.carousel.js" ></script>
    <!-- jQuery full calendar -->
    <script src="../js/fullcalendar.min.js"></script> <!-- Full Google Calendar - Calendar -->
	<script src="../assets/fullcalendar/fullcalendar/fullcalendar.js"></script>
    <!--script for this page only-->
    <script src="../js/calendar-custom.js"></script>
	<script src="../js/jquery.rateit.min.js"></script>
    <!-- custom select -->
    <script src="../js/jquery.customSelect.min.js" ></script>
	<script src="../assets/chart-master/Chart.js"></script>
   
    <!--custome script for all page-->
    <script src="../js/scripts.js"></script>
    <!-- custom script for this page-->
    <script src="../js/sparkline-chart.js"></script>
    <script src="../js/easy-pie-chart.js"></script>
	<script src="../js/jquery-jvectormap-1.2.2.min.js"></script>
	<script src="../js/jquery-jvectormap-world-mill-en.js"></script>
	<script src="../js/xcharts.min.js"></script>
	<script src="../js/jquery.autosize.min.js"></script>
	<script src="../js/jquery.placeholder.min.js"></script>
	<script src="../js/gdp-data.js"></script>	
	<script src="../js/morris.min.js"></script>
	<script src="../js/sparklines.js"></script>	
	<script src="../js/charts.js"></script>
	<script src="../js/jquery.slimscroll.min.js"></script>
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
