<?php
/*
 * Plugin Name:       Wp SingleTone Plugin
 * Plugin URI:        https://github.com/azharul-lincoln
 * Description:       Handle the basics with this plugin.
 * Version:           0.1.0
 * Author:            Azharul Lincoln
 * Author URI:        https://github.com/azharul-lincoln
 * License:           GPL v2 or later
 * License URI:       https://www.gnu.org/licenses/gpl-2.0.html
 * Update URI:        https://example.com/my-plugin/
 * Text Domain:       wp-single-tone-plugin
 * Domain Path:       /languages
 */

class WpSingleTonePlugin
{
    /**
     * The unique instance of the plugin.
     * @WpSingleTonePlugin
     */
    private static $instance;

    /**
     * Gets an instance of our plugin.
     *
     * @return WpSingleTonePlugin
     */
    public static function get_instance()
    {
        if (null === self::$instance) {
            self::$instance = new self();
        }

        return self::$instance;
    }

    /**
     * Constructor.
     */
    private function __construct()
    {
        // Actions
        add_action('wp_enqueue_scripts', array($this, 'enqueue_script'));

        // Filters
        add_filter('the_content', array($this, 'the_content'));
    }

    /**
     * Enqueues our kickass scripts and stylesheets.
     */
    public function enqueue_script()
    {
        // ...
    }

    /**
     * Turns our boring post content into kickass post content.
     *
     * @param string $content
     *
     * @return string
     */
    public function the_content($content)
    {
        // ...

        return $content;
    }
}

WpSingleTonePlugin::get_instance();
