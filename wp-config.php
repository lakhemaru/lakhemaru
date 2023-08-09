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
define( 'DB_NAME', 'lakhemaru_db' );

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
define( 'AUTH_KEY',         'f^91Sg .I,.|joU(7AFV&xK40Xl7@<^MQ@:yT-AHowCWM~l!f2tW6u6eCRo8%jBF' );
define( 'SECURE_AUTH_KEY',  'uRyFU/t]/s4xS)jRP }^kbz m=hY&lKk-},{#p~kW;&_|eM*z6}O;|]2g<e=AG>m' );
define( 'LOGGED_IN_KEY',    'I/_G>R+K?-xGD;S7.)m:P~`4B0>u4g88bN;@-SuS@O>@nL:P5qvX*EzzG2&!EfsQ' );
define( 'NONCE_KEY',        'Wxiki2rryPS=~]g++&h-<~(OR9VN$N,!UY*wsfAWyTzPh!raE3y4aSx}eEK7?YL7' );
define( 'AUTH_SALT',        ' q/ot.m|RojIvSzZF(30TbKE%j@_?>8~uRT;J+L~ve1F:bB=Vq]_D+^gf&{ebydq' );
define( 'SECURE_AUTH_SALT', 'X)ep/j[NxaH:Kd1ZPX9;MOMx|[oStQcfEtw|YT<Tkmam0cKJ3p`Q6>&Uelo!YvKn' );
define( 'LOGGED_IN_SALT',   'u}HGBON 9d)DGTE]VX_=$++zuh/5>{kqdP5!1tZ&Tco.w0N8N*tT?%eZ:H;,pFF ' );
define( 'NONCE_SALT',       '(vS5VUu*L[AtJ~&l%NOj&:Y%&hs;jvCfZEifQg8f5Xw7mBR(}cVk0v@O%0TPJeI-' );

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
