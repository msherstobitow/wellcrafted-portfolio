<?php

namespace Wellcrafted\Portfolio\Project\Category;

if ( ! defined( 'ABSPATH' ) ) {
    header('HTTP/1.0 403 Forbidden');
    exit;
}

/**
 * Taxonomy class object creates a 'wc_portfolioprojectcategory' admin taxonomy for 'wc_portfolioproject' post type.
 *
 * @author  Maksim Sherstobitow <maksim.sherstobitow@gmail.com>
 * @version 1.0.0
 * @package Wellcrafted\Portfolio
 */
class Taxonomy extends \Wellcrafted\Core\Taxonomy\Category {

    /**
     * The name of the taxonomy. Name should only contain lowercase letters and the underscore character, and not be more than 32 characters long (database structure restriction). 
     * 
     * @var string
     * @since  1.0.0
     */
    protected $taxonomy = 'wc_portfolioprojectcategory';

    /**
     * Name of the object type for the taxonomy object. Object-types can be built-in Post Type or any Custom Post Type that may be registered. 
     * 
     * @var string or array
     * @since  1.0.0
     */
    protected $object_type = 'wc_portfolioproject';

    /**
     * Whether to allow automatic creation of taxonomy columns on associated post-types table. (Available since 3.5) 
     * 
     * @var boolean
     * @since  1.0.0
     */
    protected $show_admin_column = true;

    /**
     * Allows to set params before normalizing
     * 
     * @since  1.0.0
     */
    protected function set_params() {
        $this->name_label = __( 'Project categories', WELLCRAFTED_PORTFOLIO );
        $this->singular_name_label = __( 'Category', WELLCRAFTED_PORTFOLIO );
        $this->menu_name_label = __( 'Categories', WELLCRAFTED_PORTFOLIO );
    }

}
