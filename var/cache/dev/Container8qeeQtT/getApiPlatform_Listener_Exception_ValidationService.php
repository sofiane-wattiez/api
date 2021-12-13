<?php

namespace Container8qeeQtT;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getApiPlatform_Listener_Exception_ValidationService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private 'api_platform.listener.exception.validation' shared service.
     *
     * @return \ApiPlatform\Core\Bridge\Symfony\Validator\EventListener\ValidationExceptionListener
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'api-platform'.\DIRECTORY_SEPARATOR.'core'.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'Bridge'.\DIRECTORY_SEPARATOR.'Symfony'.\DIRECTORY_SEPARATOR.'Validator'.\DIRECTORY_SEPARATOR.'EventListener'.\DIRECTORY_SEPARATOR.'ValidationExceptionListener.php';

        return $container->privates['api_platform.listener.exception.validation'] = new \ApiPlatform\Core\Bridge\Symfony\Validator\EventListener\ValidationExceptionListener(($container->services['.container.private.serializer'] ?? $container->get_Container_Private_SerializerService()), $container->parameters['api_platform.error_formats'], $container->parameters['api_platform.exception_to_status']);
    }
}
