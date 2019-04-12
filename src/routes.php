<?php
$app->get('/contact', "ContactController:all");
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

$app->get('/usuarios', "UsuariosController:all");
