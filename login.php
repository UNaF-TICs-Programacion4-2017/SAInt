<?php
	include_once "session.php";

	if (!isset($_POST['name'])) {
		 	header("location: index_admin.php");
	};

	$username = $_POST['name'];
	$password = $_POST['pwd'];
	$filtro = '';

	$filtro = array('where' => array('usu_username' => $_POST['name'],
									 'usu_password' => $_POST['pwd']
									 )
					);

	$Obj_BD->Abrir_Transaccion();
	$Usuario = $Obj_BD->Consultar_Automatico("tab_usuario", $filtro);

			if( $Usuario->rowCount() >=1 ) {

				foreach ($Usuario as $user){

					if ($user['usu_estado'] == 0){

						echo 'off';
						$_SESSION['user_name'] = $_POST['name'];
						
						$update = array('usu_estado' => 1);
						$OK = $Obj_BD->Actualizar('tab_usuario', $update, $filtro);
						$Obj_BD->Confirmar();
					}
					else { echo 'on'; }
				}
			}
			else{ echo 'not'; }
?>