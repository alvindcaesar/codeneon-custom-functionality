<?php

/**
 * Disable Theme and Plugin Auto Updater
 *
 * @package     CCFP
 * @subpackage  CCFP/inc
 * @copyright   Copyright (c) 2022, Alvind Caesar
 * @license     http://opensource.org/licenses/gpl-2.0.php GNU Public License
 * @since       1.0.0
 * @author      Alvind Caesar <hello@alvindcaesar.com>
 */

class CCFP_Disable_Auto_Updates
{

  /**
   * Initialize the class
   */
  public function __construct()
  {
    add_action('init', array($this, 'disable_auto_updates'));
  }


  /**
   * Register Post Type
   *
   * @since  1.0.0
   * @access public
   * @return void
   */
  public function disable_auto_updates()
  {
    add_filter('auto_update_theme', '__return_false');
    add_filter('auto_update_plugin', '__return_false');
  }
}
