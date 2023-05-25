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
 * * Localized language
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'local' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', 'root' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

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
define('AUTH_KEY',         'TtkCBo/a1d6SX7qSsj7pgY5X7xi7rADb4HROmcPxjKvAbESZNFwTktCDd0fseyn7Y2HPBHLtk3xzd27IHj59zw==');
define('SECURE_AUTH_KEY',  'Xfw2jtrBNFsVG2UOnmsDo0I1Ire72UR6/7AdHczKBJeBZQKel6yidBq7MgT2aGKW9wTXeROmx45TS+kAcUW7qA==');
define('LOGGED_IN_KEY',    'Y7mwMQbvMg1uSRMLwgyqDQa9bObUKnY9SQm8eRjnI5uQ+3sfVO82XedKmBNWzXJIu8Pm+V3L8+/sL8AD/Ont4w==');
define('NONCE_KEY',        'Ap3Ha1IxU8qk1ItzPje5prOmva7+XSavnQLp4ZWUVnUcOU0G53wXVhzI+j30Tou3wpZnbY4+874zlDa+gazPoQ==');
define('AUTH_SALT',        'GKjcjFmpIHykmrtSRKBuZFviQ0RLU7+xEzCU1vycFvu6ZG0eCm06g+/v+hg+4qY4Hsb8nN1qKdqmARROUKWJLg==');
define('SECURE_AUTH_SALT', 'Tal9b5USHczQfQvSs5t5a2XNC6R4shiTvJ1QIBjJtkJZTxeiDaAsYGOPo/TQ3W1yz5rDXr/z+rZVZw7j+uJzxQ==');
define('LOGGED_IN_SALT',   'W3QvGkCS7QKFXsvPccizmiYwy76h+1ZODH0ZcBjfCbT7Bvy+FwNeXuNFiYtA39rzIP6XmGeownHuUfXvspk+Ng==');
define('NONCE_SALT',       'hW/k1W8S4UJIlVr93f6esbiA1Vaq0OLRGIS956sZnck9/J/jYGEazo6ft1jldTtevGM5JZUnprep8yRF1dq9+A==');


/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';


/* Add any custom values between this line and the "stop editing" line. */



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
if ( ! defined( 'WP_DEBUG' ) ) {
	define( 'WP_DEBUG', false );
}

define( 'WP_ENVIRONMENT_TYPE', 'local' );
/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
