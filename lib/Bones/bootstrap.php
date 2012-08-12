<?php

namespace Bones;

require_once __DIR__ . '/Core/AutoLoader.php';

$autoloader = new Core\AutoLoader(__NAMESPACE__, dirname(__DIR__));
$autoloader->register();
