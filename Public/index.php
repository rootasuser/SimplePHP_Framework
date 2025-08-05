<?php

require_once __DIR__ . '/../vendor/autoload.php';

use Dotenv\Dotenv;

$dotenv = Dotenv::createImmutable(__DIR__ . '/../');
$dotenv->load();

// Basic security headers
header("X-Frame-Options: DENY");
header("X-Content-Type-Options: nosniff");

// Load app
require_once __DIR__ . '/../Server/Core/App.php';
require_once __DIR__ . '/../Server/Core/Controller.php';

$app = new \Server\Core\App();
