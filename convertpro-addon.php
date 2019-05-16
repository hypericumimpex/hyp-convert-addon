<?php
/**
 * Plugin Name: HYP Convert - Addon
 * Plugin URI: https://github.com/hypericumimpex/hypconvert-addon/
 * Description: HYP Convert Integrari cu servicii diverse de mailling. 
 * Version: 1.2.0
 * Author: Romeo C.
 * Author URI: https://github.com/hypericumimpex/
 * Text Domain: convertpro-addon
 *
 * @package convertpro-addon
 */

if ( ! function_exists( 'cp_load_pro_addon' ) ) {

	/**
	 * Loader function
	 */
	function cp_load_pro_addon() {
		require_once 'classes/class-cp-addon-loader.php';
	}
}

add_action( 'plugins_loaded', 'cp_load_pro_addon', 99 );

require_once 'includes/cp-addon-cronjobs.php';

register_activation_hook( __FILE__, 'cpro_addon_activate' );
register_deactivation_hook( __FILE__, 'cpro_addon_deactivate' );