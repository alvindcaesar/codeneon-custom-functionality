<?php

/**
 * Main Init Class
 *
 * @package     CCFP
 * @subpackage  CCFP/inc
 * @copyright   Copyright (c) 2022, Alvind Caesar
 * @license     http://opensource.org/licenses/gpl-2.0.php GNU Public License
 * @since       1.0.0
 * @author      Alvind Caesar <hello@alvindcaesar.com>
 */

class CCFP_Init
{

	/**
	 * Initialize the class
	 */
	public function __construct()
	{

		$register_post_types     = new CCFP_Register_Post_Types();
		$disable_auto_updates		 = new CCFP_Disable_Auto_Updates();
		$remove_menu_pages			 = new CCFP_Remove_Menu_Pages();
	}
}
