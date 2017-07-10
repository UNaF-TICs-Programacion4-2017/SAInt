<?php 
	include_once "session.php";

	function Rellenar_Tabla($Obj_BD){
		$Obj_BD->Abrir_Transaccion();

		$Tablas = "tab_alumno, tab_persona, tab_contacto";
		$Campos = "tab_persona.id_persona, tab_persona.pers_nombre, tab_persona.pers_apellido, 
				   tab_contacto.cont_nro_telefono, tab_alumno.alum_nfc";
		$Sentencia = "SELECT ".$Campos." FROM ".$Tablas." WHERE tab_alumno.rela_persona = id_persona AND tab_contacto.rela_persona = id_persona";
    	return $Obj_BD->Consultar_Manual($Sentencia);
	}

	function Insertar($datos = array(), $Obj_BD){
		$Obj_BD->Abrir_Transaccion(); //INSERTO LA PERSONA
		$insertar = array('id_persona' => NULL,
						 'pers_nombre'=> $datos['nombre'],
						 'pers_apellido' => $datos['apellido'],
						 'pers_dni' => "12345",
						 'pers_sexo' => "0",
						 'pers_nacionalidad' => "argentina",
						 'rela_direccion' => "1");
		$lastID_persona = $Obj_BD->insertar('tab_persona',$insertar);
		$Obj_BD->Confirmar();

		$Obj_BD->Abrir_Transaccion(); //INSERTO SU TELEFONO
		$insertar = array('id_contacto' => NULL,
						 'cont_descripcion' => 0, //0 de celular
						 'cont_nro_telefono' => intval($datos['telefono']),
						 'rela_persona' => $lastID_persona);
		$OK = $Obj_BD->insertar('tab_contacto',$insertar);
		$Obj_BD->Confirmar();

		$Obj_BD->Abrir_Transaccion(); // INSERTO SU NFC
		$insertar = array('id_alumno' => NULL,
						 'alum_nfc' => $datos['nfc'],
						 'rela_persona' => $lastID_persona,
						 'rela_tutor' => 1,
						 'rela_curso' => 1);
		$OK = $Obj_BD->insertar('tab_alumno',$insertar);
		$Obj_BD->Confirmar();

		$Obj_BD->Abrir_Transaccion(); // ELIMINO EL NFC OCUPADO
		$eliminar = array('where' => array('nfc_indent' => $datos['nfc']));
		$OK = $Obj_BD->Borrar('tab_nfc_temp',$eliminar);
		$Obj_BD->Confirmar();
	}

	function Eliminar($Obj_BD, $id){
		$Obj_BD->Abrir_Transaccion(); // ELIMINO SU NFC
		$borrar = array('where' => array('rela_persona' => $id));
		$OK = $Obj_BD->borrar('tab_alumno',$borrar);
		$Obj_BD->Confirmar();

		$Obj_BD->Abrir_Transaccion(); //ELIMINO LA PERSONA
		$borrar = array('where' => array('id_persona' => $id));
		$OK = $Obj_BD->Borrar('tab_persona',$borrar);
		$Obj_BD->Confirmar();

		$Obj_BD->Abrir_Transaccion(); //ELIMINO SU TELEFONO
		$borrar = array('where' => array('rela_persona' => $id));
		$OK = $Obj_BD->borrar('tab_contacto',$borrar);
		$Obj_BD->Confirmar();

	}

	function Cargar_Combo_NFC($Obj_BD){ //LISTA DE NFC
		$Obj_BD->Abrir_Transaccion();
		$Sentencia = "SELECT * FROM tab_nfc_temp ORDER BY nfc_fecha_hora desc";
		return $Obj_BD->Consultar_Manual($Sentencia);
	}

	function Recuperar_Alumno($Obj_BD, $id){
		$Obj_BD->Abrir_Transaccion();
		$Sentencia = "SELECT pers_nombre, pers_apellido FROM tab_persona where id_persona = '".$id."'";
		return $Obj_BD->Consultar_Manual($Sentencia);
	}

	function Recuperar_Presentes($Obj_BD){
		$Obj_BD->Abrir_Transaccion();
		$tablas = "tab_asistencia, tab_alumno, tab_persona";
		$campos = "tab_asistencia.asis_fechahora, tab_persona.pers_nombre, 									   tab_persona.pers_apellido, tab_persona.id_persona, 
				   tab_alumno.id_alumno,tab_asistencia.id_asistencia,tab_alumno.alum_nfc";
		$Sentencia = "SELECT ".$campos." FROM ".$tablas." where tab_alumno.rela_persona = tab_persona.id_persona and tab_asistencia.rela_alumno = tab_alumno.id_alumno";
		
		return $Obj_BD->Consultar_Manual($Sentencia);
		//DEVUELVE UN ARRAY A RECORRER CON UN FOREACH DONDE LOS CAMPOS SON LOS NOMBRES DE LAS COLUMNAS
	}

	function Eliminar_Presente($Obj_BD, $id_asistencia){
		$Obj_BD->Abrir_Transaccion();
		$datos = array('where' => array("tab_asistencia.id_asistencia" => $id_asistencia));
		$OK = $Obj_BD->Borrar("tab_asistencia", $datos);
		$Obj_BD->Confirmar();
	}

	

	// NO TE OLVIDES DE :
	//include_once "session.php";
	//$lista = Recuperar_Presentes($Obj_BD);

	if (isset($_POST['apellido'])){
		$datos = array('nombre'   => $_POST['nombre'],
					   'apellido' => $_POST['apellido'],
					   'telefono' => $_POST['telefono'],
					   'nfc' 	  => $_POST['value_nfc']);

		Insertar($datos, $Obj_BD);
		header("location: basic_table.php");	
	}
 ?>