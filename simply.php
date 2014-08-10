<?php

require_once 'routes.php';
$request = $_SERVER['REQUEST_URI'];
$route = explode('?', str_replace($path, '', $request));
if(!array_key_exists($route[0], $routes)){
	include '404.php';
}
else{
	$include = $routes[$route[0]];
	include $include;
}
