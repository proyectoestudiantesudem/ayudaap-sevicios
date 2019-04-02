<?php

namespace Ayudapp\Controllers;


abstract class Controller 
{
	protected $container;
	function __construct($container)
	{
		$this->container = $container;
	}

	function __get($name)
	{
		if ($this->container->{$name}) {
			return $this->container->{$name};
		}
		return null;
	}

	function __invoke($request, $response, $args)
	{
		return $response;
	}
}