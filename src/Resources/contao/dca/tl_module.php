<?php

/**
 * Contao Open Source CMS
 *
 * Copyright (c) 2005-2015 Leo Feyer
 *
 * @license LGPL-3.0+
 */


/*
 * Callbacks
 */
$GLOBALS['TL_DCA']['tl_module']['config']['onload_callback'][] = array('DMA\DMABundle\Contao\DMAElementGeneratorCallbacks','module_onload');


/*
 * Fields
 */
$GLOBALS['TL_DCA']['tl_module']['fields']['dma_eg_data'] = array
(
    'sql'                     => "longtext NULL"
);


// Compatibility
if (TL_MODE == 'BE')
{
    $GLOBALS['TL_JAVASCRIPT'][] = 'bundles/dma_elementgenerator/DMA-uncompressed.js';
}