<?php

$container = require __DIR__ . '/../app/bootstrap.php';
$container->getByType('RestServer\Application')->run();
