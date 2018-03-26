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
define('DB_NAME', 'procar');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'j4**9c+p');

/** MySQL hostname */
define('DB_HOST', 'localhost');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8mb4');

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
define('AUTH_KEY',         '-- *nWQ{2R~TnaU ,qXn2dLNh[XE;Dts41b2H|g;V[iwaCjg~Gjk }7ge:,w}y/M');
define('SECURE_AUTH_KEY',  'd}%rBMK~J*kBQZ:-?VnM686%H{(V ;R989D,^c;cPOFDz]<?<-,BuK6,Y]Jcu-eJ');
define('LOGGED_IN_KEY',    '_<hCPV(i[D~jNUWXe;!JDg5Y~]FQ1fwME0du.x`3-<BIlTS#g|Gn]!U{+-R%#*{u');
define('NONCE_KEY',        'Bt($kEwNy;&t+;<1&%KZ`4^@Fem8T1nVpQHfL:!V}d%p<:ez&K|g!Z+}-2/viZ,V');
define('AUTH_SALT',        '|T.0<91uxJSh//n`83=^-X ,TdP6?|fR /Rq^s-ysxlz@9Ouds5A6wDo|/%Lzl0c');
define('SECURE_AUTH_SALT', '5|tgGX5M+?~j5]0Dd:ymZH2gO)bp%pVi->#S&XhTlk%B&g8Qe,;<fO@22iPvE}L?');
define('LOGGED_IN_SALT',   '*F)A=o]Bc#$=W+2fQAFz>`4/BxFAZq^.!DD0oEkSIG?N1Noz8(tsX+S?7q!!Nn2h');
define('NONCE_SALT',       '4WlsTpaPOu|}Y]Uf-nlHo)$O4P+]fR@0eS#45qT+h8!bd}cL436>HWnxSw!@)k{~');

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
