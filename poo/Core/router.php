<?php

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