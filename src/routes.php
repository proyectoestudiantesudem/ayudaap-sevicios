<?php

$app->get('/contact', "ContactController:all");
$app->get('/usuario', "UsuarioController:all");
$app->get('/medicamento', "MedicamentoController:all");

$app->get('/contact/{id}', "ContactController:find");