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
define('DB_NAME', 'wp_learn_db');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', '');

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
define('AUTH_KEY',         'nX1Y_R~3M:;25dpj~v@[a.rhEJ~m}qepuM6Xm81Zgno55eS}BEWlb]bImQ6$ua3`');
define('SECURE_AUTH_KEY',  '~1deJhgwdpJ}T7~}fGZ+nT{+R#{](47tE}/Z0C7yr}T&=u=ETJcchK}6eK80.K[<');
define('LOGGED_IN_KEY',    'P`y!lQ.eUQ&B2=@?yg,2xu$4-6/wg!:Gpq<KAUc6(Tfu*W#}c$+{B%2xW.Z_fHh8');
define('NONCE_KEY',        'jO1T;1y3?MD)mx WTqsT +B&?pv6wBJiQ<7~}q>]/aXe*t&uAP7n=_T|q~@],`#S');
define('AUTH_SALT',        'Q)VOc_NZStIU~`9azu[AhS46y6`gblYkOW*Q_Cq}PlRh@~cgo)A^}0- s6tjPD&2');
define('SECURE_AUTH_SALT', '#c^<EPD)rAttvu$k#y2hPN=;&iPG,$ie-jfMkp{R/7Gl|t!PX|bP^-bV&Xi%$g6|');
define('LOGGED_IN_SALT',   'kN.s4_0^~Oz:MVdJ>QVCf{J$:`<G2!U:&4!aeL.P_/z-pJl[TrJ.<g<=*C3w,FQ%');
define('NONCE_SALT',       '<T#ehyM]o}J~8y(=qkEeN;,7g^q7NH04lGg*3vF9L5cm`89.(=#^fiL*SHjQotJ,');

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
