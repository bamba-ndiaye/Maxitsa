<?php

use App\core\Router;

require_once __DIR__ . '/../vendor/autoload.php';
// require_once __DIR__ . '/../templates/login/login.html.php';
require_once __DIR__ . '../../routes/Route.web.php';

Router::resolver($routes);
