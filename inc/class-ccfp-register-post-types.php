<?php

/**
 * Register custom post types
 *
 * @package     CCFP
 * @subpackage  CCFP/inc
 * @copyright   Copyright (c) 2022, Alvind Caesar
 * @license     http://opensource.org/licenses/gpl-2.0.php GNU Public License
 * @since       1.0.0
 * @author      Alvind Caesar <hello@alvindcaesar.com>
 */

class CCFP_Register_Post_Types
{

    /**
     * Initialize the class
     */
    public function __construct()
    {
        add_action('init', array($this, 'register_example_post_type'));
    }


    /**
     * Register Post Type
     *
     * @since  1.0.0
     * @access public
     * @return void
     */
    public function register_example_post_type()
    {
        register_post_type(
            'example',
            array(
                'labels'        => array(
                    'name'          => __('Examples'),
                    'singular_name' => __('Example'),
                    'add_new'       => __('Add Example'),
                    'add_new_item'  => __('Add New Example'),
                    'edit_item'     => __('Edit Example'),
                ),
                'public'      => true,
                'has_archive' => true,
            )
        );
    }
}
