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
define('DB_NAME', 'tcDBfguow');

/** MySQL database username */
define('DB_USER', 'tcDBfguow');

/** MySQL database password */
define('DB_PASSWORD', 'O4FkzqLcTz');

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
define('AUTH_KEY',         'K#wdZGC[|soVS85:-wdZGC[|sogNK0:zwdZR+xeaHD]<tqWPL2;+xeaHD]#tpiOL2');
define('SECURE_AUTH_KEY',  '5wdOGC[|spVS8GC4!-w:@dN8}@o]+maL6#xWH2_xiSD_teO9;~pO9]-paKT3.ufTE');
define('LOGGED_IN_KEY',    'RTA2{.+yqibTL2{.+umeaTLE6;<tmeXPHA2]#*xpiPH92]_+tpiaSLD5;+tJB3},$');
define('NONCE_KEY',        'G~-lSKG:[wsZVC8|!ohd<.qmTP62*+ubXEA<.qmTLH;]xtaWD92*+ieLH;]_plSOz');
define('AUTH_SALT',        'fI3*ZGC[|soVR80:zwcZFC4!@kgNJ0}zvcUR84!@kgNJB>,rL1;+tpWS95_~lhOKD');
define('SECURE_AUTH_SALT', 'O|_sZVO51~-hdKG:[wskRN40bXEA<*+ieLH;]xtaWD62*+ieLD9#_plSO5;~xtaWD');
define('LOGGED_IN_SALT',   ':khNKC[|[|@kcVRJC[!zvogNF84}|rH96;#tmeaSL2]_*xpWOHD5;#tlhaS91]#~x');
define('NONCE_SALT',       'I^$jbUQIA<^$unTMEA3{VNGC4:-skgZR80[|@kcVRJC4!zsogYF80}|@kcYRJB>!J');

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
define('WP_DEBUG', false);define('FS_METHOD', 'direct');

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
