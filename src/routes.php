<?php

$app->get('/contact', "ContactController:all");
$app->get('/contact/{id}', "ContactController:find");
$app->get('/cirugia_usuario', "CirugiaUsuarioController:all");
$app->get('/cirugia_usuario/buscar/{id}', "CirugiaUsuarioController:find");
$app->get('/cirugia_usuario/eliminar/{id}', "CirugiaUsuarioController:delete");
$app->get('/cirugia_usuario/agregar/{IdUsuario}/{Descripcion}', "CirugiaUsuarioController:add");
$app->get('/cirugia_usuario/editar/{id}/{IdUsuario}/{Descripcion}', "CirugiaUsuarioController:edit");
$app->get('/cirugia_usuario/restricciones', "CirugiaUsuarioController:restrict");
