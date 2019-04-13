<?php

$app->get('/contact', "ContactController:all");
$app->get('/usuario', "UsuarioController:all");
$app->get('/medicamento', "MedicamentoController:all");

$app->get('/contact/{id}', "ContactController:find");
$app->get('/usuariof/{id}', "UsuarioController:find");
$app->get('/usuariod/{id}', "UsuarioController:delete");

/*$app->get('/usuariou/{id}/{Nombre}', "UsuarioController:update");*/

$app->get('/usuariou/{id}/{IdRh}/{IdEps}/{IdTipoDeDocumento}/{NroDeDocumento}/{Nombre}/{Apellido}/{TelefonoFijo}/{Celular}/{Email}/{Direccion}/{Contrasena}/{FechaDeNacimiento}', "UsuarioController:update");