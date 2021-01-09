<?php


use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Loader\Configurator\RoutingConfigurator;

return static function (RoutingConfigurator $routes): void {
//    $routes
//        ->add('sign_up', '/sign-up')
//        ->methods([Request::METHOD_POST])
//        ->controller([GuestController::class,'singUp']);

    $routes
        ->add('sign_in', '/sign_in')
        ->methods([Request::METHOD_POST]);

};