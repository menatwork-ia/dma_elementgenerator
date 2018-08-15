<?php
/**
 *  Contao Open Source CMS
 *
 * @copyright  MEN AT WORK 2018
 * @package    DMA\DMABundle\ContaoManager
 * @license    GNU/LGPL
 */

namespace DMA\DMABundle\DependencyInjection;

use Symfony\Component\Config\FileLocator;
use Symfony\Component\DependencyInjection\Extension\Extension;
use Symfony\Component\DependencyInjection\ContainerBuilder;
use Symfony\Component\DependencyInjection\Loader\YamlFileLoader;

class DMAExtension extends Extension
{
    /**
     * {@inheritdoc}
     */
    public function load(array $mergedConfig, ContainerBuilder $container)
    {
        $loader = new YamlFileLoader(
            $container,
            new FileLocator(__DIR__.'/../Resources/config')
        );
        //$loader->load('listener.yml');
        //$loader->load('services.yml');
    }
}