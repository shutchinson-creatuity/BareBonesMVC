<?php

namespace Bones;

require_once __DIR__ . '/Loader/AutoLoader.php';

$autoloader = new Loader\AutoLoader(__NAMESPACE__, dirname(__DIR__));
$autoloader->register();
