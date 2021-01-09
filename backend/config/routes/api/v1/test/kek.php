<?php

use App\Controller\MainController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Loader\Configurator\RoutingConfigurator;

return static function (RoutingConfigurator $routes): void {
    $routes
        ->add('kek', '/kek')
        ->controller([MainController::class, 'test'])
        ->methods([Request::METHOD_POST])
    ;
};