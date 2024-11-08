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
define( 'DB_NAME', 'u717068494_SFbMs' );

/** Database username */
define( 'DB_USER', 'u717068494_2fdgf' );

/** Database password */
define( 'DB_PASSWORD', 'oPG5rL6jhY' );

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
define( 'AUTH_KEY',          '`#7s:fFz5A2+>YE7V?pXW|xt@8TYVk6=aAR(C#F,5cv(hRh`1G#wlPsFm9HzSn$T' );
define( 'SECURE_AUTH_KEY',   ' |S%0$c!j+(6?{z_Qm$s=;wT_WrsFn,&Y:.}0JuG2t7X7^N~v?+#EF2dlf{)LhB>' );
define( 'LOGGED_IN_KEY',     'RX%YPFS~cN.ycidA+#2/~em:C+-wW&?ltA+.=mYHx*k$_W{HFlqmjdF,6bxWZ^MY' );
define( 'NONCE_KEY',         'rBT>+Dffm(E=_#NnlcslFQU5?T*4F6;^BNHkr})BJ_0~7t@>j*[G.<#{LC=SLbV#' );
define( 'AUTH_SALT',         'm,v=i-yEkhTy 4TE<}XHr]4rF,_WY3|$[8g&J<{0HWe[(:j7T$Oc:a%ir+ql9_=)' );
define( 'SECURE_AUTH_SALT',  'tehR>B_[cTQeypr*udn=:(Qg6^EJ*aD^8g<3ssDaf;8<< zXx^@+Q-e,NcNwiRx6' );
define( 'LOGGED_IN_SALT',    'J!EEy.s`BG^*YZRnH*/pIm#PHIIz&7B)#{1+5aBASTH~G4is*Nq5o{&OY-V$(rQK' );
define( 'NONCE_SALT',        'L=cI)HIC|;U#_xhrn KR(j]:}!bVZ=Z)@3,{xi!}*{J)n7E8yAD^Z=q{S~<N,B2 ' );
define( 'WP_CACHE_KEY_SALT', '{5 )X3lQWrgbAeOcrq Ot^]SR 5Sw^W^s>FqU^[)2E%4iJ?K]x5&JSf2n9JS^@A#' );


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
define( 'COOKIEHASH', '98f1d4e869804a6f831fc1c0ab21b71b' );
define( 'WP_AUTO_UPDATE_CORE', 'minor' );
/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
