<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the
 * installation. You don't have to use the web site, you can
 * copy this file to "wp-config.php" and fill in the values.
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
define( 'DB_NAME', 'plugin' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'oxRaWIM>s_=]Xb;Tv#mBAn? 994pbMM/Cwqwc:I>$Hq3[3/;&-MS2wN a0r,_=NY' );
define( 'SECURE_AUTH_KEY',  '%TDtXf:1/ob<D/vs%h7<tF7I)vlKm `j%6ictkJ[(T2c{[ WkBv0XX;dp/_zL|9b' );
define( 'LOGGED_IN_KEY',    '}1:#5Cqu&bZy?n92M$Jz5oF@{25o!s|nX vF:T3,^[+^lZzwZwk_[OcAFnOO4y${' );
define( 'NONCE_KEY',        'M7mpfU/tE2EA5A*h6}[T/$1Pq<d]LbKbEfSon->LJ**K`AF,lz4D#ID7%Aj50G/k' );
define( 'AUTH_SALT',        'O+16cXfK8mKh:<( )0!=Cc{tBy_l73nE965$98NT2%%[?!Sm0n<AcD!^%.Vte5X%' );
define( 'SECURE_AUTH_SALT', 'J_! Nr~H93sNUdv-=5ED3S4 Ylb)4sh92Cr;V?zR[Ea6#V%{B5H+)eIkH6,L%,l`' );
define( 'LOGGED_IN_SALT',   '-VMG@[;3U(J.v{]h&(5;uSiSxxWDd/P[v4AG4P%*~ro;[&}k$IF?:AD?^+zZ6)m*' );
define( 'NONCE_SALT',       '?(QxDD[H cS%eKt,jx4q4lXWA`*Zyly}Yf!~SjKG1Ckr)W|/@D)X`,[9!Pw:k2f#' );

/**#@-*/

/**
 * WordPress Database Table prefix.
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

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
