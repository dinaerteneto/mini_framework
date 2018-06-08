<?php

namespace App\Src\Route;

use App\Src\Bootstrap\Bootstrap;

class Route extends Bootstrap
{
    protected function initRoutes()
    {
        $routes = [
            'home' => ['route' => '/', 'controller' => 'DefaultController', 'action' => 'index'],
            'contact' => ['route' => '/contact', 'controller' => 'DefaultController', 'action' => 'contact'],
        ];
        $this->setRoutes($routes);
    }
}
