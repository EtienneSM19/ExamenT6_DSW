<?php

namespace etienne\examen6\Controllers;

use Philo\Blade\Blade;

abstract class Controller {
    protected $blade;

    public function __construct() {
        $views = '../src/Views';
        $this->blade = new Blade($views);
    }
}