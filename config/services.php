<?php


use Rizbo\SymfonyTracer\EventListener\TracerEventSubscriber;
use Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator;

return static function (ContainerConfigurator $container): void {
    $services = $container->services();

    // Register Tracer for http requests
    $services->set('rizbo.symfony_tracer.event_subscriber', TracerEventSubscriber::class)
        ->tag('kernel.event_subscriber');

};