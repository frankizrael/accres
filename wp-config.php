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
define( 'DB_NAME', 'accreslbs' );

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
define( 'AUTH_KEY',         '%6 @Lk_)%13Q,04#^^EZM+R+9jS{x^oF59[L#SzwM{OWG+uh%Q$IZFOG$RQQ?D{X' );
define( 'SECURE_AUTH_KEY',  'n3dBOX|[e)LO]yb>XgpAw`{tJJ{1NVl1I7r?Hoc?@[SY7Wt gYlZzIROT*Rk%`.+' );
define( 'LOGGED_IN_KEY',    'W^!&ISrq>*[:<^|0?jwkL=UrRbX#jyP#5grvaxqAC&DFiGPJ~J~{*48]=d:;}`V0' );
define( 'NONCE_KEY',        '_!PL/$t}l$wEIp5.Z2[x&MK.#dx iyv8yQq[gM^yU?JKJc%cF7}n]EdN2uipX8qp' );
define( 'AUTH_SALT',        ' W}Auq{PfD@qr?VKN!SpPGH-@iwJw0<n3huaiBqGL))@#Eaz/% q#FYmNq]i)u)0' );
define( 'SECURE_AUTH_SALT', ':x__h-![*o#l?`a~W0G0~^.}e[J.j{GB@L38O)oy67/Uc{Bok<c`?3.x7(L)}ws+' );
define( 'LOGGED_IN_SALT',   '%!`WHm*rcs9jNU}-Yth-j6*ut :#k0eLYeqj-nNVKH,i2z!B>pQ*SJb_Hi8/l}Y<' );
define( 'NONCE_SALT',       'FGLL0vSu4pym1h~Za2@L/r6;7?F%Mv~^|k m+)iry5@fz!tdgEFT<p=DMB@2BG#b' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'ac_';

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
