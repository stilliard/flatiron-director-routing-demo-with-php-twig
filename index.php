<?php

require_once dirname(__FILE__) . '/vendor/autoload.php';

$loader = new Twig_Loader_Filesystem('./');
$twig = new Twig_Environment($loader);

$function = new Twig_SimpleFunction('path', function ($path, $params=[]) {
	return '/' . ($path=='/' ? '' : $path) . ($params ? '/' . implode(',', $params) : '');
});
$twig->addFunction($function);

echo $twig->render('index.twig', [
	'meta' => [
		'title' => 'Demo page',
	],
	'title' => 'Demo using flatiron',
	'text' => 'Flatiron director for the js router!',
]);
