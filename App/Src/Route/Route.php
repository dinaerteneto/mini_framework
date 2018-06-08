<?php

namespace App\Src\Route;

use App\Src\Bootstrap\Bootstrap;

class Route extends Bootstrap
{
    protected function initRoutes()
    {
        $routes = [
            ['route' => '/', 'controller' => 'DefaultController', 'action' => 'index'],
            ['route' => '/contact', 'controller' => 'DefaultController', 'action' => 'contact'],
            ['route' => '/dispositivo', 'controller' => 'DispositivoController', 'action' => 'index'],
            ['route' => '/dispositivo/create', 'controller' => 'DispositivoController', 'action' => 'create'],
            ['route' => '/dispositivo/update', 'controller' => 'DispositivoController', 'action' => 'update'],
            ['route' => '/dispositivo/delete', 'controller' => 'DispositivoController', 'action' => 'delete'],
        ];
        $this->setRoutes($routes);
    }
}
