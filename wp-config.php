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
 * * MySQL settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'mohan' );

/** MySQL database username */
define( 'DB_USER', 'mohan' );

/** MySQL database password */
define( 'DB_PASSWORD', 'mohan123' );

/** MySQL hostname */
define( 'DB_HOST', 'mohan.cc7yxwd7osbv.us-east-1.rds.amazonaws.com' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

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
define( 'AUTH_KEY',         'b^-6AEF+([pWQOb/#zZ*va6s;tO4eogB@S${I^cw|C [=mx7^J^3B)yi?|?c@.2G' );
define( 'SECURE_AUTH_KEY',  'eG>^yKxRiM:szJ8f>O*EZ[$31EiXm!6)qk#!`M%Wx/&Mq~A`})q=s2`%Nhum1CP}' );
define( 'LOGGED_IN_KEY',    'Mqm}a`<yE4QE&`LmrDm>]1}gJt9I*_Gd2$^%V:Iz<&Lq|>l(0 Q$$SDvqO{64Lh?' );
define( 'NONCE_KEY',        'ZxMFPw|d3laO<n~ri<myl4C=^8d<{J_):ua18=#l@`2]F4pmcQ?Yp&uo|0q_}JG%' );
define( 'AUTH_SALT',        'J`B7?Vb7u>`X,S>xi |W-=La4{cO:brw4/1WS0`09rB[0o9+K$0^(71@(bV-Iij2' );
define( 'SECURE_AUTH_SALT', '!JK:%6| *segkQ$A7*ROhtVVaf`]Rrg7S_3/[GCY]X-Z[`*|oX~lZiEZvCX+o<bI' );
define( 'LOGGED_IN_SALT',   'NAv,zR?GrFahOeW}J(e|pB!8~42M6cL_B~S6{_&Bqjg:$ Gplp2Fs.M(YcMn|)ql' );
define( 'NONCE_SALT',       '-O@`{RbFLW*phz*82wRTfhYr1^6?9N@x@Q4r(J_9/9s86$HlTLF^eCt[^$R!Q`ge' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';

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
define( 'WP_DEBUG', false );

/* Add any custom values between this line and the "stop editing" line. */



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';

