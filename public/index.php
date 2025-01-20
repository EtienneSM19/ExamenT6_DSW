<?php

error_reporting(E_ALL ^ E_DEPRECATED);

use Philo\Blade\Blade;

require '../vendor/autoload.php';

$views = '../src/Views';
$cache = '../cache';
$blade = new Blade($views, $cache);

$router = new AltoRouter();
$match = $router->match();

$router->map('GET', '/', function() use ($blade){
  echo $blade->view()->make('index')->render();
});

if($match) {
  $target = $match["target"];
  if(is_string($target) && strpos($target, "#") !== false) {
      list($controller, $action) = explode("#", $target);
      $controller = "Controllers\\" . $controller;
      $controller = new $controller;
      $controller->$action($match["params"]);
  } else {
      if(is_callable($match["target"])) 
 call_user_func_array($match["target"], $match["params"]);
      else require $match["target"];
  }
 } else {
  echo "Ruta no válida";
  die();
 }
 