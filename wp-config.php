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
define( 'DB_NAME', 'wp-server' );

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
define( 'AUTH_KEY',         '4s/|%#@WQ2HOfxA@5zMsW?U;0k^fk/,{1 F47eXTkhfhYB^RG+O_}Bv/>l*78UJ,' );
define( 'SECURE_AUTH_KEY',  'O:01e ItYFBC<ngyW!Hw4 qvzn+P*Q;AVLZK3mIOd[:q87|Zb:4o,_{OcpO6FcLM' );
define( 'LOGGED_IN_KEY',    'lF=H#PvPg@@yEJ96^,DIw40bZ&fkf2HJDJd~F+y;9w=l.bc&u0aP[JRl/if&BP!1' );
define( 'NONCE_KEY',        'd37Y?v{3dtDw#]w:N1)<ntO>%w-tcu7S.=Yo_{ttoFe%Vyu=[Q$}MmjRub@0>K.9' );
define( 'AUTH_SALT',        'L7r#mr@ND/V]R5XkBhvkY[+iN%R<Dq%-.kb(WK{2~Ex5qb?`&3QNBxxfCAU0f6[.' );
define( 'SECURE_AUTH_SALT', '! iRzV$;(N)vGg7TvoiZ727#A3llnPJ9q_LJNaZ~yj,`yrj1g*jt}p$kp+0}yhBo' );
define( 'LOGGED_IN_SALT',   '{T{GcS_{AMYE?V`p3d@*6~}N0mb};zAn%i@8.>~RAI[]AxV5[vJ=7pc5t/C%d18;' );
define( 'NONCE_SALT',       '@k}!}@@^8hd1Me)#E9zVyGld86ah.}|oG`sxk2?bZ1y5-Qjg+ p0oS5x;(beNhMx' );

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
