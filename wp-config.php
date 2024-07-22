<?php
define( 'WP_CACHE', true );

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
define( 'DB_NAME', 'u773799086_1LuG9' );

/** Database username */
define( 'DB_USER', 'u773799086_cM8wy' );

/** Database password */
define( 'DB_PASSWORD', 'Qqv3Y2qdQO' );

/** Database hostname */
define( 'DB_HOST', '127.0.0.1' );

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
define( 'AUTH_KEY',          '=d=e(9(FmNp`>=r5W6/s8{QVk#3#60-iY5dEexIhvd,Q(AilAnZ#e!cG=x-@dN9|' );
define( 'SECURE_AUTH_KEY',   ';>d-C.jQf#?jbgl$n}KZQ?p&ouV0,Q f#gmc4ZMD3Y_u%+yvy#k4-=t{qL)GQz U' );
define( 'LOGGED_IN_KEY',     'VKN#6sQ|6=4w)F3E?<HgB1Wo5V>lqPc5sad{)@H(-9p(X6#b^Z6EgWike:5wMs2a' );
define( 'NONCE_KEY',         '$EQV8VpFao{=SfI0aomV2G^utjb(//Yc{~8?]Yzpq].KAwO[t@lgw4&y`aP?hd<f' );
define( 'AUTH_SALT',         ')%R]7a^E3;1}H!:0Mw:43p;-ij[J3t,5x%UKi[8t}gL2bVoV=TYaY2+Q<TSHWS0[' );
define( 'SECURE_AUTH_SALT',  'P_!8.QI}D[Pvl>e}O:;XBIQkD/GLFn?)tq:*JX46,XSE40e`8K/$NN>])OG!t4NG' );
define( 'LOGGED_IN_SALT',    'swq>IOXmj+0,}Gq=UN+jik&kTOE4>!8wcdIAa^jx?aLw=/tN;Pp/,^x7, xX`k=Y' );
define( 'NONCE_SALT',        '*SUJ,jmo)>CNthy:Dg!~vFXQ)vZ?ro+f-`t;DfEO&XjG&Q6;3oL.wQRNl^5UcJE@' );
define( 'WP_CACHE_KEY_SALT', 'u,<c6Y4((>@5,W$ONkUgc|U6Z$o3*dW4B{+ q@ywD;{L!_2Qs9x6Wbq4gU|v2n* ' );


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

define( 'FS_METHOD', 'direct' );
define( 'WP_AUTO_UPDATE_CORE', false );
/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
