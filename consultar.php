<?php 
    include_once "conn_db/conexion.php";
    include_once "conn_db/data_base.php";

   $Obj_BD = new data_base(Object_Connection());

   function Consultar_Alumnos($Curso){
   	$Sentencia = 

   	"SELECT tab_persona.pers_nombre, tab_persona.pers_apellido, tab_contacto.cont_nro_telefono, tab_asistencia.asis_estado
   	 
   	 FROM tab_alumno, tab_persona, tab_contacto, tab_asistencia, tab_tutor, tab_curso

   	 WHERE tab_alumno.rela_persona = id_persona and tab_alumno.rela_curso = id_curso and 

   	 	   tab_contacto.rela_persona = id_persona and tab_asistencia.rela_alumno = id_alumno and

   	 	   tab_alumno.rela_tutor = id_tutor and tab_tutor.rela_persona = id_persona and 

   	 ";

   }
 ?>