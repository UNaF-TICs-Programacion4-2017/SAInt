<?php session_start(); 
	include_once "conn_db/conexion.php";
	include_once "conn_db/data_base.php";

	$Obj_BD = new data_base(Object_Connection());
	//$nick_usuario = isset($_SESSION['select'])? strval($_SESSION['select']) : NULL;

?>