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
define( 'DB_NAME', 'marvel' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', 'root' );

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
define( 'AUTH_KEY',         'X!x,4J8BmQUo-wwM xqcPL&td7avUhx8(kg?d`[M%~q9T8r,dHv_ GgpqGQNfRY(' );
define( 'SECURE_AUTH_KEY',  'UHWc0AvQ:5X{riIsq4sq<`QP%[d%;w<ws< C(0{sDQ@OP_L)!p`v&3VZoC,QF{xd' );
define( 'LOGGED_IN_KEY',    'V0IH(eRNo$TWl1#eT>7kQE2zm/FD/IC9,a35Y@e,l38v`<D`~)!,Z4b&e7F|2i9j' );
define( 'NONCE_KEY',        '&=^rpdr9t02-9CKFrDl?(o><zD+ylg_au_%Q-LH0&Q0J)80mX%~#L~d]K#i@8;m{' );
define( 'AUTH_SALT',        '2- &uFqMU{@}0:s3s}j(Wq?X*Y[6eE>cfDt0&F:;H+XGMZWG$yt4i*,7Hl(y(>Q;' );
define( 'SECURE_AUTH_SALT', '7alF aJky03c1&Lr1<S-Ozw_kQ4g,>(O[H6;3ik.<~GH6ROg!i..tSO +F_66n&f' );
define( 'LOGGED_IN_SALT',   ']n,I*?6[03BRz.S&g%3-rfcM,$k?CxM@+Ih:*Qnhrri%_^&;}m|!>zpISuj-cilr' );
define( 'NONCE_SALT',       '1eqwz1iN?K:K]6FdZ]yiyXJkfd3RXK`t;ndl.<t&,:BN8O,OG@*U]jK:QiOQJvrF' );

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
