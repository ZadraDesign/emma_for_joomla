<?php
/**
 * @version     1.0.0
 * @package     plg_system_emma
 * @copyright   Copyright (C) 2015. All rights reserved.
 * @license     GNU General Public License version 3; see LICENSE.txt
 * @author      Zadra Design <zachary@zadradesign.com> - http://zadradesign.com
 */

// No direct access
defined('_JEXEC') or die('Restricted access');

/**
 * Script file for the plg_system_emma plugin
 */
class plgSystemEmmaInstallerScript{

  /**
   * Method to run after the plugin install, update, or discover_update actions have completed.
   *
   * @return void
   */
  function postflight($type,$parent){
    // Only run on install
    if($type == 'install'){     
      // set the plugin to enabled by default  
      $db = JFactory::getDbo();
      $query = $db->getQuery(true);

      $query->update($db->quoteName('#__extensions'));
      $query->set(array(
          $db->quoteName('enabled') . '=' . $db->quote('1'),
          $db->quoteName('ordering') . '=' . $db->quote('9999')
      ));
      $query->where(array(
        $db->quoteName('element') . '=' . $db->quote('emma'), 
        $db->quoteName('type') . '=' . $db->quote('plugin')
      ));

      $db->setQuery($query);   
      $db->execute();     
    }
  }
}