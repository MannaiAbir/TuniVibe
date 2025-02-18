<?php

namespace ContainerGi0vxtH;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_YE_U6HBService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.YE.U6HB' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.YE.U6HB'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService ??= $container->getService(...), [
            'entityManager' => ['services', 'doctrine.orm.default_entity_manager', 'getDoctrine_Orm_DefaultEntityManagerService', false],
            'seance' => ['privates', '.errored..service_locator.YE.U6HB.App\\Entity\\Seance', NULL, 'Cannot autowire service ".service_locator.YE.U6HB": it needs an instance of "App\\Entity\\Seance" but this type has been excluded in "config/services.yaml".'],
        ], [
            'entityManager' => '?',
            'seance' => 'App\\Entity\\Seance',
        ]);
    }
}
