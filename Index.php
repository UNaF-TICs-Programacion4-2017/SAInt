<!DOCTYPE html>
<html lang="en">
<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Creative - Bootstrap 3 Responsive Admin Template">
    <meta name="author" content="GeeksLabs">
    <meta name="keyword" content="Creative, Dashboard, Admin, Template, Theme, Bootstrap, Responsive, Retina, Minimal">
    <link rel="shortcut icon" href="img/favicon.png">

    <title>Login Page SAInt</title>

    <!-- Bootstrap CSS -->    
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <!-- bootstrap theme -->
    <link href="css/bootstrap-theme.css" rel="stylesheet">
    <!--external css-->
    <!-- font icon -->
    <link href="css/elegant-icons-style.css" rel="stylesheet" />
    <link href="css/font-awesome.css" rel="stylesheet" />
    <!-- Custom styles -->
    <link href="css/style.css" rel="stylesheet">
    <link href="css/style-responsive.css" rel="stylesheet" />
    <script type="text/javascript" src="js/jquery.js"></script>
    <script src="https://code.jquery.com/jquery-1.9.1.min.js"></script>
    <script type="text/javascript">
        $(document).ready(function(){
        $("#user_name").focus();
         $("#login_form").fadeIn("normal");

       $("#login2").click(function(){
            username=$("#user_name").val();
            password=$("#password").val();
           
             $.ajax({
                type: "POST",
                url: "login.php",
                data: "name="+username+"&pwd="+password,
                success: function(html){
                  if(html=='true')
                  {
                    $("#login_form").fadeOut("normal");
                     var pagina="index_admin.php"
                    function redireccionar() {location.href=pagina} 
                    redireccionar();
                    $("#profile").html("<a href='logout.php' id='logout'>Logout</a>");
                  }
                  else
                  {
                        $("#add_err").html("Usuario o contraseña Incorrecta");
                  }
                },
                beforeSend:function()
                {
                     $("#add_err").html("Bienvenido...")
                    
                }
            });
             return false;
        });
    });
</script>
  </head>

  <body class="login-img3-body">
<?php session_start(); ?>
  <div id="profile">
      <?php if(isset($_SESSION['usu_username'])){
      ?>
      <a href='logout.php' id='logout'>Logout</a>
    <?php }else {?>
    
        <?php } ?>
    <div id="login_form" class="container">

      <form class="login-form" action="login.php">        
        <div  class="login-wrap">
        <div class="err" id="add_err"></div>
            <p class="login-img"><i class="icon_lock_alt"></i></p>
            <div class="input-group">
              <span class="input-group-addon"><i class="icon_profile"></i></span>
              <input type="text" class="form-control" id="user_name" name="user_name" placeholder="Username" autofocus>
            </div>
            <div class="input-group">
                <span class="input-group-addon"><i class="icon_key_alt"></i></span>
                <input type="password" class="form-control" id="password" name="password" placeholder="Password">
            </div>
            <label class="checkbox">
                <input type="checkbox" value="remember-me">Recordarme
                <span class="pull-right"> <a href="#">Olvidaste tu contraseña</a></span>
            </label>
            <button class="btn btn-primary btn-lg btn-block"  type="submit" id="login2">Iniciar Sesión</button>
            <button class="btn btn-info btn-lg btn-block" type="submit">Cerrar Sesión</button>
        </div>
      </form>
    <div class="text-right">
            <div class="credits">
                <!-- 
                    All the links in the footer should remain intact. 
                    You can delete the links only if you purchased the pro version.
                    Licensing information: https://bootstrapmade.com/license/
                    Purchase the pro version form: https://bootstrapmade.com/buy/?theme=NiceAdmin
                -->
                <a href="https://bootstrapmade.com/free-business-bootstrap-themes-website-templates/">Business Bootstrap Themes</a> by <a href="https://bootstrapmade.com/">BootstrapMade</a>
            </div>
        </div>
    </div>


  </body>

</html>
