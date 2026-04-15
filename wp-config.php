<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the website, you can copy this file to "wp-config.php"
 * and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * Database settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'wordpress' );

/** Database username */
define( 'DB_USER', 'wordpress' );

/** Database password */
define( 'DB_PASSWORD', '05b35bfbab2d04e17a8612890f7b7ff305d260538a211dae' );

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
define( 'AUTH_KEY',         '9_AEeb~:.]ZlY4e&,P6i37E;-L*r bGe!a,PfM`LuUo}tC7l2l9x,Fga-X==1]9(' );
define( 'SECURE_AUTH_KEY',  'nK|WG|~g^{<aZBGe=9b>H*Z/a@zQ}iehS<!)`MtvOMxMSVCqOI(k725`J{t,Q(,h' );
define( 'LOGGED_IN_KEY',    'O_v~y4]nyq|VFl6;^ ~=_nSY/yHkw(BAndu<tq5L?Mo31<1#Vf&^5aRU a(#}V n' );
define( 'NONCE_KEY',        'YMIAO,7rjoM~i;k*7zf*UBLjhjxC+:%Ll#12>TwT,Z$U_,Y>>!ld&-`J9v7,kt%T' );
define( 'AUTH_SALT',        'Xx^eYl7@;s=w<Za;QGGT$uAvPq8_c5B4&V6OxeR(h7ehP:s#u$@)Ljq_H%7</J7L' );
define( 'SECURE_AUTH_SALT', ',^cW@E2(DT%,`)VlJrf_p%aL5ve[V-q4Na)U*rlh$-2,8hV<o~OMA8IiG`kr[Cat' );
define( 'LOGGED_IN_SALT',   'k4 7Xl#%a6MKTQs3JZx;U{~g)#r%;23eh5:8P;=FPT;o!x?:3} Ta-kvP?E&hsyz' );
define( 'NONCE_SALT',       '8$=?)8h|_Q$IKHZ.b[h-_P7t15lLTpJvbpV:e_@Xlti:s(&F;3LIgoTZ9ByB4d>L' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 *
 * At the installation time, database tables are created with the specified prefix.
 * Changing this value after WordPress is installed will make your site think
 * it has not been installed.
 *
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/#table-prefix
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
 * @link https://developer.wordpress.org/advanced-administration/debug/debug-wordpress/
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
if ($_SERVER['HTTP_X_FORWARDED_PROTO'] == 'https') {
 $_SERVER['HTTPS'] = 'on';
}
if ( !isset( $_SERVER['HTTPS'] ) ) {
 $_SERVER['HTTPS'] = 'on';
}
