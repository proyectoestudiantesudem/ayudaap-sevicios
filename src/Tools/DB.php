<?php 

namespace Ayudapp\Tools;

class DB extends \PDO
{
	function __construct ($container) 
	{
		$dns = "mysql:host=".$container["settings"]["db"]["host"].";dbname=".$container["settings"]["db"]["database"].";chartset=utf-8;";
		parent::__construct($dns, $container["settings"]["db"]["username"], $container["settings"]["db"]["password"], [
			\PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES 'utf8'"
		]);
	}
}