<?php


$app->get('/tipodealerta', "AlertasController:all");
$app->get('/tipodealerta/{id}', "AlertasController:find");
$app->get('/crear_tipodealerta/{Descripcion}', "AlertasController:agregar");
$app->get('/eliminar_tipodealerta/{id}', "AlertasController:eliminar");
$app->get('/editar_tipodealerta/{Id}/{Descripcion}', "AlertasController:actualizar");

$app->get('/cirugia_usuario', "CirugiaUsuarioController:all");
$app->get('/cirugia_usuario/{id}', "CirugiaUsuarioController:find");
$app->get('/agregar_cirugia_usuario/{IdUsuario}/{Descripcion}', "CirugiaUsuarioController:add");
$app->get('/eliminar_cirugia_usuario/{id}', "CirugiaUsuarioController:delete");
$app->get('/editar_cirugia_usuario/{id}/{IdUsuario}/{Descripcion}', "CirugiaUsuarioController:edit");



$app->get('/eps', "EPSController:all");


$app->get('/eps/{id}', "EPSController:find");
$app->get('/crear_eps/{Nombre}', "EPSController:add");

$app->get('/eliminar_eps/{id}', "EPSController:delete");

$app->get('/editar_eps/{id}/{Nombre}', "EPSController:update");




$app->get('/contacto', "ContactController:all");
$app->get('/contacto/{id}', "ContactController:find");
$app->get('/eliminar_contacto/{id}', "ContactController:delete");
$app->get('/crear_contacto/{Nombre}/{IdParentesco}/{Celular}/
	{IdTipoContacto}/{Prioridad}', "ContactController:add");

$app->get('/actualizar_contacto/{id}/{Nombre}/{IdParentesco}/{Celular}/
	{IdTipoContacto}/{Prioridad}', "ContactController:update");


$app->get('/usuario', "UsuarioController:all");
$app->get('/medicamento', "MedicamentoController:all");
$app->get('/buscar_medicamento/{id}', "MedicamentoController:find");
$app->get('/crear_medicamento/{idusuario}/{idmedicamento}', "MedicamentoController:create");
$app->get('/eliminar_medicamento/{id}', "MedicamentoController:delete");

$app->post('/login', "UsuarioController:login");
$app->get('/login', "UsuarioController:login");

$app->get('/usuario/{id}', "UsuarioController:find");
$app->post('/buscar_usuario_email', "UsuarioController:find_email");
$app->get('/eliminar_usuario/{id}', "UsuarioController:delete");
$app->post('/editar_usuario', "UsuarioController:update");
$app->post('/crear_usuario', "UsuarioController:create");





