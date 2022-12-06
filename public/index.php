<?php

require_once __DIR__ . '/../vendor/autoload.php';

use Fakhryfernanda\Mvc\App\Router;
use Fakhryfernanda\Mvc\Controller\HomeController;

Router::add('GET', '/', HomeController::class, 'index');
Router::add('GET', '/hello', HomeController::class, 'hello');
Router::add('GET', '/world', HomeController::class, 'world');
Router::add('GET', '/about', HomeController::class, 'about');

Router::run(); 