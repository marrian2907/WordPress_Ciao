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
define( 'DB_NAME', 'test-website-db' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

/** MySQL hostname */
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
define( 'AUTH_KEY',         '3VQg!>3_fGGB|YS@L-+_k|c2Blr*-<7^ 0`Jw@#k8V#>p=Ia( EB&XGdJ;D+:CE/' );
define( 'SECURE_AUTH_KEY',  'wt(Ph+V6K~2d7#iwY0oHsZ6Kgjn5qF|iO8Z(n~`dGjjVai^A kob6Mi9YH]fA%s?' );
define( 'LOGGED_IN_KEY',    ',g2e/1?~=2+kxykH*Kp >] lX#uCQ$doAb<kjH0Xmnu%#b#<eGTwVg&.3hY^@d]y' );
define( 'NONCE_KEY',        ']zHG-VNeqd?8t9CIgYLpyVfI+Ny-- f<eNAFKKsA]>yc`O!8Gl^wWbK`CC,ux8To' );
define( 'AUTH_SALT',        ':8.#QZneD-/:aX.@FkN( N5+ K[~?{>~!n|{XQxeE<D`7tGdx!_`thR]qC{D 9(D' );
define( 'SECURE_AUTH_SALT', '.2~.?1dxiYwe 4V-u:N CVemAh~(u]i,mPe>.pXl9089x-pls;(W&euiv71}ss#{' );
define( 'LOGGED_IN_SALT',   'DK7Xqf6b&mp?$Uc}>Vn7g`G9!]*%bl0oboPR?NPF Mm462JNKo$ 6!ld_[O95 zX' );
define( 'NONCE_SALT',       'u7Q9gq8*9l321wj&c%OTfLDOP~ kpr@L#Q8h*D/+A7-50kZPwg4q>08@#S-?1bH6' );

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
