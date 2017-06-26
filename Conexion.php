<?php  
	$mysqli=mysqli_connect('localhost','root','','saint');

	$query = "SELECT * FROM tab_usuario WHERE usu_username='$username' AND usu_password='$password'";
?>