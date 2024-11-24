<?php

require_once __DIR__ . '/../app/routes/web.php';
require_once __DIR__ . '/../app/routes/api.php';
require_once __DIR__ . '/../app/core/Router.php';

use App\Core\Router;

Router::run();
