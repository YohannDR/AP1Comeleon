<?php

namespace ContainerZFBXu7R;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_SNMRf4Service extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.sNMRf4_' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.sNMRf4_'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'presta' => ['privates', '.errored..service_locator.sNMRf4_.App\\Entity\\Presta', NULL, 'Cannot autowire service ".service_locator.sNMRf4_": it references class "App\\Entity\\Presta" but no such service exists.'],
        ], [
            'presta' => 'App\\Entity\\Presta',
        ]);
    }
}
