<?php
/**
 * @copyright   Copyright (C) 2014 Zadra Design. All rights reserved.
 * @license     GNU General Public License version 2 or later.
 */
 
defined('_JEXEC') or die;
 
/**
 * EmmaForJoomla plugin class
 *
 * @package     Joomla.plugin
 * @subpackage  System.EmmaForJoomla
 */
class plgSystemEmmaForJoomla extends JPlugin
{
    /**
     * Method to register custom library
     *
     * return  void
     */
    public function onAfterInitialise()
    {
        JLoader::registerPrefix('EmmaForJoomla', JPATH_LIBRARIES . '/emma_for_joomla');
    }
}