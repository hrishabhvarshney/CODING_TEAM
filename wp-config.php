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
define( 'AUTH_KEY',         'w4}(Ag.SOGG]])gS+t8yF`&B4`ZDi]rZTm]0CPdwm 5t1cM0znhFpBF7D4{0800$' );
define( 'SECURE_AUTH_KEY',  'tD5(ppB1;c&S6byC#e=%qK1IvI>&kAr7l`}>tL%,g`UZPR<a$A[Xfmd)3mO0_1S ' );
define( 'LOGGED_IN_KEY',    'D6YXW IKs)yu&FqQ+;)E/YATx*g6>[-{0}I3Mb,F4mjIB+{$3?G*S.@B+q9WURJf' );
define( 'NONCE_KEY',        'b_(.T5LmVCqK<s+*&ok|>3/owkz0IxG43%~_{Zy*f!zk*4U](x*pd{&/)iuL)cXv' );
define( 'AUTH_SALT',        'Mdeo-W[(rHz.RSQ);T&OTFt]C`T}qjtZl:[@6PEN.7bT0ng2.#1TOGe7+584av1`' );
define( 'SECURE_AUTH_SALT', '/p3D$}jE &0n>Pp%ABddSE(}.fETqb}k&o`=L=4|f+qbG#Y/WZHLxiLl5|=#L%0Z' );
define( 'LOGGED_IN_SALT',   '_CL5b}L- %MIs EfiM2:o[,`Y}3,Flja0({c~_s_&JY )S54x*[YdQ3!in>ZrD~*' );
define( 'NONCE_SALT',       'Ok%@{!zVS!o[-$>4SC]e6>w3Pyl&C6y`scjb0PFqr)$X:)V&-Y5__BvY9Prrh{I0' );

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
