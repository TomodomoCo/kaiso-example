<?php

use \Tomodomo\Kaiso as App;

$settings = [
	'controllerPath' => '\\MyApp\\Controllers\\',
];

$app = new App($settings);

$app->container['twig'] = function () {
	$loader = new Twig_Loader_Filesystem(ABSPATH . '../../app/views');

	return new Twig_Environment($loader);
};

$app->run();
