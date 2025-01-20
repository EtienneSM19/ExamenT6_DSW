<?php

namespace etienne\examen6\Controllers;

use Philo\Blade\Blade;

abstract class Controller {
    protected $blade;

    public function __construct() {
        $views = '../src/Views';
        $cache = '../cache';
        $this->blade = new Blade($views, $cache);
    }
}