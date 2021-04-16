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
define( 'DB_NAME', 'advanced_wp_tut' );

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
define( 'AUTH_KEY',         'NwrGB95_x-rW!~cGJX#QbjEL7K-a8(_A?l+3U-kps}B:aB$VIHd,y$TI5k4<lKGm' );
define( 'SECURE_AUTH_KEY',  'B0%)#Ji-8_Q<6TaGI/}muOw{UgR<9+E;Rk|&g5ElWq2^h@NNQ+<a|!:bq<E*5z[[' );
define( 'LOGGED_IN_KEY',    'c)|xyUNL[?E,jHU/[G.nUV*Th0<Z#mh=;)_CZ30:a!8LmXl*zW>sT%|6/WI4u@ke' );
define( 'NONCE_KEY',        't,%_r@nnqFIdD#EE1][PdYhx=H.U.46}@C1a_}[VeKqa?p1G;5Qwu#GHWCVV;$aB' );
define( 'AUTH_SALT',        '/&=]2D~!Q0A]d!}2klP zEmwQf5c_9W8O*g%eVuY23wS/uIzqiS:yo]@/tQpdQPW' );
define( 'SECURE_AUTH_SALT', 'E,s5vsT_i[/rH3~|bg?S2gMQPE}H#S1>cHvPDR*l(VKhb8YhGlz:o{4IO2m w:s^' );
define( 'LOGGED_IN_SALT',   '=<UW^3c-*o>QIb3?jCj(*L&E.EXlgm*yvCO}W61fn5T=+TAgLwD BjAef@urr=>&' );
define( 'NONCE_SALT',       'lv<gHg-E]6*4)ON1 QCZh]y)Dz<C:gJP9E-0uE<2mprz%pc6+zf5E^23sLJY1@r)' );

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
define( 'WP_DEBUG', true );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
