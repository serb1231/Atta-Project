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
define( 'DB_NAME', 'wp' );

/** Database username */
define( 'DB_USER', 'wp' );

/** Database password */
define( 'DB_PASSWORD', 'secret' );

/** Database hostname */
define( 'DB_HOST', 'mysql' );

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
define( 'AUTH_KEY',         'FyY*Tu ~d3{[a?Kq :#Y/GV.[=A#*| ;qzS4^0.~;Xtr*/r;K>MSl8#qSASNE}9$' );
define( 'SECURE_AUTH_KEY',  'x4_aG6=!HDbIFo~#;~L2#APG^myMUa.0yp%qD1ZX/,/B(<x$5$ZXSgv~Bp?QyTfv' );
define( 'LOGGED_IN_KEY',    'g#H+@oZBIAuy_jY&k;U1@-t;^&EAyee7WmcKZ#EZTuN7<NW&*XIV|*/|/0f>Ktc1' );
define( 'NONCE_KEY',        '_W&DPt)/8mSNlF*j?T7>So@JfRKor1i:#4M!ylHJRF%js8ey~Z8cE+  @|w_Xvz0' );
define( 'AUTH_SALT',        '0jr>~8E2)+FK}kR!U.$A|muHS7:S4w^BR~U)fdLxEMu_dSKs.*!h4&9g?*$^:OI4' );
define( 'SECURE_AUTH_SALT', '=*0?i|VpWsfu8bChy1Txv}hmZ{Wz?`CVKwOkh!w!C{lyFK]B<vQm-XLbO$;l$J]?' );
define( 'LOGGED_IN_SALT',   '1=[Lx3K:_j$IsmR|w5^$3t9]).uqd|0Va+zW&Z%!yEUiA^%t7kr^=oZ^ZLXr5!54' );
define( 'NONCE_SALT',       '0FWEEDY1xUJ%AH3%Ke$N+/`[>S?3F5-#39]/AW0v3+%<GMG(F}oAA|VGGCA(W9B4' );

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
define('FS_METHOD', 'direct');