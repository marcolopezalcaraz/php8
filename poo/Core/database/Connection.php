<?php 
class Connection{
    public static function start($config){
        try {
            return new PDO ("{$config['type']}:host=127.0.0.1;dbname={$config['database']}", $config['user'], $config['password']);
        } catch (PDOException $error) {
            echo 'error de conexion';
        }
    }
}