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
define( 'DB_NAME', 'Shopping' );

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
define( 'AUTH_KEY',         '~l?69ZEQBvNG 9Ai5k_DGS|tct}On/KVHc2<Cm FO8N+?Da>7IebGtVp3%M<usHf' );
define( 'SECURE_AUTH_KEY',  'DKg9uL:P]QbJ1GdTip}<~vUE2]~Xr64~AbFV65%^),FgJ6seCr2G<eP33lu.s>gV' );
define( 'LOGGED_IN_KEY',    '+L6(S^hS5v=&ybZqY9hZFU&B=P^S#<u. 3z*}6.4[@K<n6|+X T`JpK }@WcLV+P' );
define( 'NONCE_KEY',        ',TgA[w,(N%m(JH2^LvWlJg*38|?b[6F%>swI.RUq=;OWy:tuJuNQ)zgkZ[ja!G2B' );
define( 'AUTH_SALT',        'dX/:F!t~YYm#r6xjnIW;L0K]|6amwaeAGV4L:(!l>SAHfdZDWMtI#-!{Lr}zuVQT' );
define( 'SECURE_AUTH_SALT', 'Dl*ZQ5nf#!|yS6ChI?}oCuajS%6,f4IB07v:L/76~Z~RO?vhe,ZP^idVU R-RnbT' );
define( 'LOGGED_IN_SALT',   'T^:S&0j Tdvo=KhS~RJ?Fl@2/|}rt.Qy71.#5CP5ruL05#?_[}$cYRqcTs1W{^B`' );
define( 'NONCE_SALT',       'ONMWg)vA!Wk-w#U17gP6oV1vn=?~~jLOtt:RUn2[!%oRP0tVL<R^2x1{,^NQe)>:' );

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
