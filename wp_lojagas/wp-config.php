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
define( 'DB_NAME', 'lojagasdb' );

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
define( 'AUTH_KEY',         'HqWq~HB8a8E^vI_8ln|km7F^Zc&V;#I/E.|HScW6NvOMC1hJX%*l,xir@z4 ~WtU' );
define( 'SECURE_AUTH_KEY',  '|I>v_f-_HgBIW}*m5/] n5exDm);kMkS,ix_YWyUqQS~^Lc#6H> k/-,?rOR(Y-0' );
define( 'LOGGED_IN_KEY',    'BCaYBuiyh3`Li4Kj McB9jt6^d;VN?E&S>E^/S3t< ||tWOb=Eb)2-&C#Y~d$ xy' );
define( 'NONCE_KEY',        'C5l<t*aGqiW}eq@Oy:+ZsDMoSh$!ls&+[j#<k9(F2v$xlNwgXq<&`soM:fG.7BT)' );
define( 'AUTH_SALT',        '?4x,b5vB{2)vC]Tt6@.t!!%XL(khOd?#;{pt^}UOl}(az7~dD7[Uw(GbxgX#Z}M6' );
define( 'SECURE_AUTH_SALT', 'J/Fxf|_$n;IPX59V$tus1H`=k8}7YK$uspt,;zWwuq&27:&[lMy}K8-;.43@*n5Q' );
define( 'LOGGED_IN_SALT',   '}4>Ns9=%_D* b %dBPLI+B)<`iAX-vn<b&PxObGkuzmN.Jmrk-7-9NyFyDiyUX=0' );
define( 'NONCE_SALT',       'nx>k)4(QP.%6?z1f84+)J}R6KLTZj:F$zgn?Y`{050(SK!#<Ila5}i8P^K8w4d0_' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_lojgas';

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
