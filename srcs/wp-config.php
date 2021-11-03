<?php
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
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'server_db' );

/** MySQL database username */
define( 'DB_USER','ubolt' );

/** MySQL database password */
define( 'DB_PASSWORD', 'password' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

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
define( 'AUTH_KEY',         'xIH7gS~yXi~3y%O.a,`&3:f%ORL=F`zPep1-mLBlEluwsXxX95s=Ti6zpJO8Vw%z' );
define( 'SECURE_AUTH_KEY',  'a=/uVMzFA;/>9[*B.f(joDDPLus_?7ZK ~4er?,J$u%y0#e^HQ,j +WImKY~L^V=' );
define( 'LOGGED_IN_KEY',    '6hXA[JzK?XDoWnL+?2`F&E|6b*$%/1XKk7u9zF>5+CDl$#{|3OEcp59eS#YpCr|e' );
define( 'NONCE_KEY',        ';A)6{AX:sg0p*J%`9)C(x_?5e 2I8SpZC-P`}Il%iLU!1pJLF1yus~kAfXqx @G0' );
define( 'AUTH_SALT',        '8B`rAsBz()8trL#[1>d&tFr2Pk7fIp;0M`WzX*(6V9_N:s^M:&*PK`v~}Z|l|ve3' );
define( 'SECURE_AUTH_SALT', 'r*wlOIi&)6xZgli4ci@Me;uDD_o c=dWF!;tlV|A6e03-sxKee|t2k+[T% aJ*+;' );
define( 'LOGGED_IN_SALT',   '=cs:^U@s[:x&@DQt)X-HWJbDS,NHmzprl#>*N<AB/},uq,C&Xck}M_ m-%/Gs+3.' );
define( 'NONCE_SALT',       '1A2:6az1l#!L0vu6I?4bJa+ImJ50pxhC~:XHQz]H^~xG#?Xeejk|GX%QA-ns0qu6' );

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
 * visit the documentation.
 *
 * @link https://wordpress.org/support/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
