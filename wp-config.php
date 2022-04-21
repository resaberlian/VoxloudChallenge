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
define( 'DB_NAME', 'voxfloud' );

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
define( 'AUTH_KEY',         '(Lb|kq3Cc9#5uZ_VUR!!/|4O&(G_.k4}]]N(?Au%rU+{YIS^LG^1a oZhf ?0-ds' );
define( 'SECURE_AUTH_KEY',  'z^`,L]|GBX~wguE-c,A(I~0G7($^o?ec1$y=ynBFml-+<1@pk87#7n.r)H^,_-G;' );
define( 'LOGGED_IN_KEY',    '0GerH]Yi@G2#JtWl^vy~cA GZkv|08Ai4W1tb_5C6kKirTb>uS9J3&A7y.C+]lkA' );
define( 'NONCE_KEY',        ';raw>/=,x-RF@QD&bWw;)>VZSar)%aKc?(b:AYTTnY%KaUs%V0EYR5e4{J]<+LY/' );
define( 'AUTH_SALT',        '-Z%3;RBIn[c2%b9n:M lEX(*|svLX18Tsya.F200=:yewJ+jJ57Da@3a-Jzu2J)Z' );
define( 'SECURE_AUTH_SALT', '^a83XrTYDgK3888yp`e^oW>BRe`58;WAh-d};/I8;ZB#S1_BWjrJl$@DHq0,oyp.' );
define( 'LOGGED_IN_SALT',   '8JdL2D[]HJ_UUCu_45^[+Om<+XE5r49~#+OnE28c,b;aosL4hgNVq5auppO=D,b#' );
define( 'NONCE_SALT',       'A~]1j?;8bsF?;d)N+-csED=bZ@38_D4&Z!safM-1:4HG7cD>ROZH>A9WOyl=^|T|' );

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
