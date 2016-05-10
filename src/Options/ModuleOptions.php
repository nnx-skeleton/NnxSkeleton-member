<?php
namespace NnxSkeletonMember\Member\Options;

use Zend\Stdlib\AbstractOptions;
use Nnx\ModuleOptions\ModuleOptionsInterface;
use Nnx\Doctrine\ObjectManager\ObjectManagerNameProviderInterface;
use Nnx\Doctrine\ObjectManager\ObjectManagerNameProviderTrait;

/**
 * Class ModuleOptions
 *
 * @package NnxSkeletonMember\Member\Options
 */
class ModuleOptions extends AbstractOptions implements ModuleOptionsInterface, ObjectManagerNameProviderInterface
{
    use ObjectManagerNameProviderTrait;
}
