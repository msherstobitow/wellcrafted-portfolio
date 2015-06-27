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
     * Define a folder name to store plugin data in theme.
     *
     * The resulting folder is 'THEME_FOLDER/wellcrafted/$templates_folder/'
     * @var null
     * @since  1.0.0
     */
    protected $plugin_theme_folder = 'portfolio';

    /**
     * Init class object.
     *
     * @since  1.0.0
     */
    public function init() {
        new Project\Post\Type();
        new Project\Category\Taxonomy();
        new Project\Tag\Taxonomy();
    }

    /**
     * @todo PHPDoc
     * @param [type] $rules [description]
     */
    public function template_loader_rules() {
        return [
            [
                'condition' => [
                    'single' => \Wellcrafted\Core\Post\Type::get_filtered_post_type_name( 'wc_portfolioproject' )

                ],
                'template' => 'single-project'
            ],
            [
                'condition' => [
                    'archive' => \Wellcrafted\Core\Post\Type::get_filtered_post_type_name( 'wc_portfolioproject' )
                ],
                'template' => 'project-archive'
            ]
        ];
    }

    /**
     * Return plugin's textdomain
     * @return string textdomain
     * @since  1.0.0
     */
    protected function textdomain() {
        return WELLCRAFTED_PORTFOLIO;
    }

} 
