<?php 
	include_once "session.php";
	$update = array('usu_estado' => 0);
	$filtro = array('where' => array('usu_username' => $_SESSION['user_name']));

	$Obj_BD->Abrir_Transaccion();
	$OK = $Obj_BD->Actualizar('tab_usuario', $update, $filtro);
	$Obj_BD->Confirmar();

	unset($_SESSION['user_name']);
	header('Location: index.php');
	session_destroy();
	exit;
?>
