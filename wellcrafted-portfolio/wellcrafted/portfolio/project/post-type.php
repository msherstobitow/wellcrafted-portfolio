<?php

namespace Wellcrafted\Portfolio\Project;

if ( ! defined( 'ABSPATH' ) ) {
    header('HTTP/1.0 403 Forbidden');
    exit;
}

/**
 * Wellcrafted_Portfolio_Project_Post_Type class object creates a 'wc_portfolioproject' public post type.
 *
 * @author  Maksim Sherstobitow <maksim.sherstobitow@gmail.com>
 * @version 1.0.0
 * @package Wellcrafted\Portfolio
 */
class Post_Type extends \Wellcrafted\Core\Post\Type\Open {

    /**
     * Post type. (max. 20 characters, cannot contain capital letters or spaces) 
     * 
     * @var null
     * @since  1.0.0
     */
    protected $post_type = 'wc_portfolioproject';

    /**
     * Adds extra supports to defaults
     * 
     * @var array
     * @since  1.0.0
     */
    protected $extra_supports = [ 'thumbnail' ];

    /**
     * The url to the icon to be used for this menu or the name of the icon from the iconfont
     * 
     * @var null
     * @see http://melchoyce.github.io/dashicons/
     * @since  1.0.0
     */
    protected $menu_icon = 'dashicons-portfolio';

    /**
     * Set all required parameters for post type registration
     * 
     * @since  1.0.0
     */
    protected function set_params() {
        $this->name_label = __( 'Projects', WELLCRAFTED_PORTFOLIO );
        $this->singular_name_label = __( 'Project', WELLCRAFTED_PORTFOLIO );
        $this->all_items_label = __( 'All projects', WELLCRAFTED_PORTFOLIO );
        $this->add_new_label = __( 'Create new', WELLCRAFTED_PORTFOLIO );
        $this->add_new_item_label = __( 'Create new project', WELLCRAFTED_PORTFOLIO );
        $this->new_item_label = __( 'New project', WELLCRAFTED_PORTFOLIO );
        $this->menu_name_label = __( 'Portfolio', WELLCRAFTED_PORTFOLIO );
        $this->edit_item_label = __( 'Edit project', WELLCRAFTED_PORTFOLIO );
    }



    /**
     * Modify post type messages
     * 
     * @param  array $messages Messages array
     * @return array           Modified messages array
     * @since  1.0.0
     */
    protected function current_post_updated_messages( $messages ) {
        $messages[1] = __( 'Project saved', WELLCRAFTED_PORTFOLIO );
        return $messages;
    }

}

