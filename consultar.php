<?php 
    include_once "conn_db/conexion.php";
    include_once "conn_db/data_base.php";

   $Obj_BD = new data_base(Object_Connection());

   function Consultar_Alumnos($id_curso){
    $Tablas = "tab_alumno, tab_persona, tab_contacto, tab_asistencia, tab_tutor, tab_curso";
    $Campos = "tab_alumno.id_alumno, tab_persona.pers_nombre, tab_persona.pers_apellido, tab_contacto.cont_nro_telefono, tab_asistencia.asis_estado";
    $filtros = array('select' => "$Campos",
                     'where' => array('tab_alumno.rela_persona' => 'id_persona',
                                       'tab_alumno.rela_curso' => "$id_curso",
                                       'tab_alumno.rela_tutor' => 'id_tutor',
                                       'tab_asistencia.rela_alumno' => 'id_alumno',
                                       'tab_tutor.rela_persona' => 'id_persona',
                                       'tab_contacto.rela_persona' => 'id_persona'),
                     'return_type' => 'single');

    $Obj_BD->Abrir_Transaccion();
    return $Obj_BD->Consultar_Automatico($Tablas, $filtros);
   }


   function Consultar_Cursos($id_preseptor){
    $filtros = array('where' => array('rela_preceptor' => "$id_preseptor"),
                     'return_type' => 'single');
    $Obj_BD->Abrir_Transaccion();
    return $Obj_BD->Consultar_Automatico("tab_curos", $filtros);    
   }
 ?>