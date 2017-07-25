<?php

/**
 * The admin-specific functionality of the plugin.
 *
 * @link       https://justinfrydman.com
 * @since      1.0.0
 *
 * @package    Wp_Bullet_System_Info
 * @subpackage Wp_Bullet_System_Info/admin
 */

/**
 * The admin-specific functionality of the plugin.
 *
 * Defines the plugin name, version, and two examples hooks for how to
 * enqueue the admin-specific stylesheet and JavaScript.
 *
 * @package    Wp_Bullet_System_Info
 * @subpackage Wp_Bullet_System_Info/admin
 * @author     Justin Frydman <justin.frydman@gmail.com>
 */
class Wp_Bullet_System_Info_Admin {

	/**
	 * The ID of this plugin.
	 *
	 * @since    1.0.0
	 * @access   private
	 * @var      string    $plugin_name    The ID of this plugin.
	 */
	private $plugin_name;

	/**
	 * The version of this plugin.
	 *
	 * @since    1.0.0
	 * @access   private
	 * @var      string    $version    The current version of this plugin.
	 */
	private $version;

	/**
	 * Initialize the class and set its properties.
	 *
	 * @since    1.0.0
	 * @param      string    $plugin_name       The name of this plugin.
	 * @param      string    $version    The version of this plugin.
	 */
	public function __construct( $plugin_name, $version ) {

		$this->plugin_name = $plugin_name;
		$this->version = $version;

	}

	/**
	 * Register the stylesheets for the admin area.
	 *
	 * @since    1.0.0
	 */
	public function enqueue_styles() {

		/**
		 * This function is provided for demonstration purposes only.
		 *
		 * An instance of this class should be passed to the run() function
		 * defined in Wp_Bullet_System_Info_Loader as all of the hooks are defined
		 * in that particular class.
		 *
		 * The Wp_Bullet_System_Info_Loader will then create the relationship
		 * between the defined hooks and the functions defined in this
		 * class.
		 */

		wp_enqueue_style( $this->plugin_name, plugin_dir_url( __FILE__ ) . 'css/wp-bullet-system-info-admin.css', array(), $this->version, 'all' );

	}

	/**
	 * Register the JavaScript for the admin area.
	 *
	 * @since    1.0.0
	 */
	public function enqueue_scripts() {

		/**
		 * This function is provided for demonstration purposes only.
		 *
		 * An instance of this class should be passed to the run() function
		 * defined in Wp_Bullet_System_Info_Loader as all of the hooks are defined
		 * in that particular class.
		 *
		 * The Wp_Bullet_System_Info_Loader will then create the relationship
		 * between the defined hooks and the functions defined in this
		 * class.
		 */

		wp_enqueue_script( $this->plugin_name, plugin_dir_url( __FILE__ ) . 'js/wp-bullet-system-info-admin.js', array( 'jquery' ), $this->version, false );

	}

    /**
     * Add an options menu to the Wordpress dashboard
     *
     * @since 1.0.0
     */
	public function add_menu() {
        add_management_page(
            apply_filters( $this->plugin_name . '-settings-page-title', __( 'WP Bullet System Info', 'wp-bullet-system-info' ) ),
            apply_filters( $this->plugin_name . '-settings-menu-title', __( 'WP Bullet System Info', 'wp-bullet-system-info' ) ),
            'manage_options',
            $this->plugin_name,
            array( $this, 'options_page' )
        );
    }


    /**
     * Dashboard page markup
     *
     * @since 1.0.0
     */
    public function options_page() {

        // Check access
        if( ! current_user_can('manage_options') ) {
            wp_die( __( 'You do not have sufficient privileges to access this page. ', 'wp-bullet-system-info' ) );
        }

        ?>
        <div class="wrap wpb-container">
            <h2><?php echo esc_html( get_admin_page_title() ); ?></h2>
            <div class="notice wpb-notice">
                <div id="wp-system-info">
                    <p><?php _e('Please copy and paste this information to your workroom:', 'wp-bullet-system-info' ) ?></p>
                    <p class="submit"><a href="#" class="button-primary system-info"><?php _e( 'Get system report', 'wp-bullet-system-info' ); ?></a></p>
                    <div class="wpb-loading-container">
                        <div class="wpb-loader"></div>
                        <div class="wpb-status"></div>
                    </div>
                    <textarea readonly="readonly"></textarea>
                </div>
            </div>
            <p><?php _e('Get premium WordPress optimization at <a href="https://wp-bullet.com" target="_blank">wp-bullet.com</a>') ?></p>
        </div>
        <?php

    }

}
