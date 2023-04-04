<?php
     $config = require 'config.php';
     if ($config['error_handling']) {
        # code...
     }
    require 'database/Connection.php';
    require 'database/QueryBuilder.php';
    require 'functions.php';
   
$pdo = Connection::start($config['database']);  

return new QueryBuilder($pdo);