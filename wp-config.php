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
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'KopsWebsite' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', '' );

/** Database hostname */
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
define( 'AUTH_KEY',         '&r?1!k5cvH]*F$=|2s#nDSV1j})A_/j>-YM/,DKd# bL3SWq-wQ.mj*#KqJINB 6' );
define( 'SECURE_AUTH_KEY',  'zjaj=vdsqv9E~XIpo1: PFGj`5L~UPuO5(/FS!L(bWIo<Uj|0Fy!<nj<DSO6T0@S' );
define( 'LOGGED_IN_KEY',    'g!tX&(Q+V/S0M?bx-^-0:Jdg,{H,vq;I9MczOAwtiXjPDA[-)`L.jv?G*/BXq@Y`' );
define( 'NONCE_KEY',        'B4NP,n2Uv#;w^w43x+`Dpdmp2D0.y,mo/Kr.EJQxBV{D0*CeYSBt*p6$}L*G1AXG' );
define( 'AUTH_SALT',        '3IwKM+I;DzpPx=XGA{9SuC$sEQq9.<`OCrrNT/wVImt5tJTz1P8nc9.6*VEk<mi ' );
define( 'SECURE_AUTH_SALT', '}TEm,zA9SlmMT!2]?)i=WI`db=%k<%rTTH<pOKG0L5m$P_Mfqff|DtUo#zEs4~8B' );
define( 'LOGGED_IN_SALT',   'DHIef6lYZ+}W)*-lE9%;=,0!XN<rt=iE 2Y$/lMlx)vZ=#rUaU<|qh4,Z*->}NR|' );
define( 'NONCE_SALT',       'umr<m@E5,!]XUnJZ~XOQT~O>YWtxof2LLc[_f[*FO=<eGd2_mm>d|4(c:-+VU)1/' );

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
