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
$GLOBALS['TL_DCA']['tl_content']['config']['onload_callback'][] = array('DMA\\DMABundle\\Contao\\DMAElementGeneratorCallbacks','content_onload');


/*
 * Fields
 */
$GLOBALS['TL_DCA']['tl_content']['fields']['dma_eg_data'] = array
(
    'sql'                     => "longtext NULL"
);
$GLOBALS['TL_DCA']['tl_content']['fields']['dmaElementTpl'] = array
(
    'label'                   => &$GLOBALS['TL_LANG']['tl_content']['dmaElementTpl'],
    'exclude'                 => true,
    'inputType'               => 'select',
    'options_callback'        => array('tl_dma_elementgenerator_content', 'getDmaElementTemplates'),
    'eval'                    => array('includeBlankOption'=>true, 'chosen'=>true, 'tl_class'=>'w50'),
    'sql'                     => "varchar(64) NOT NULL default ''"
);


// Compatibility
if (TL_MODE == 'BE')
{
    $GLOBALS['TL_JAVASCRIPT'][] = 'bundles/dma_elementgenerator/DMA-uncompressed.js';
}



/**
 * Provide miscellaneous methods that are used by the data configuration array.
 *
 * @author Janosch Oltmanns
 */
class tl_dma_elementgenerator_content extends \Backend
{

    /**
     * Import the back end user object
     */
    public function __construct()
    {
        parent::__construct();
        $this->import('BackendUser', 'User');
    }

    /**
     * Return all dma element templates as array
     *
     * @return array
     */
    public function getDmaElementTemplates()
    {
        return $this->getTemplateGroup('dma_eg_');
    }
}