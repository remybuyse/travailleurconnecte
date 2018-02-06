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
define('WP_CACHE', true);
define( 'WPCACHEHOME', '/home/travailllj/www/wp-content/plugins/wp-super-cache/' );
define('DB_NAME', 'travailllj692');

/** MySQL database username */
define('DB_USER', 'travailllj692');

/** MySQL database password */
define('DB_PASSWORD', 'yFEsG25UZymP');

/** MySQL hostname */
define('DB_HOST', 'mysql288.sql002:3306');

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
define('AUTH_KEY',         'XJkW8aP9FsetMQLPk8wjr9+fa2MIa0DbfB9J1wlu4plqQIaT1aEtjTZyJWOh');
define('SECURE_AUTH_KEY',  'GKDC7EmD6WXwhinwUXyjuTxwpUMymOf/HvwojSuig9mHExQgx6dQ7EzzlVTV');
define('LOGGED_IN_KEY',    'AM2zWnjPbpRBQJkNaT+3g3UnKNcqLFPXrVJsa0vvHotI9ZEiouzS9gIg3+Pt');
define('NONCE_KEY',        'qXwjKaoT3eucAxxCtX4+TfBG1c4GWOKAP+P671ZvvrXgBgyxt1mRtA1233Cy');
define('AUTH_SALT',        '9h5V2ErE7H6TfJB0K69FJhJB0hgE95+qn+gKacgEWZS0N/8SsLuPZq4eUyIe');
define('SECURE_AUTH_SALT', 'vQH3lkiVkAr2nwp4Q14q0tz429B1GTQDbaT/0y9NJX15Nk2ZL3EB0/r+L3BA');
define('LOGGED_IN_SALT',   'Wr3g7B+fblYSJ0f9kCBevtFodB/AW8Ew30ZJtOoRAiJh6+j64DQfvrPDQPRX');
define('NONCE_SALT',       'HqX6AC1mzUOCt2PxVrR3OTcpMP7uvS7Qf3M+4RXAVzGijMIieiIWQ8JVKJ8K');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'mod224_';

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

/* Fixes "Add media button not working", see http://www.carnfieldwebdesign.co.uk/blog/wordpress-fix-add-media-button-not-working/ */
define('CONCATENATE_SCRIPTS', false );

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
