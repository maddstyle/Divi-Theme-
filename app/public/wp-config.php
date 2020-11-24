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
 * @link https://codex.wordpress.org/Editing_wp-config.php
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'local' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', 'root' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         '86WJyRzngs7ZVb7sDwk0eP7DfGPWsuv130b661mUj19tEfexclcZwYj7lfKK4jhz7siI+5JPmBmavUltwxC4Jg==');
define('SECURE_AUTH_KEY',  'N3orq52c6pAbhamLKMUwSTngsW/eoHRxKqksysOr3Fed4R+g9mjPW73NioSijrsvBUwLMCS81z0/lnFvbyeuIg==');
define('LOGGED_IN_KEY',    'RcdZrOQmDy7wYy5Ybq7EV6YwdnGIP8lEqIjNNjB1sk4z7AoSG1Z49LrT7DCdoWJmk46TRGk9Hq7ZfzJV38RvXw==');
define('NONCE_KEY',        '0QMhP5IzyQgQrV5Y+aJyuII4PzYmkJyNbnrtLtCaGe3n3Rln5VwdWCSw27pgxgyeYCClE5/mwj0RJ8nDL8DKNw==');
define('AUTH_SALT',        '2bArwEeeRH8Fmpk12w4+sojVBz4krLLl/ym7W7YxVVqXiODZDQCgK94ZK4zJ0AZGW5YRGs0qZ1nHS/bPcQBJCg==');
define('SECURE_AUTH_SALT', 'P3muIB9TRHYpGVCVzKf1Wa1YfSxPmtwltVsTU5+Qqy2gtvP9xARocOZ9aKC0gByaW3CIHgyPgbQY7gtj7khy9A==');
define('LOGGED_IN_SALT',   'Ms5A2OUvyd0DRuCFyjAbPdpcETmiRBLBeHfvMxSwLlbR2V4TriJRY5tVLbSFpEjxcJHGzG2bWXADkZZjmpl5pw==');
define('NONCE_SALT',       'y6S0mB21Sn59Sm2wH7NnWEHF8XaV9vx5hXzk7Kl5FHfQLlciYKWqRZjv3NOSzSst3AmIc0/iPvXTWQdsMY5muQ==');

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';




/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
