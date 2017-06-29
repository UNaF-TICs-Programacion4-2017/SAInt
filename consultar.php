<?php 
   function Consultar_Alumnos($id_curso){
    $Tablas = "tab_alumno, tab_persona, tab_contacto, tab_tutor, tab_curso";
    $Campos = "tab_alumno.id_alumno, tab_persona.pers_nombre, tab_persona.pers_apellido, tab_contacto.cont_nro_telefono";
    $filtros = array('select' => "$Campos",
                     'where' => array('tab_alumno.rela_persona' => 'id_persona',
                                       'tab_alumno.rela_curso' => "$id_curso",
                                       'tab_alumno.rela_tutor' => 'id_tutor',
                                       'tab_tutor.rela_persona' => 'id_persona',
                                       'tab_contacto.rela_persona' => 'id_persona')
                    );
    
    return $Obj_BD->Consultar_Automatico($Tablas, $filtros);
   }


   function Consultar_Cursos($id_preseptor){
    $filtros = array('where' => array('rela_preceptor' => "$id_preseptor"));
    $Obj_BD->Abrir_Transaccion();
    return $Obj_BD->Consultar_Automatico("tab_curos", $filtros);    
   }
 ?>