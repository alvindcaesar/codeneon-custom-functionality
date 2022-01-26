<?php

/**
 * Remove Menu Pages on WordPress Admin Dashboard
 *
 * @package     CCFP
 * @subpackage  CCFP/inc
 * @copyright   Copyright (c) 2022, Alvind Caesar
 * @license     http://opensource.org/licenses/gpl-2.0.php GNU Public License
 * @since       1.0.0
 * @author      Alvind Caesar <hello@alvindcaesar.com>
 */

class CCFP_Remove_Menu_Pages
{

  /**
   * Initialize the class
   */
  public function __construct()
  {
    add_action('admin_init', array($this, 'remove_menu_pages'));
  }


  /**
   * Remove Menu Pages
   *
   * @since  1.0.0
   * @access public
   * @return void
   */
  public function remove_menu_pages()
  {
    // global $user_ID;
    // if ( $user_ID != 1) {
    //   remove_menu_page('wpcb_menu_page_php');
    //   remove_menu_page('edit.php?post_type=brewery');
    //   remove_menu_page('edit.php?post_type=example');


    // }
  }
}
