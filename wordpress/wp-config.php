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
define('DB_NAME', 'wordpress');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', '17126huang');

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
define('AUTH_KEY',         '/s,t29OhZE5[^a#p<#RDNHJ#`b]&|Jn!-6OrAiqJ!f=3qT?:.0X~1$g%xPTy8#>[');
define('SECURE_AUTH_KEY',  'J|}3 xo.[|_+Iko{1v:!e|k$e;owv)vvn~.{-Hh.y!Mx{~~B5?N3(V)_nz|Rqk#d');
define('LOGGED_IN_KEY',    '7X@9O;T>M:&HhW*ujzbWp@5N#Ezbgrt,wduIfTHw}G[0;H[ZD6&5.1=F6>2a,k=k');
define('NONCE_KEY',        'rO6-g=%*cP]Qu wC>#`f^=0E^WGP<{TNw:CCEmSX|=GR0A.m,Y1Za@s@ZMzNs@b/');
define('AUTH_SALT',        'M_wf&2M-(qGO/9];CL~Y<w-]M9FbQ`H$^,ygJ8c]N9uO--c.=0lZ0|SJh+4CRjP|');
define('SECURE_AUTH_SALT', '<ph&P,=OFV}U{E%W;HzH-kLlcK9s++!2>v:/Uu7HlR*`=#VVVc9UKSY1YgBvNrII');
define('LOGGED_IN_SALT',   'BbID!|tUQ]k^xD*sFqZ|/*6Vd5Wk=mjD@YO1JzU&cBnK-jB3iv6Mx/2+^C<u_37@');
define('NONCE_SALT',       '/0|!lS>=M_K,rh#o|&&%ta|XW ,q1&hiS2&|<IEaq7zKrB57Um}reDdhJhZ-Z+<b');

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

