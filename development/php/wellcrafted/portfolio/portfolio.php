<?php
namespace Wellcrafted\Portfolio;

use \Wellcrafted\Core\Plugin as Plugin;

if ( ! defined( 'ABSPATH' ) ) {
    header('HTTP/1.0 403 Forbidden');
    exit;
}

if ( ! defined( 'WELLCRAFTED_PORTFOLIO' ) ) {
    define( 'WELLCRAFTED_PORTFOLIO', 'wellcrafted_portfolio' );
}

/**
 * Wellcrafted_Portfolio class is a plugin class.
 * @todo  PHPDoc
 *
 * @author  Maksim Sherstobitow <maksim.sherstobitow@gmail.com>
 * @version 1.0.0
 * @package Wellcrafted\Portfolio
 */
class Portfolio extends Plugin  {

    /**
     * Add into a class Singleton pattern ability
     *
     * @since  1.0.0
     */
    use \Wellcrafted\Core\Traits\Singleton;

    /**
     * A developer's support email. 
     * 
     * @since  1.0.0
     */
    protected $support_email = 'portfolio_plugin.support@wllcrftd.com';

    /**
     * Whether to use template loader
     * 
     * @var boolean
     * @since  1.0.0
     */
    protected $use_template_loader = true;

    /**
     * Init class object.
     *
     * @since  1.0.0
     */
    public function init() {
        new Project\Post\Type();
    }

} 
