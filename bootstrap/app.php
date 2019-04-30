<?php
require_once "../vendor/autoload.php";

use Ayudapp\Controllers\ContactController;
use Ayudapp\Controllers\loginController;
use Ayudapp\Controllers\AlertasController;
use Ayudapp\Controllers\UsuarioController;
use Ayudapp\Controllers\CirugiaUsuarioController;
use Ayudapp\Controllers\EPSController;
use Ayudapp\Controllers\MedicamentoController;


$dotenv = Dotenv\Dotenv::create(BASE);
$dotenv->load();


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
};


$container["EPSController"] = function ($container) {
	return new EPSController($container);
};

$container["UsuarioController"] = function ($container) {
	return new UsuarioController($container);
};

/*
$container["AlertasController"] = function ($container) {
	return new AlertasController($container);

*/


$container["MedicamentoController"] = function ($container) {
	return new MedicamentoController($container);
};


require_once BASE . "src". DS ."routes.php";
$app->run();
