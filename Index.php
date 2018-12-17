<?php

$seccion = $_GET["seccion"];
$operacion = $_GET["operacion"];
$user_id = $_GET["id"];

require "Modulos/Usuarios.php";
require "Modulos/Noticias.php";
require "Include/funciones.php";

if (isset($_GET['seccion']) && isset($_GET['operacion'])) 

switch ($operacion) {
	case 'crear':
        echo "Se ha creado $user_id";
        break;
	case 'leer':
		echo "Se ha leido  $user_id";
		break;
	case 'actualizar':
		echo "Se ha actualizado $user_id";
		break;
	case 'eliminar':
		echo "Se ha eliminado $user_id";
		break;
	default:
		echo "Listado de Usuarios";
}


else  {
print "Pagina de inicio";
}

?> 