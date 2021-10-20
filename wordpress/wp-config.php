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
define( 'DB_NAME', 'web_db' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

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
define( 'AUTH_KEY',         '[*.696:^R<r]vDeN[l0V) 01R8Xx^E~/[=w>M8>5rs~guT1;)9,-8*4T1JAq5b]k' );
define( 'SECURE_AUTH_KEY',  '[p(o?&VY%XL3N]Z-kVeQe+WUPDEHueY)/G<j2?M%VG1][4TEOpzM`@p@Su$/,wLw' );
define( 'LOGGED_IN_KEY',    '&1.=W6h4!Sd-N->gb1RAg!umUuJ`3;Xv7>:&s3}50#nsakTorjkdUMOAU}{YO&/-' );
define( 'NONCE_KEY',        '?;<uQR1;!O~~U$g-UHFKP;2fnVBl}~46*K_?<Bi#T5<4(ms^?%-obvi+9FP.~X1r' );
define( 'AUTH_SALT',        '2M_y&X.>@N!(NX)d-{4IwcRBB.~f(SG%^yz=R$pS_GqvU.HJsnuXN1SJ{jf>Z^i{' );
define( 'SECURE_AUTH_SALT', '2zq#]CF{pB`iecizY/Lj@+.5_ZHuhi[qx0Ym{eKf.V_Xn(0tn$o YhQo<*p}Z7r(' );
define( 'LOGGED_IN_SALT',   '+}qddf&j,;Xhkn>3lU=sS~0/nsdA@@J&j(Bsfo/F*{C^[[L$00`0)}((3Ayatt6_' );
define( 'NONCE_SALT',       ';DKKGx07eE=*(tisKhE4%+,H#)[&U@Xq9)&W+WdC4$(qnZBS<p](*PU4E;,!Y/*j' );

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
