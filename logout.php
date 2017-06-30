<?php 
	include_once "session.php";

	if (!isset($_SESSION['user_name'])) { header("location: index.php"); };

	$update = array('usu_estado' => NULL);
	$filtro = array('where' => array('usu_username' => $_SESSION['user_name']));

	$Obj_BD->Abrir_Transaccion();
	$OK = $Obj_BD->Actualizar('tab_usuario', $update, $filtro);
	$Obj_BD->Confirmar();

	unset($_SESSION['user_name']);
	unset($_SESSION['current_id_user']);
	header('Location: index.php');
	session_destroy();
	exit;
?>
