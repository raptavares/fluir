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
define('DB_NAME', 'raptavares_fluir');

/** MySQL database username */
define('DB_USER', 'raptavares_fluir');

/** MySQL database password */
define('DB_PASSWORD', 'o3HbDzgk');

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
define('AUTH_KEY', 'Nuedb8AMRoVJOMJVmpCp3joUsCPN9XsmznLEkUJ8ScIrK14gSBFcW7pGQ3YlOg5e');
define('SECURE_AUTH_KEY', 'ijifN75BIqkSconbuvul5XEw0JPO3eUK8RAaGBLZF8vHvDiYUxSvS737BEqRo3Cx');
define('LOGGED_IN_KEY', 'XCffpzKhrjTGYHdN9RgKVoAE1uaMxB1QZyv1MZE8Xh2qb9EZ9IGMyHNJpekZ4DDE');
define('NONCE_KEY', 'OnWTJJKQwabUkBxaXvh5aoH1WxDRs1voRgBS20wglXRCwU0XiPE4ZyR2PXZfInDu');
define('AUTH_SALT', 'nvv5dB5LpBWXADfyoVsc5GTVAs6YZD9m9oSjooRIvl12efDlf3cmON6cG4C1XcuS');
define('SECURE_AUTH_SALT', '7Pe2pL0p2MJnCmJQGc0tLN4kuojlX5XtjJUeFU3vYkN6ETIPL5rfKh1EYNHMdckw');
define('LOGGED_IN_SALT', 'ml6oLvBLpWAf6i5E72SUx4DMCK1pHI8dd1YTAq0XFyI897xJSUi8TE8VrVActSsR');
define('NONCE_SALT', '4zInHfXTwhNMmmQgNCHz1RtNnKTXHaax4ZFpAEJDe8ZoFKJp7ooVhjs7zeHFcFIG');

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
