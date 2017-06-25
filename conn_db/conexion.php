<?php 
	include_once 'local.snga';

	function Object_Connection()
		{
		try 
			{
				$Conexion = New PDO("mysql:host=".DB_HOST.";dbname=".DB_NAME, DB_USER, 
					DB_PASS, array(PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8"));
					//Set the PDO error mode to connection
				$Conexion->SetAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
				return $Conexion;
			} 
		catch (PDOException $e) 
			{	
				echo "Fallo la conexion con la base de datos" . $e->getMessage();
				return "error";
			};
		};
 ?>
