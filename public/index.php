<?php

require_once __DIR__ . '/../vendor/autoload.php';

$todoController = require __DIR__ . '/../src/Config/DependencyInjection.php';

$todoController->create('Buy milk', 'test');
$todoController->create('Write code', 'test');
$todoController->list();