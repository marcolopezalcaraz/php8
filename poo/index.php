<?php

$query = require 'Core/bootstrap.php';
require 'Models/Task.php';

$routes = [
    '' => 'Controllers/index.php',
    'about' => 'Controllers/about.php',
    'services' => 'Controllers/services.php',
    'contact' => 'Controllers/contact.php',
];




require 'Controllers/index.php';