<?php
require 'functions.php';
$query = require 'bootstrap.php';

$query->delete('tasks', $_POST['id']);

header('location: index.php');
