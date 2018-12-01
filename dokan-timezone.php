<?php
/**
 * Plugin Name: Dokan TimeZone
 * Plugin URI: https://wpdoctor.press/
 * Description: A simple time zone plugin
 * Version: 1.0.0
 * Author: WP Doctor
 * Author URI: https://wpdoctor.press/
 * Text Domain: dtz
 * Domain Path: /languages/
 *
 * @package Dokan TimeZone
 */

defined( 'ABSPATH' ) || exit;

/**
 * Dokan TimeZone Class
 */
class Dokan_TimeZone {
    /**
     * Hold the instance
     *
     * @var object
     */
    private static $instance;

    /**
     * Constructor Method
     */
    public function __construct() {
        $this->define_constants();
        $this->includes();
        $this->init_classes();
    }

    /**
     * Define constants
     *
     * @return void
     */
    public function define_constants() {
        define( 'DTZINC', __DIR__ . '/includes' );
    }

    /**
     * Includes all the files
     *
     * @return void
     */
    public function includes() {
        require_once DTZINC . '/class-settings.php';
        require_once DTZINC . '/class-helper.php';
        require_once DTZINC . '/class-public.php';
    }

    /**
     * Initialize all the classes
     *
     * @return void
     */
    public function init_classes() {
        new Dokan_TimeZone_Settings;
        new Dokan_TimeZone_Public;
    }

    /**
     * Get class instance
     *
     * @return void
     */
    public static function init() {
        if ( self::$instance == null ) {
            self::$instance = new Static;
        }

        return self::$instance;
    }
}

Dokan_TimeZone::init();



