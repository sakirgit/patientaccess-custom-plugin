<?php 
/*
*
*	***** PatientAccess Custom Plugin *****
*
*	This file initializes all PCP Core components
*	
*/
// If this file is called directly, abort. //
if ( ! defined( 'WPINC' ) ) {die;} // end if
// Define Our Constants
define('PCP_CORE_INC',dirname( __FILE__ ).'/assets/inc/');
define('PCP_CORE_IMG',plugins_url( 'assets/img/', __FILE__ ));
define('PCP_CORE_CSS',plugins_url( 'assets/css/', __FILE__ ));
define('PCP_CORE_JS',plugins_url( 'assets/js/', __FILE__ ));
/*
*
*  Register CSS
*
*/
function pcp_register_core_css(){
wp_enqueue_style('pcp-core', PCP_CORE_CSS . 'pcp-core.css',null,time(),'all');
};
add_action( 'wp_enqueue_scripts', 'pcp_register_core_css' );    
/*
*
*  Register JS/Jquery Ready
*
*/
function pcp_register_core_js(){
	// Register Core Plugin JS	
	wp_enqueue_script('basic', PCP_CORE_JS . 'pcp-basic.js','jquery',time(),false);
	wp_enqueue_script('google-map-polyfill-script', 'https://polyfill.io/v3/polyfill.min.js?features=default&jjjjjjjjj','jquery',time(),false);
//	wp_enqueue_script('google-map-api-script', 'https://maps.googleapis.com/maps/api/js?key=AIzaSyDmnI7-QHCE5Kw-tq8FmfKaKKDGRZTemOE&callback=initMap&libraries=&v=weekly','jquery',time(),true);
	wp_enqueue_script('pcp-autoaddress', PCP_CORE_JS . 'pcp-autoaddress.js','jquery',time(),true);
//	wp_enqueue_script('google-map-api-script2', 'https://maps.googleapis.com/maps/api/js?key=AIzaSyDmnI7-QHCE5Kw-tq8FmfKaKKDGRZTemOE&callback=initAutocomplete&libraries=places&v=weekly','jquery',time(),true);
	wp_enqueue_script('pcp-core', PCP_CORE_JS . 'pcp-core.js','jquery',time(),true);
};
add_action( 'wp_enqueue_scripts', 'pcp_register_core_js' );    
/*
*
*  Includes
*
*/ 
// Load the Functions
if ( file_exists( PCP_CORE_INC . 'pcp-core-functions.php' ) ) {
	require_once PCP_CORE_INC . 'pcp-core-functions.php';
}     
// Load the ajax Request
if ( file_exists( PCP_CORE_INC . 'pcp-ajax-request.php' ) ) {
	require_once PCP_CORE_INC . 'pcp-ajax-request.php';
} 
// Load the Shortcodes
if ( file_exists( PCP_CORE_INC . 'pcp-shortcodes.php' ) ) {
	require_once PCP_CORE_INC . 'pcp-shortcodes.php';
}
// Load the Shortcodes
if ( file_exists( PCP_CORE_INC . 'pcp-shortcodes-single-provider.php' ) ) {
	require_once PCP_CORE_INC . 'pcp-shortcodes-single-provider.php';
}


// Load the Shortcodes
if ( file_exists( PCP_CORE_INC . 'pcp-sc-provider-search-form.php' ) ) {
	require_once PCP_CORE_INC . 'pcp-sc-provider-search-form.php';
}
