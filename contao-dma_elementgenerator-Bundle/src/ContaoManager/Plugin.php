<?php
/**
 * @copyright  MEN AT WORK 2018
 * @package    MenAtWork\DMABundle
 * @license    GNU/LGPL
 */

namespace DMA\DMABundle\ContaoManager;

use Contao\CoreBundle\ContaoCoreBundle;
use Contao\ManagerPlugin\Bundle\BundlePluginInterface;
use Contao\ManagerPlugin\Bundle\Config\BundleConfig;
use Contao\ManagerPlugin\Bundle\Config\ConfigInterface;
use Contao\ManagerPlugin\Bundle\Parser\ParserInterface;
use DMA\DMABundle\DMABundle;

/**
 * Class Plugin
 *
 * @package DMA\DMABundle\ContaoManager
 */
class Plugin implements BundlePluginInterface
{

    /**
     * @param ParserInterface $parser
     *
     * @return array|ConfigInterface[]
     */
    public function getBundles(ParserInterface $parser)
    {
        return [
            BundleConfig::create(DMABundle::class)
                ->setLoadAfter([ContaoCoreBundle::class])
                ->setReplace(['contao-legacy/dma_elementgenerator'])
                ->setReplace(['dma/dma_elementgenerator']),
        ];
    }
}