<?php

namespace ContainerLgntZfY;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_JoIn95uService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.joIn95u' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.joIn95u'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService ??= $container->getService(...), [
            'intern' => ['privates', '.errored..service_locator.joIn95u.App\\Entity\\Intern', NULL, 'Cannot autowire service ".service_locator.joIn95u": it needs an instance of "App\\Entity\\Intern" but this type has been excluded in "config/services.yaml".'],
        ], [
            'intern' => 'App\\Entity\\Intern',
        ]);
    }
}
