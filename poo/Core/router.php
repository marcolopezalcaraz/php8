<?php

//Clase de los miercoles

// empezar la clase con GitHub
class Router {

    protected $routes = [];

    public function register($routes)
    {
        $this->routes = $routes;
    }

    public function handle($url)
    {
        
    }
}