<?php

namespace Rizbo\SymfonyTracer;

use Rizbo\SymfonyTracer\EventListener\TracerEventSubscriber;
use Symfony\Component\Config\Definition\Configurator\DefinitionConfigurator;
use Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator;
use Symfony\Component\DependencyInjection\ContainerBuilder;
use Symfony\Component\HttpKernel\Bundle\AbstractBundle;

class SymfonyTracerBundle extends AbstractBundle
{
    public function configure(DefinitionConfigurator $definition): void
    {
        $definition->import($this->getConfigDir() . '/definition.php');
    }

    public function loadExtension(array $config, ContainerConfigurator $container, ContainerBuilder $builder): void
    {
        $container->import($this->getConfigDir() . '/services.php');
    }

    private function getConfigDir(): string
    {
        return dirname(__DIR__) . '/config';
    }
}