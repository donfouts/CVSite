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
define('DB_NAME', 'donfouts_wor1');

/** MySQL database username */
define('DB_USER', 'donfouts_wor1');

/** MySQL database password */
define('DB_PASSWORD', 'Dr3xI5WS');

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
define('AUTH_KEY',         'w?@Pyb[Q-|BqvUl<:Y?t-RD|N5)(kR1):JEo5Ob?)xuSOq1ai [s;cq/;gLs}Q}]');
define('SECURE_AUTH_KEY',  'D_3R)^{q|fMJMaL Fef*~hs@KF8!u+@Q7pQZSAJk|&q1Z+pP78I,OdmD50Y=-8kz');
define('LOGGED_IN_KEY',    '2SD9v`[URq|FgRE8T#^i-scrn}I+Cx/GVY{fH}E=(YtDc>tU~AbKCt|5}f%+!p*p');
define('NONCE_KEY',        ')+?dY/j!|N.KpR^OXiZCCIZk->6!$=nAmdf;kx7itD1c10gUL1Y7^|6t*Q@7STkX');
define('AUTH_SALT',        '& *?/}c17YWHxd/tI~cm/TBgH6J`,X7Z  >eE!Up2U)rb,/yD?rGRT#oe9Wpk23)');
define('SECURE_AUTH_SALT', 'U+f6[)+8w`MkTFtCI-LX.*{?)L?6# [:a!i;q{)Nnz#Ve8OZel|y@yW^td^stVM@');
define('LOGGED_IN_SALT',   'Ah*nC>|o}p2ISjGoF]}7w_z0(j&PU,e>Hovz9w,Z_/JS3<}1>Vb7#y[e#kZr~T.o');
define('NONCE_SALT',       '??i+oJIi-PHRT2-;4f0]$Nlf&mZhX|%5na;r]XEI%zH6q-IyD8uZwk-Bo9vSL[Zy');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'kjh_';

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
