<?php

use Phalcon\Mvc\Micro as MicroApp;
use Phalcon\DI\FactoryDefault;

$di = new FactoryDefault();

try {

	$app = new MicroApp();

	$app->set($di);

	// routes
	$app->get('/', function()
	{
		return "Hello from Phalcon!";
	});

	$app->handle();


} catch(\Phalcon\Exception $e){
	echo "PhalconException: ", $e->getMessage();
}