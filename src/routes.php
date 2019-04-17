<?php
$app->get('/contact', "ContactController:all");

$app->get('/tipodealerta', "UsuariosController:all");
$app->get('/contact/{id}', "ContactController:find");
$app->get('/tipodealerta/buscarRegistro/{id}', "UsuariosController:find");
$app->get('/tipodealerta/agregarRegistro/{Id}/{Descripcion}', "UsuariosController:agregar");
$app->get('/tipodealerta/eliminarRegistro/{id}', "UsuariosController:eliminar");
$app->get('/tipodealerta/actualizarRegistro/{id}/{Id}/{Descripcion}', "UsuariosController:actualizar");


$app->get('/cirugia_usuario', "CirugiaUsuarioController:all");
$app->get('/cirugia_usuario/buscar/{id}', "CirugiaUsuarioController:find");
$app->get('/cirugia_usuario/eliminar/{id}', "CirugiaUsuarioController:delete");
$app->get('/cirugia_usuario/agregar/{IdUsuario}/{Descripcion}', "CirugiaUsuarioController:add");
$app->get('/cirugia_usuario/editar/{id}/{IdUsuario}/{Descripcion}', "CirugiaUsuarioController:edit");
$app->get('/cirugia_usuario/restricciones', "CirugiaUsuarioController:restrict");

$app->get('/contact/{id}', "ContactController:find");
$app->get('/contact/{id}/{Mod}', "ContactController:delete");
$app->get('/contact/{Nombre}/{IdParentesco}/{Celular}/
	{IdTipoContacto}/{Prioridad}', "ContactController:add");
$app->get('/contact/{id}/{Nombre}/{IdParentesco}/{Celular}/
	{IdTipoContacto}/{Prioridad}', "ContactController:update");

$app->get('/eps', "EPSController:all");
$app->get('/eps/{id}', "EPSController:find");
$app->get('/eps/{id}/{Mod}', "EPSController:delete");
$app->get('/eps/{Nombre}', "EPSController:add");
$app->get('/eps/{id}/{Nombre}', "EPSController:update");

//$app->get('/usuarios', "UsuariosController:all");


