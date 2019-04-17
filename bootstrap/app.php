<?php
require_once "../vendor/autoload.php";

use Ayudapp\Controllers\ContactController;
use Ayudapp\Controllers\UsuariosController;

use Ayudapp\Controllers\CirugiaUsuarioController;

use Ayudapp\Controllers\EPSController;


$dotenv = Dotenv\Dotenv::create(BASE);
$dotenv->load();
//prueba
//Comentario de pull request

$app = new Slim\App(include_once BASE .  "bootstrap". DS ."database.php");
$container = $app->getContainer();

$container["db"]  =  function ($container) {
	return new Ayudapp\Tools\DB($container); 
};

$container["ContactController"] = function ($container) {
	return new ContactController($container);
};

$container["CirugiaUsuarioController"] = function ($container) {
	return new CirugiaUsuarioController($container);

$container["EPSController"] = function ($container) {
	return new EPSController($container);
};

$container["UsuariosController"] = function ($container) {
	return new UsuariosController($container);

};

require_once BASE . "src". DS ."routes.php";
$app->run();
