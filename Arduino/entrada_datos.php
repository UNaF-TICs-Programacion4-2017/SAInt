<?php
if (!isset($_POST['mac'])) {
		header("location: index_admin.php");
	};

include_once "../session.php";

$Obj_BD->Abrir_Transaccion(); //INSERTO EL NFC LIBRE
$filtro = array('select' => 'alum_nfc',
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
	} else {
		echo  "el nfc ya esta en la tabla temp";
	}

} else {
	#code para dar el asistencia al alumno
}

?>