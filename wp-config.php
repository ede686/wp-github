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
define( 'DB_NAME', 'githup' );

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
define( 'AUTH_KEY',         'hi)9k=`PYf4 7:.c3d_y+!s5B~h~12i=@nkL}/P>(]#`Zp/l_b`KVjI]dT&M?Sx%' );
define( 'SECURE_AUTH_KEY',  '8}Jm_n1cw;kn QE<HcjE@ATwT>)*l<$i=0)nV+w9< +TjU4>e%hG%b,-mdy;NzKQ' );
define( 'LOGGED_IN_KEY',    'tV2,H)RNbO6dBaJ@Ae9D/C`UJqMOO-$l<3r)uriK!+&xOR9FY2>%Q<8.]NEoNQad' );
define( 'NONCE_KEY',        'f7b>n3OJK;/G..T)Ki*Cj*8|(^S)Z-1U8*_pdsmu/Z!n|M2ceA!$HX+ZBQm$+MYZ' );
define( 'AUTH_SALT',        'xMhHZUMkrHtx;91>=.[p6Rv4ub2Nn]R]WHp|j|cXQW<:*G1ZH>uWUq_d^+ano!z_' );
define( 'SECURE_AUTH_SALT', '{BsBuq$.Yy@IgD 5hN|2gKH=F:/bx%xAv}R{Rmz=0auB|}glFGnIZ%cOSa)<V6<6' );
define( 'LOGGED_IN_SALT',   'eraqm>HD-LX{m:l6~lu=i9y1<rH8)Nq=)BvqNqGSo%QcyQf)^I_DIEpx9L0A8~M{' );
define( 'NONCE_SALT',       '`&$sd/qVJ1pDC(@16e]D%d(c>=qbRMV8GvRbD4kYuuQ(VI5sDpkX1%!OIFy.v;k/' );

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
