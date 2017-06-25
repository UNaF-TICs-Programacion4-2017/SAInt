<?php 
session_start(); 
// Borramos toda la sesion 
session_destroy(); 
//con el siguiente script de jave rediriges a index por ejemplo 
?> 
<SCRIPT LANGUAGE="javascript"> 
location.href = "index.php"; 
</SCRIPT>
