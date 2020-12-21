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
define( 'DB_NAME', 'wp-xy' );

/** MySQL database username */
define( 'DB_USER', 'wp-XY' );

/** MySQL database password */
define( 'DB_PASSWORD', 'DoLi190396' );

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
define( 'AUTH_KEY',         'P;zLpZ$xN8jDb+aXF_g|dm,Pe|mSXx:pKY~OgT7.+55J?i]7/fW*^pI~i@8fGQHr' );
define( 'SECURE_AUTH_KEY',  'cu3.jV_}1>YnS/uMcXo&Z^q<t{qQ{Bz6Lzav4J!sACt5_{7C^)6hY@}L!O%0FL! ' );
define( 'LOGGED_IN_KEY',    'v<dtf$o<fTgz GLKb2]ZWS|m{Nf9xMf>,Y8BE6T{:bM6(8|%8wl>M#/|I#i2yJpn' );
define( 'NONCE_KEY',        '65/4+q-osITG9b7gk)7LQF:-3^p4PogeP/@Deon~ESP^==[R?Jz?4SOrIFwKyl}*' );
define( 'AUTH_SALT',        '_JE7t8]+M)j%o^Tib/u/cc:kR;#6nR!u#$M)we],%YOBnmdz3y#WEn(6g.-S}/UI' );
define( 'SECURE_AUTH_SALT', 'fFLo/=kmq}I$_Od~`AD!tm*55Y9k!zvq+q=Oxj2!d6,O`^Du;qPCmii_n JRz2Y2' );
define( 'LOGGED_IN_SALT',   'TQC<6bq.Jm=Ra*87$I }U~Eq(K^Cz3`D>6+#<twx%^s7,c&hxtT@z94@=~Zp:VU#' );
define( 'NONCE_SALT',       '$7pV{#T|{q9G:-qryh%dQ]s/)t31)Dvao0]d9zErkv=w@UT;j9m5%B6)2=[0t?_P' );

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
