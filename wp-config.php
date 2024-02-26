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
define( 'DB_NAME', 'wordpress' );

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
define( 'AUTH_KEY',         '(9=~v+U.Ld25iRo|Ljv^q,`Ms=Mu<[zUrW92NH$H (qA&(imJf4{eu#CrgZ)KU+(' );
define( 'SECURE_AUTH_KEY',  '{D{psp34i_S21<)~HC8U<xyhkdAs0mPgkr2c=47!qy%6mscks7Kiz{BkK*!J5M@*' );
define( 'LOGGED_IN_KEY',    '+_7E4Fhn7L94JI_hQ^jL7Weat8hDk~9%7NDOCCiZlhsT5M3Nqh-Ukn_K$*ci]HC_' );
define( 'NONCE_KEY',        'KY%)yt.BFhBBb/n0R;wQKA;;1p*irm}V8,cFx0WkzW],V|ZZ-ye,Ad8kC?bDJKKe' );
define( 'AUTH_SALT',        'q`?sM= pf36HA:Rg]iX^`;yxjEeb lxjC_-;3hY1E_M*IlBsY4?EqC/y3_DxBamy' );
define( 'SECURE_AUTH_SALT', '{xhW?t,WZfuv?5s#$ob(gl(97O4%%Ia2)7sJb7`!<b^4Lc]bQ>F@hV&-u*P>`%y,' );
define( 'LOGGED_IN_SALT',   'B.oQuuF)7-y5}nxa}u$^4;VhBW+E&2;%6AE6%z*4zsEwC?9zAdO?_1OzES m5L&U' );
define( 'NONCE_SALT',       'fSog=Y(7d5D_z_E7U,Z)5W_IQZZAMTz7}>YIoB|UY*uv*+1{M]`]LDwvq |(5W6M' );

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
