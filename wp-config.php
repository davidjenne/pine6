<?php
// ===================================================
// Load database info and local development parameters
// ===================================================
if ( file_exists( dirname( __FILE__ ) . '/local-config.php' ) ) {
	define( 'WP_LOCAL_DEV', true );
	include( dirname( __FILE__ ) . '/local-config.php' );
} else {
	define( 'WP_LOCAL_DEV', false );
	define( 'DB_NAME', 'pinehillbeta' );
	define( 'DB_USER', 'dsj' );
	define( 'DB_PASSWORD', 'droopy!muffiN' );
	define( 'DB_HOST', 'mysql.pinehill.davidjenne.com' ); // Probably 'localhost'
}

// ========================
// Custom Content Directory
// ========================
define( 'WP_CONTENT_DIR', dirname( __FILE__ ) . '/content' );
define( 'WP_CONTENT_URL', 'http://' . $_SERVER['HTTP_HOST'] . '/content' );

// ================================================
// You almost certainly do not want to change these
// ================================================
define( 'DB_CHARSET', 'utf8' );
define( 'DB_COLLATE', '' );

// ==============================================================
// Salts, for security
// Grab these from: https://api.wordpress.org/secret-key/1.1/salt
// ==============================================================
define('AUTH_KEY',         '.!i!~t`l9MwdBU(!HRf5+ M7Yhu9o^l_ZaX90n`%RaN&P_blT8Wic[ kKQLG_v%M');
define('SECURE_AUTH_KEY',  '0loz?wqCq9F#e-<]/vV-]nB@=:& Kbnm]DP(&Hn-DI6L(Mi$I7`*&y*Q|fHWWH?_');
define('LOGGED_IN_KEY',    '4iz2|=$i6QWnr2EV+76iF~.y<>-W:WDz4OqMDOQ7LM,Rz)Y45i`A`VGLt@fDMp2c');
define('NONCE_KEY',        '*K_Ez i3k@?8dqn*0GJ&3SLo/E?kMN0A*LN.%S$@^]*X)c8,.Sl[JT/2yEbNSgVX');
define('AUTH_SALT',        'Z8>7p6wBKdLx.m %W!qwsH%r|CU-EAnqamdp+|1|U xLk]$IL`g8|-lWW_ukKZPh');
define('SECURE_AUTH_SALT', 'g:$`D(vnlD.w-m8v--FZz@p;|*7r/C2$3!]$J>*[U0:#+W44`s|x@T(bT-Zo}0<H');
define('LOGGED_IN_SALT',   'N27rB.^)VK|zen-kpf>-8M.B8.U2;Js4,*4V%2S!g49<,jw@Na^WvuP4Iti/Z%|&');
define('NONCE_SALT',       'E(420uHY2sjY/f|/-I/nDi([zr>sN%fvu+m/0y~Tk`Px`6=*(-qka)m*OE)H5U+S');

// ==============================================================
// Table prefix
// Change this if you have multiple installs in the same database
// ==============================================================
$table_prefix  = 'p6_';

// ================================
// Language
// Leave blank for American English
// ================================
define( 'WPLANG', '' );

// ===========
// Hide errors
// ===========
ini_set( 'display_errors', 0 );
define( 'WP_DEBUG_DISPLAY', false );

// =================================================================
// Debug mode
// Debugging? Enable these. Can also enable them in local-config.php
// =================================================================
// define( 'SAVEQUERIES', true );
// define( 'WP_DEBUG', true );

// ======================================
// Load a Memcached config if we have one
// ======================================
if ( file_exists( dirname( __FILE__ ) . '/memcached.php' ) )
	$memcached_servers = include( dirname( __FILE__ ) . '/memcached.php' );

// ===========================================================================================
// This can be used to programatically set the stage when deploying (e.g. production, staging)
// ===========================================================================================
define( 'WP_STAGE', '%%WP_STAGE%%' );
define( 'STAGING_DOMAIN', '%%WP_STAGING_DOMAIN%%' ); // Does magic in WP Stack to handle staging domain rewriting

// ===================
// Bootstrap WordPress
// ===================
if ( !defined( 'ABSPATH' ) )
	define( 'ABSPATH', dirname( __FILE__ ) . '/wp/' );
require_once( ABSPATH . 'wp-settings.php' );
