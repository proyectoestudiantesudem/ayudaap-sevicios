<?php

$app->get('/contact', "ContactController:all");
$app->get('/contact/{id}', "ContactController:find");
$app->get('/usuario',"LoginController:all");
$app->get('/usuario/{email}/{contrasena}', "LoginController:find");