<?php 
return [
	"settings" => [
		'determineRouteBeforeAppMiddleware' => true,
    	'displayErrorDetails' => true,
    	'addContentLengthHeader' => false,
		"db" => [
			"driver" => "mysql",
			"host" => getenv("DB_HOST"),
			"database" => getenv("DB_DATABASE"),
			"username" => getenv("DB_USER"),
			"password" => getenv("DB_PASSWORD"),
			"charset" => "UTF-8",
			"collation" => "UTF-8_unicode_ci",
			"prefix" => ""

		]
	]
];