<?php

namespace ContainerGi0vxtH;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_Uc0Ax9jService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.uc0Ax9j' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.uc0Ax9j'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService ??= $container->getService(...), [
            'hebergement' => ['privates', '.errored..service_locator.uc0Ax9j.App\\Entity\\Hebergement', NULL, 'Cannot autowire service ".service_locator.uc0Ax9j": it needs an instance of "App\\Entity\\Hebergement" but this type has been excluded in "config/services.yaml".'],
        ], [
            'hebergement' => 'App\\Entity\\Hebergement',
        ]);
    }
}
