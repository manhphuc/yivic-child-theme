<?php
// Define YIVIC Child Theme Dir
defined( 'YIVIC_CHILD_THEME_DIR' ) || define( 'YIVIC_CHILD_THEME_DIR', get_stylesheet_directory() );

use ManhPhuc\Wp\ManhPhucBase\Base\WebApp as WebApp;

session_start();
$_SESSION['once_key'] = ! isset( $_SESSION['once_key'] ) || ! $_SESSION['once_key'] ? wp_create_nonce( rand( 1, 1000 ) ) : $_SESSION['once_key'];

defined( 'DS' ) || define( 'DS', DIRECTORY_SEPARATOR );

defined( 'ACF_LITE' ) || define( 'ACF_LITE', false );

require_once __DIR__ . "/vendor/autoload.php";

// Get config from child theme if exists, otherwise get config of parent theme
$config_child = YIVIC_CHILD_THEME_DIR . DS . 'config.php';
$config       = file_exists( $config_child ) ? require_once( $config_child ) : require_once( __DIR__ . DS . 'config.php' );

WebApp::initialize($config);

/* @var ManhPhucPro\WpTheme $wp_theme */
$wp_theme = WebApp::instance()->wp_theme;
$wp_theme->initialize();
