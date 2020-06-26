<?php
/**
 * The base configurations of the WordPress.
 *
 * This file has the following configurations: MySQL settings, Table Prefix,
 * Secret Keys, WordPress Language, and ABSPATH. You can find more information
 * by visiting {@link http://codex.wordpress.org/Editing_wp-config.php Editing
 * wp-config.php} Codex page. You can get the MySQL settings from your web host.
 *
 * This file is used by the wp-config.php creation script during the
 * installation. You don't have to use the web site, you can just copy this file
 * to "wp-config.php" and fill in the values.
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'wrd_jcnglc1h2d');

/** MySQL database username */
define('DB_USER', 'wrdmL6upvI6');

/** MySQL database password */
define('DB_PASSWORD', 'FGuW4mIBKi');

/** MySQL hostname */
define('DB_HOST', 'chelseastropecom.fatcowmysql.com');

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
define('AUTH_KEY',         '8G8aM8rh2rDPtFsCsw52FoAXGJ1hcVhyz5tACt8YGnR2nZFg7YKTfeX0Brs3vfe2');
define('SECURE_AUTH_KEY',  'fH1vWk7Juvkx8p9LfkClr0j81OQwStAuZ8LId3QVLfXJIpkTzDIwRjbTCCNgxIaE');
define('LOGGED_IN_KEY',    'soPZkr225u29MngqD2Sl1ihrHbhCV2Wd9zSK8iyM4VfkKVdLbMtprEzDlneR4sEm');
define('NONCE_KEY',        'OytiwY6bmwuzNoASUn360NcFYFvVUMRlCk7sJCjWIOhqzztjg4UunVLOFDSRlAXG');
define('AUTH_SALT',        'vqkX47HdAH974gPY8AZOPxbmzmuq9ZIb1GemwRZELh0Kub9mSY1Mrb3n4JXLmqYd');
define('SECURE_AUTH_SALT', '7UIUN3oFl7y1JYLTnjwRSqMjDHU30MLEYgJoVyDbTg1law1LfoDEKjo3y5HCEvQg');
define('LOGGED_IN_SALT',   'ZQcQhOldkgrgch1T3o007NUJnmEfEN4OQ8LCLG9UcORLEZ2LJUtNlCERvt5IU1BL');
define('NONCE_SALT',       'CbBIR9zq4rjsRLUzbJFL6MDUi3oCp1jwlMRQVSEyB1ULzpy8XiayML4NmqiwV2wB');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

/**
 * WordPress Localized Language, defaults to English.
 *
 * Change this to localize WordPress. A corresponding MO file for the chosen
 * language must be installed to wp-content/languages. For example, install
 * de_DE.mo to wp-content/languages and set WPLANG to 'de_DE' to enable German
 * language support.
 */
define('WPLANG', '');

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 */
define('WP_DEBUG', false);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
