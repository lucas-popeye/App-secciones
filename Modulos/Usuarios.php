<?php

$user_id = $_GET["id"]

function UsuarioCreate ($user_id) {
	print("Se ha creado el usuario con Id: $user_id ");
}

function UsuarioRead ($user_id)
{print("Se ha leido el usuario con Id: $user_id ");
}

function UsuarioUpdate ($user_id)
{print("Se ha actualizado el usuario con Id: $user_id ");
}

function UsuarioDelete ($user_id)
{print("Se ha eliminado el usuario con Id: $user_id ");
}

?> 