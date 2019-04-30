<?php
require_once "../vendor/autoload.php";

use Ayudapp\Controllers\ContactController;
use Ayudapp\Controllers\loginController;

$dotenv = Dotenv\Dotenv::create(BASE);
$dotenv->load();
//prueba
//Comentario de pull request
//comentario de prueba 3
$app = new Slim\App(include_once BASE .  "bootstrap". DS ."database.php");
$container = $app->getContainer();

$container["db"]  =  function ($container) {
	return new Ayudapp\Tools\DB($container); 
};

$container["ContactController"] = function ($container) {
	return new ContactController($container);
};

$container["LoginController"] = function ($container) {
	return new LoginController($container);
};


require_once BASE . "src". DS ."routes.php";
$app->run();
