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
define('DB_NAME', 'howell2code-wp');

/** MySQL database username */
define('DB_USER', 'howell2code-wp');

/** MySQL database password */
define('DB_PASSWORD', 'WxeyDsHnQf8hmpct');

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
define('AUTH_KEY',         'rJ{eNZrGB02[j0Vda(dK-t(+oOz;~E}.B@X)+fxK/*@2W>Ed$>L#SftF.X6@Q>lT');
define('SECURE_AUTH_KEY',  '#)OV9 twT:8qs)-HY]72:.3rQ$aSqgxCcN? @2cbCIZT1==/:LvZ `|eL&Fd{-8M');
define('LOGGED_IN_KEY',    'fG(xVjpLHENvb&:a{y2ux|A_s6X|PqCZtaNB`Y5g[$E:wQ`/U%&c7EZ4(jc9tCxn');
define('NONCE_KEY',        '_IH5gZuGCBhSENfN%>/3[2{Y|FUo|pX:(^VaBbXgI8--/o.8E^/;_+2R8k;|w-+!');
define('AUTH_SALT',        'N)b+=h8I)DGau1|:cOaN-W5PV@|lp~|).?IfIw4lh+Q1<Qg.ikR1|ZX{IVz.dpln');
define('SECURE_AUTH_SALT', 'K,x#tA|%~BKE97q-cL[OC7n{9@nVnPg*|-uZ&++iS-b?t8x/y82Irp tme!-4!8-');
define('LOGGED_IN_SALT',   'P;_uuB(k5FM;|1k< eiG1NH+%j(fYJa]guq?6~g7ToVj-5I*rvN7;r#/w-WMO}k}');
define('NONCE_SALT',       'qH?4Cj~g0D=`.]}od/`I Gs-{GAVeRCPf)+mJ0jELh+*%^1[EeHx8 _(y2ctUYK`');

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
