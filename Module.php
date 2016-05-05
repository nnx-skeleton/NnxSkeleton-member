<?php
/**
 * Created by PhpStorm.
 * User: dmitry
 * Date: 04.05.16
 * Time: 15:38
 */
namespace NnxSkeleton\Member;
use Zend\ModuleManager\Feature\AutoloaderProviderInterface;
use Zend\ModuleManager\Feature\ConfigProviderInterface;

class Module implements
    AutoloaderProviderInterface,
    ConfigProviderInterface
{

    /**
     * Имя модуля
     *
     * @var string
     */
    const MODULE_NAME = __NAMESPACE__;

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