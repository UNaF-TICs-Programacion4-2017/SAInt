<?php
	session_start();

	include_once "conn_db/conexion.php";
	include_once "conn_db/data_base.php";
	$Obj_BD = new data_base(Object_Connection());

	function Comprobar_Login_User($Obj_BD) {
		if ( !empty($_SESSION['user_name']) ) {
			$filtro = array('where' => array('usu_username' => $_SESSION['user_name'], 'usu_estado' => 1));

			$Obj_BD = new data_base(Object_Connection());
			$Obj_BD->Abrir_Transaccion();
			$Usuario = $Obj_BD->Consultar_Automatico("tab_usuario", $filtro);

			if ( $Usuario->rowCount() != 1 ){
				unset($_SESSION['user_name']);
				header("location: index.php"); 
			}
		}
		else {
			header("location: index.php");	
		}
	}
?>