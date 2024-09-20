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
define( 'DB_NAME', 'dbq5kogmkawgmf' );

/** Database username */
define( 'DB_USER', 'u2nfeips0b3u1' );

/** Database password */
define( 'DB_PASSWORD', 'ux2ewvoggojx' );

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
define( 'AUTH_KEY',          'b/{?)PR$kS.i_4bXfxHZ`nWvxdQ^>RRrl$9#12cx3~|}e-aDu_IdM7TYW,N/kug~' );
define( 'SECURE_AUTH_KEY',   'uN112 wk}~)A#jLO)gl@7P)1 <y].mh2fxR$WTx6EwkpFOC|B5_(hWm2<#8iId(0' );
define( 'LOGGED_IN_KEY',     'IJ&Ko^j$j;[WR(;j uv&LsD0o9DZF[?]8I@.uCY$.HCW)!vfOq9.;]:uc-pn`Hg9' );
define( 'NONCE_KEY',         'NfQB=SLPXc&>t!9,?-d{:9VamCeEoniKva@@w-_*;w.a1>P2RM37BvP0#U`{AMwH' );
define( 'AUTH_SALT',         '<bwNDyV}6UIDu<GfM6he)()2D2#lzNb+ZfAbZOETpuQHwptly/k8`RnY=>ke@QVp' );
define( 'SECURE_AUTH_SALT',  'KB+LYET0%V6xWQkM7el=4~`EQcS*Y|^M2:N&)9Zd8@va_;Nl@([#(>]W8.2d&8(U' );
define( 'LOGGED_IN_SALT',    '$tCrhgP_*Yju_)}%<dNuc9Sg47 $D*=$z?N4(R4| piSzn![~|?cf;}HL(FJ|&:&' );
define( 'NONCE_SALT',        '_Z:Pn?Ptg$X[RZqCE9{b`<TsoyTjNV1DF,ky(cu$8%.cfl6N&6la31rS0Ib&x9x,' );
define( 'WP_CACHE_KEY_SALT', '{D32Y%h27h{LaIQFx1^)gO0u-:}|eb|KmDlT1A:X-d&=B^F{^;TI3{L{li$A@ch&' );


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

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
@include_once('/var/lib/sec/wp-settings-pre.php'); // Added by SiteGround WordPress management system
require_once ABSPATH . 'wp-settings.php';
@include_once('/var/lib/sec/wp-settings.php'); // Added by SiteGround WordPress management system
