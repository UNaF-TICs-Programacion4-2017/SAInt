<?php
  include_once "session.php";
  if(!empty($_SESSION['user_name'])) { header("location: index_admin.php"); }
 ?>
<!DOCTYPE html>
<html lang="en">
<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- <link rel="shortcut icon" href="img/favicon.png"> -->

    <title>SAInt Login</title>

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
        $("#nick_user").focus();
         $("#login_form").fadeIn("normal");

       $("#login2").click(function(){
            username=$("#nick_user").val();
            password=$("#password").val();
           
             $.ajax({
                type: "POST",
                url: "login.php",
                data: "name="+username+"&pwd="+password,
                success: function(html){

                  if(html=='off'){
                    $("#login_form").fadeOut("normal");

                    function redireccionar() {location.href="index_admin.php"} 
                    redireccionar();
                    $("#profile").html("<a href='logout.php' id='logout'>Logout</a>");
                  }
                  else{
                      if(html=='on'){
                        $("#add_err").html("El Usuario ya se encuentra Online");
                      } else {
                        $("#add_err").html("Usuario o contraseña Incorrecta");
                      }
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
  <div id="profile">

    <div id="login_form" class="container">

      <form class="login-form" action="login.php">        
        <div  class="login-wrap">
 
          <div class="err" align="center" id="add_err"></div>
          
            <p class="login-img"><i class="icon_lock_alt"></i></p>
            <div class="input-group">
              <span class="input-group-addon"><i class="icon_profile"></i></span>
              <input type="text" class="form-control" id="nick_user" name="nick_user" placeholder="Usuario" autofocus>
            </div>
            <div class="input-group">
                <span class="input-group-addon"><i class="icon_key_alt"></i></span>
                <input type="password" class="form-control" id="password" name="password" placeholder="Contraseña">
            </div>
            <label class="checkbox">
                <input type="checkbox" value="remember-me"> Recordarme
                <span class="pull-right"> <a href="#"> ¿Olvido su contraseña?</a></span>
            </label>
            <button class="btn btn-primary btn-lg btn-block"  type="submit" id="login2">Ingresar</button>
          </div>
      </form>
  </body>

</html>
