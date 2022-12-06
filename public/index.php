<?php

require_once __DIR__ . '/../vendor/autoload.php';

use fakhryfernanda\PHP\Login\Management\App\Router;
use fakhryfernanda\PHP\Login\Management\Controller\HomeController;

Router::add('GET', '/', HomeController::class, 'index');


Router::run(); 