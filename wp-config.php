<?php
/** Enable W3 Total Cache */
define('WP_CACHE', true); // Added by W3 Total Cache

/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the
 * installation. You don't have to use the web site, you can
 * copy this file to "wp-config.php" and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * MySQL settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://codex.wordpress.org/Editing_wp-config.php
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'wordpress_db' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'dj6[>vUONy;q@AHH@ZplkS*W;%zDCq=[+Mx eYZ:t9GUO5{OM_Y/$$7XzvPKba{I' );
define( 'SECURE_AUTH_KEY',  '&V+WD]FJ*hB]SuW4#LJ~:i%Fm>H5E+dBc_A($)=}=`!~IaY4Kq(~sy~hpJBE&?Lo' );
define( 'LOGGED_IN_KEY',    '{o;<3I2]w!b8[1kN|LdzJ!V4(zJKbCB(p[(wmZ7$Ee6yKiV/J|:GvrJ7|9!M2cG7' );
define( 'NONCE_KEY',        '5OKe7gpH1!QL gAs/+48R yT-98W{FX1ZX2K[T.F#G537}g;%nh*lC_%ztVG5c~l' );
define( 'AUTH_SALT',        '/FgGC*-g7TK!~vupVpH#*EUS!HWK__||00[qMz:9OK}6e~|dWybLhIP#TPNQj%$A' );
define( 'SECURE_AUTH_SALT', '8zW HYSvFD9qeE=un%7zLH,HOS;A_3AHHPr,;`3Vdg[WIfqX#w??U8qrNM|j(:@a' );
define( 'LOGGED_IN_SALT',   'q53l}x/ZtA7fI`Wdhu|bI#,a#ZDgf`>cdKRDMJQi_XDU6H&._q<j_f2 i(#B~S:U' );
define( 'NONCE_SALT',       '|c0V8-VwpvS!PX0~jTF$n$}9~D|mo@&d2DBOEQwGKbSrirIrrx+u>>cU,,60mk&?' );

/**#@-*/

/**
 * WordPress Database Table prefix.
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
 * visit the Codex.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define( 'WP_DEBUG', false );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once( ABSPATH . 'wp-settings.php' );
