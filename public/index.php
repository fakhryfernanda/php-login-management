<?php

require_once __DIR__ . '/../vendor/autoload.php';

use fakhryfernanda\PHP\Login\Management\App\Router;
use fakhryfernanda\PHP\Login\Management\Controller\HomeController;

Router::add('GET', '/', HomeController::class, 'index');
Router::add('GET', '/hello', HomeController::class, 'hello');
Router::add('GET', '/world', HomeController::class, 'world');
Router::add('GET', '/about', HomeController::class, 'about');

Router::run(); 