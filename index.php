<?php

# Error Reporting; Erase in live environment
ini_set('display_errors', 1);
error_reporting(-1);

# Define global variables
defined('BASE_DIR') || define('BASE_DIR', __DIR__ . '/');

# Load the library
require_once BASE_DIR . '/lib/Bones/Bones.php';

$app = new \Bones\Bones;

