<?php

$app->get('/contact', "ContactController:all");
$app->get('/tipodealerta', "UsuariosController:all");
$app->get('/contact/{id}', "ContactController:find");
$app->get('/tipodealerta/buscarRegistro/{id}', "UsuariosController:find");
$app->get('/tipodealerta/agregarRegistro/{Id}/{Descripcion}', "UsuariosController:agregar");
$app->get('/tipodealerta/eliminarRegistro/{id}', "UsuariosController:eliminar");
$app->get('/tipodealerta/actualizarRegistro/{id}/{Id}/{Descripcion}', "UsuariosController:actualizar");


