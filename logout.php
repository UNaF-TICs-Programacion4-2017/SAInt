<?php 
	session_start();
		unset($_SESSION['usu_username']);
		header('Location: index.php');
		session_destroy();
		exit;
?>
