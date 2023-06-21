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
 * @link https://wordpress.org/documentation/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'eCommerce' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', '' );

/** Database hostname */
define( 'DB_HOST', 'localhost:3307' );

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
define( 'AUTH_KEY',         'v!vsOt^WPM8!jY_AvL>Y]S5@uX?L)dIrwm[c54EoA^n;rN>]%F-K+<4*%_Bv7Co3' );
define( 'SECURE_AUTH_KEY',  ':MGI,Ys+/WJ-e6^(?,92?V)kp|8mBPs-H 9*xqis{@I <S6|W8~QUqgI=w#;#&4;' );
define( 'LOGGED_IN_KEY',    '.k|k}[DvFc3=<iss^K/CA6-VBL+=Q 6?n?(K(EznyrLb@`eyv&74i/~6Ci2W;S7Q' );
define( 'NONCE_KEY',        ' DgEf8Y SA00@OH[.na_8K5@oio#[&F29Am5*@&IVy4-qQJD_=lexs%qgB>z~7.a' );
define( 'AUTH_SALT',        'A|0K{=ut:nA<.c(Lkx:_P3pb9Km3P4flZe-n$4K}&/`libeQ#!`FtG0G9[ CM+^Y' );
define( 'SECURE_AUTH_SALT', 'lN-5)O}i0z+1h,%E=_>6,*]1*s)+wKuon^Txn3[J<<bakcc,Is&/f;SUr0qV(=Ze' );
define( 'LOGGED_IN_SALT',   'aFE2L-J5LuWt]d+wteV+OWX/js`!1LTLo^563MPGI|pa{pnt03}EziG3^YL6*o3n' );
define( 'NONCE_SALT',       'z>)z^I`:9ALP(Iu1Nk!>MHkW.TodwuMWWVu_Apgs*zgx+`ReH8bc|+afyN$a.@fx' );

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
 * @link https://wordpress.org/documentation/article/debugging-in-wordpress/
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
