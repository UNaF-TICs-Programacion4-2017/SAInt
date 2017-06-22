<?php
session_start();
$username = $_POST['name'];
$password = $_POST['pwd'];
$mysqli=mysqli_connect('localhost','root','','saint');

$query = "SELECT * FROM tab_usuario WHERE usu_username='$username' AND usu_password='$password'";
$result = mysqli_query($mysqli,$query)or die(mysqli_error());
$num_row = mysqli_num_rows($result);
		$row=mysqli_fetch_array($result);
		if( $num_row >=1 ) {
			echo 'true';
			$_SESSION['user_name']=$row['usu_username'];
		}
		else{
			echo 'false';
		}
?>