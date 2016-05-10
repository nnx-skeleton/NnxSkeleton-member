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
use Nnx\Module\CommonModuleOptionsInterface;
use NnxSkeletonMember\Core\Module as CoreModule;
use NnxSkeletonMember\User\Module as UserModule;
use NnxSkeletonMember\Organization\Module as OrganizationModule;

class Module implements
    AutoloaderProviderInterface,
    ConfigProviderInterface,
    ModuleConfigKeyProviderInterface,
    IntegrationModuleInterface,
    CommonModuleOptionsInterface

{
    use IntegrationModuleTrait, EventManagerAwareTrait;
    /**
     * Имя секции в конфиге приложения, отвечающей за настройки модуля
     *
     * @var string
     */
    const CONFIG_KEY = 'nnx_skeleton_member';

    /**
     * Имя модуля
     *
     * @var string
     */
    const MODULE_NAME = __NAMESPACE__;

    /**
     * Возвращает список модулей, принадлежащих данному сервису
     *
     * @return array
     */
    public function getServiceModules()
    {
        return [
            CoreModule::MODULE_NAME,
            UserModule::MODULE_NAME,
            OrganizationModule::MODULE_NAME,
        ];
    }

    /**
     * @inheritdoc
     *
     * @return array
     */
    public function getCommonModuleOptions()
    {
        return [

        ];
    }

    /**
     * @return string
     */
    public function getModuleConfigKey()
    {
        return static::CONFIG_KEY;
    }

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