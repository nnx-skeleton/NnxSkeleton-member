<?php
/**
 * Created by PhpStorm.
 * User: dmitry
 * Date: 04.05.16
 * Time: 15:38
 */
namespace NnxSkeletonMember\Member;

use Zend\ModuleManager\Feature\AutoloaderProviderInterface;
use Zend\ModuleManager\Feature\ConfigProviderInterface;
use Zend\EventManager\EventManagerAwareTrait;
use Nnx\ModuleOptions\ModuleConfigKeyProviderInterface;
use Nnx\Module\IntegrationModuleTrait;
use Nnx\Module\IntegrationModuleInterface;

class Module implements
    AutoloaderProviderInterface,
    ConfigProviderInterface,
    ModuleConfigKeyProviderInterface,
    IntegrationModuleInterface,
    CommonModuleOptionsInterface

{
    use IntegrationModuleTrait, EventManagerAwareTrait;
    /**
     * Имя модуля
     *
     * @var string
     */
    const MODULE_NAME = __NAMESPACE__;

    /**
     * Имя модуля
     *
     * @var string
     */
    const CONFIG_KEY = 'nnx_skeleton_member';

    /**
     * @return array
     */
    public function getAutoloaderConfig()
    {
        return array(
            'Zend\Loader\StandardAutoloader' => array(
                'namespaces' => array(
                    __NAMESPACE__ => __DIR__ . '/src/',
                ),
            ),
        );
    }

    /**
     * @return mixed
     */
    public function getConfig()
    {
        return include __DIR__ . '/config/module.config.php';
    }
} 