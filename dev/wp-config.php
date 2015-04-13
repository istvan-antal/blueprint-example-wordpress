<?php
/**
 * The base configurations of the WordPress.
 *
 * This file has the following configurations: MySQL settings, Table Prefix,
 * Secret Keys, and ABSPATH. You can find more information by visiting
 * {@link http://codex.wordpress.org/Editing_wp-config.php Editing wp-config.php}
 * Codex page. You can get the MySQL settings from your web host.
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
define('DB_USER', 'wordpress');

/** MySQL database password */
define('DB_PASSWORD', 'wordpress');

/** MySQL hostname */
define('DB_HOST', 'localhost');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8');

/** The Database Collate type. Don't change this if in doubt. */
define('DB_COLLATE', '');

define('FS_METHOD', 'direct');

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'GT=|SVaK`:PqZFr#2g&5Ii|1{96xXik.uJsG>t#VcMTTl/%O|tcl4zU?0p|umpo6');
define('SECURE_AUTH_KEY',  'mK^9b0hU39jB!lE#[0,M}E]+>o4)UebPx+#|qm`4!FCO==i^@K2mcQKtS=D23-bT');
define('LOGGED_IN_KEY',    'Oh.r$nH4ni+DD4,r--ACfR~AsdXmxk=,myY@[m6(R#_wOEz$!d(`o!n|T<C#&)m=');
define('NONCE_KEY',        '&6VGS?!qV~s|&c;bm{l(`~3`k^-qkRJB)Hj;Da{b4i:.,=0iu~Krec*~!?l+.fY!');
define('AUTH_SALT',        'B35}y [ovWqy2}e3|XnEgqs5vJ%<c(f)y<$f9X*.93]zE/QV@8=HlgmBh};5exj5');
define('SECURE_AUTH_SALT', 'gR0(8uoW^  96dBYF*ifC#33D]rhZ+:zn+kRSi6R]A^2f%_._Yz{L^P-&{oV}shU');
define('LOGGED_IN_SALT',   'Z7dt&Z77x}jdCP4gX+J-:-S~+qp,)A>|h_N+?2G&XS Wai1PQcARj9,A]$vQId.6');
define('NONCE_SALT',       'Vmv-/z|cp(#7tcJk4iajVkgIv9VW>tEOKo|D?]v;u<@5%<x4eh)?0}{]hme%g4F<');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

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
