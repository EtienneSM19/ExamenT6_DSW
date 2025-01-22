<?php

error_reporting(E_ALL ^ E_DEPRECATED);

use Philo\Blade\Blade;

require '../vendor/autoload.php';

$views = '../src/views/';
$cache = '../cache';
$blade = new Blade($views, $cache);

$router = new AltoRouter();

$router->map('GET', '/', function() use ($blade){
  echo $blade->view()->make('index')->render();
});

$match = $router->match();

if (is_array($match)) {
  if (is_callable($match['target'])) {
    call_user_func_array($match['target'], $match['params']);
  } else {
    $params = $match['params'];
    $controller = new $match['target'][0];
    $method = $match['target'][1];
    $controller->$method($params);
  }
} else {
  echo $blade->view()->make('404')->render();
}