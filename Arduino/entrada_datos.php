<?php
if (!isset($_POST['mac'])) {
		header("location: index_admin.php");
	};

include_once "../session.php";

$Obj_BD->Abrir_Transaccion(); //INSERTO EL NFC LIBRE
$filtro = array('select' => 'alum_nfc, id_alumno',
				'where' => array('alum_nfc' => $_POST['mac']));
$estado = $Obj_BD->Consultar_Automatico('tab_alumno', $filtro);

if ($estado->rowCount() == 0){
	$filtro = array('select' => 'nfc_indent',
					'where' => array('nfc_indent' => $_POST['mac']));
	$estado = $Obj_BD->Consultar_Automatico('tab_nfc_temp', $filtro);

	if ($estado->rowCount() == 0){
		$Sentencia = "INSERT INTO tab_nfc_temp VALUES (NULL,'".$_POST['mac']."', CURRENT_TIMESTAMP)";
		$Obj_BD->Confirmar();
		$Obj_BD->Consultar_Manual($Sentencia);

	} else { echo  "El nfc ya se encuentra en la tabla de nfc disponibles"; }

} else {
	// SI ENTRO ACA ES PORQUE EL ALUMNO YA TIENE NFC, HAY QUE DARLE EL PRESENTE
	foreach ($estado as $array) {

		$filtro = array('where' => array('rela_alumno' => $array['id_alumno']));
		$estado = $Obj_BD->Consultar_Automatico('tab_asistencia', $filtro);

		if ($estado->rowCount() == 0){
			$Sentencia = "INSERT INTO tab_asistencia VALUES
				 (NULL, CURRENT_TIMESTAMP, 'PRESENTE', 1, 1,'".$array['id_alumno']."', 1)";
			$Obj_BD->Confirmar();
			$Obj_BD->Consultar_Manual($Sentencia);
			echo  "Registro Cargado";
		}

		break;
	}
}

?>