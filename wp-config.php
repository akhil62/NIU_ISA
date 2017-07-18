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
define('DB_NAME', 'i3260783_wp2');

/** MySQL database username */
define('DB_USER', 'i3260783_wp2');

/** MySQL database password */
define('DB_PASSWORD', 'Q]cU(wV0NUPpBW*AOm*19.~9');

/** MySQL hostname */
define('DB_HOST', 'localhost');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8');

/** The Database Collate type. Don't change this if in doubt. */
define('DB_COLLATE', '');

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'q7r5Ff8eU1pg6tRYMJBZ7JRKYojSSTaJpw72o6dMdfdeMejKhYOWgdTip3gIaMwn');
define('SECURE_AUTH_KEY',  'nosd7a6Z0csqAq0Rg9i2d1rO1I8Pax9h2CrJXCaLrIfqIo5VctGw4ff1CbnPNpmE');
define('LOGGED_IN_KEY',    '5CaG0JbDQMgaPy8t4vhlL40trl4z1suSYF4F8rhwh1f2ZmUgzQZPMBlTxNYtpmCU');
define('NONCE_KEY',        'D9wmFzBNJfOFj8ZhMy4dqvN8fAiwjIjV6uaziwP8xcPhMPVo4Zf3UGlyh88ge0cF');
define('AUTH_SALT',        'W9Sxq2XASim3vuMReZpW0CNrY6MFbNQEuuq4dAyRHUJvDCOk85J83c9YntwSJL6j');
define('SECURE_AUTH_SALT', 'X6104eEw60ZQezuXvhFTOMTjYax65Y7S45PNenwBdS6xV5HmBgGJhQG2Vao8WFgh');
define('LOGGED_IN_SALT',   'XuMeV1dvIxma2Ya9dN8uTkKFiLIZNwLrEKQahJawtOegZFnk1E6ROKZ1aBi3FA1d');
define('NONCE_SALT',       'nAZzkjD4sXetNPp0gmxABHp7gy5a0Zx4fp0lmDWnxSgjVe5jzOTYZNzbZ55ndglj');

/**
 * Other customizations.
 */
define('FS_METHOD','direct');define('FS_CHMOD_DIR',0755);define('FS_CHMOD_FILE',0644);
define('WP_TEMP_DIR',dirname(__FILE__).'/wp-content/uploads');

/**
 * Turn off automatic updates since these are managed upstream.
 */
define('AUTOMATIC_UPDATER_DISABLED', true);


/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 *
 * For information on other constants that can be used for debugging,
 * visit the Codex.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define('WP_DEBUG', false);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
