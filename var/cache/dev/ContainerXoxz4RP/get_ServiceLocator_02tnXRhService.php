<?php

namespace ContainerXoxz4RP;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_02tnXRhService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.02tnXRh' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.02tnXRh'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'mailer' => ['privates', 'mailer.mailer', 'getMailer_MailerService', true],
            'manager' => ['services', 'doctrine.orm.default_entity_manager', 'getDoctrine_Orm_DefaultEntityManagerService', false],
            'passwordEncoder' => ['services', 'security.password_encoder', 'getSecurity_PasswordEncoderService', true],
        ], [
            'mailer' => '?',
            'manager' => '?',
            'passwordEncoder' => '?',
        ]);
    }
}
