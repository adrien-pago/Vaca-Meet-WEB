<?php

namespace ContainerKemSBV2;


use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_PyxXrWwService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.PyxXrWw' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.PyxXrWw'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService ??= $container->getService(...), [
            'entityManager' => ['services', 'doctrine.orm.default_entity_manager', 'getDoctrine_Orm_DefaultEntityManagerService', false],
            'activityRepository' => ['privates', 'App\\Repository\\ActivityRepository', 'getActivityRepositoryService', true],
        ], [
            'entityManager' => '?',
            'activityRepository' => 'App\\Repository\\ActivityRepository',
        ]);
    }
}
