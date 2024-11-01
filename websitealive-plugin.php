<?php  
/* 
Plugin Name: AliveChat
Plugin URI: http://www.websitealive.com/ 
Version: 1.4
Author: AYU Technology Solutions LLC
Description: WebsiteAlive is the easy-to-use Live Chat/Click-To-Call solution for your Wordpress website. Visitors can immediately chat or initiate a click-to-call session with someone at your company who can answer their questions, in real-time. This Wordpress plug-in instantly updates your Wordpress site with WebsiteAlive Tracking Code which tracks visitors in real-time and also displays a call-to-action icon.
*/  

register_activation_hook(__FILE__,'gmp_install');

function gmp_install() {
	//function to execute when the plugin is activated
	// duda que pongo en __FILE__ si supuestamente el archivo principal es este?
	global $wp_version;
	if (version_compare($wp_version, "2.9", "<")){
		deactivate_plugins(basename(__FILE__));
		wp_die("This plugin requires Wordpress version 2.9 or higher");
	}
}

if ( !class_exists( 'WebsiteAlive' ) ) {
	
	define('WSAURL',    plugins_url('', __FILE__));

	if(strpos(WSAURL, 'wp-admin')){
		wp_register_style('WSAStyleSheet', WSAURL . '/css/wsa.css');
    		wp_enqueue_style( 'WSAStyleSheet');
	}

	class WSA {

		function WSA() {

			add_action( 'init', array( &$this, 'init' ) );
			add_action( 'admin_init', array( &$this, 'admin_init' ) );
			add_action( 'admin_menu', array( &$this, 'admin_menu' ) );
			add_action( 'wp_footer', array( &$this, 'wp_footer' ) );

		}

		function init() {
			load_plugin_textdomain( 'websitealive', false, dirname( plugin_basename ( __FILE__ ) ).'/lang' );
		}

		function admin_init() {
			register_setting( 'websitealive', 'wsa_username', 'trim' );
			register_setting( 'websitealive', 'wsa_groupid', 'trim' );
			register_setting( 'websitealive', 'wsa_objectref', 'trim' );
			register_setting( 'websitealive', 'wsa_websiteid', 'trim' );
		}

		function admin_menu() {
			add_menu_page('WebsiteAlive', 'WebsiteAlive','administrator',__FILE__,
				array( &$this, 'options_panel' ), WSAURL . '/img/aliveguy-16x16.png');
		}
		
		function wp_footer() {
			if ( !is_admin() && !is_feed() && !is_robots() && !is_trackback() ) {
				$text = '<!-- Start WebsiteAlive AliveTracker v3.0 Code -->
				<script type="text/javascript">
				function wsa_include_js(){
					var wsa_host = (("https:" == document.location.protocol) ? "https://" : "http://");
					var js = document.createElement("script");
					js.setAttribute("language", "javascript");
					js.setAttribute("type", "text/javascript");
					js.setAttribute("src",wsa_host + "tracking-v3.websitealive.com/3.0/?objectref='.get_option( 'wsa_objectref', '' ).'&groupid='.get_option( 'wsa_groupid', '' ).'&websiteid='.get_option( 'wsa_websiteid', '' ).'");
					document.getElementsByTagName("head").item(0).appendChild(js);
				}
				if (window.attachEvent) {window.attachEvent("onload", wsa_include_js);}
				else if (window.addEventListener) {window.addEventListener("load", wsa_include_js, false);}
				else {document.addEventListener("load", wsa_include_js, false);}
				</script>
				<!-- End WebsiteAlive AliveTracker v3.0 Code -->';

				$text = convert_smilies( $text );
				$text = do_shortcode( $text );

				if ( $text != '' ) {
					echo $text, "\n";
				}
			}
		}
function options_panel() {
?>
<script src="//ajax.googleapis.com/ajax/libs/jquery/2.0.0/jquery.min.js"></script>
<script src="../wp-content/plugins/websitealive/js/websitealive-plugin.js"></script>

<?php include 'html/user_settings.php'; ?>
<?php include 'html/header.php'; ?>
<?php include 'html/register.php'; ?>
<?php include 'html/login.php'; ?>
<?php include 'html/config.php'; ?>

<?php 

if (get_option( 'wsa_username') == "") {
	echo '<script>$("#div_wp_login").show()</script>';
} else {
	echo '<script>$("#div_wp_config").show();populateWebsiteid();</script>';
};
?>
<?php
	}
}


$wp_insert_headers_and_footers = new WSA();

}
?>