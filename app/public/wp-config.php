<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the web site, you can copy this file to "wp-config.php"
 * and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * Database settings
 * * Secret keys
 * * Database table prefix
 * * Localized language
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'local' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', 'root' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

/** The database collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**#@+
 * Authentication unique keys and salts.
 *
 * Change these to different unique phrases! You can generate these using
 * the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}.
 *
 * You can change these at any point in time to invalidate all existing cookies.
 * This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',          'l0v2_@l;-{Ss5K2YzD _liM>gr4U&`46-O]|iMH62IpB1HPR?b.S3XC45jSu0WY4' );
define( 'SECURE_AUTH_KEY',   '&WGiuh>QmD`_RB<L|1F2Fy!z6GT)$iQA>4<RRJ r&o p3NKTw1u#@o^NKr8gvWcz' );
define( 'LOGGED_IN_KEY',     '4K8)UT3v}rmh/Up6t:!6&|a xC5Q-FP[%t,O#aJo{{UqTb>{Up+ld%G]U*c{nV7s' );
define( 'NONCE_KEY',         '[=E<%IfV.CUl>7Zfkpm/c_#jIfO)0izsOG!6BgXC4.h=J6E5o?5RvpT*%iH#(6.N' );
define( 'AUTH_SALT',         '<jYtKH;)xe7]TrMcHnq}1ih1P&]l:$4<=t@s4U^uOxjJO<Bk7cK_/VB&wKfYlIMg' );
define( 'SECURE_AUTH_SALT',  '9(P]2vW{x2dSf$@WfN5Otp{[()(G@`%pV#=ZlGXWb4HW60gCLow0*bIfs}a Sys0' );
define( 'LOGGED_IN_SALT',    '4_p&&y}mVv=.[%!EiG;3.3-aG3{>1r=iY[<k~.3B _Q`.L7~k(xBm5GY44_W*X:9' );
define( 'NONCE_SALT',        '&W$@1O&kg{^}[ GH+3,P%`IdF!voLEn@A1%5jmkN(VZ,[W@9J$VlpuC1Z;@!p358' );
define( 'WP_CACHE_KEY_SALT', 'I{_HQs.*.3+^M+z$oN7~4zqnIr39OU9F<Qt10nL>G9oVOyZ$!tG_N&f?EN|7)cdJ' );


/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';


/* Add any custom values between this line and the "stop editing" line. */



/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 *
 * For information on other constants that can be used for debugging,
 * visit the documentation.
 *
 * @link https://wordpress.org/support/article/debugging-in-wordpress/
 */
if ( ! defined( 'WP_DEBUG' ) ) {
	define( 'WP_DEBUG', false );
}

define( 'WP_ENVIRONMENT_TYPE', 'local' );
/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
