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
define('DB_NAME', 'arcadia');
// define('DB_NAME', 'amhewins_resume');

/** MySQL database username */
define('DB_USER', 'root');
// define('DB_USER', 'amhewins_user');

/** MySQL database password */
define('DB_PASSWORD', 'root');
// define('DB_PASSWORD', 'Para8dise');

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
 define('AUTH_KEY',         '+Szce[;.8*p*/;f|BzSDl81-qKxEiAgx8g{HXsbV%b26QyOiDU4v5p.+A?#k,eR{');
 define('SECURE_AUTH_KEY',  '22K)ezATq^U(^_J1_WN+N@uPib[k;1|vW-_MSis8E>opMOYh,7,{e&j;n|36GK%7');
 define('LOGGED_IN_KEY',    '[ m~wLkJ;6Ah[k0g,y#/t#m;yMIV@S2Ku|XQzv>uqJt@~x5SFqsKge^a++7qr*Ey');
 define('NONCE_KEY',        'r!4)xNyKzlKdt-+#,tVE.M^^xbh#zjm8-V9n1K:JGmSj&H4bR h7ZE+rp2jDg4dB');
 define('AUTH_SALT',        'STD?d6Sz^K[*-7<5VK:t=2!1ast+-fqXj?fRUVTU]gYDMMk];qv14+r+A1J,:-6#');
 define('SECURE_AUTH_SALT', 'kGH=1dcce>%e~X=voG#7qA`;G0n-98E|muFm[>~6wa#s10V@ &-D4_;qB|bJ.&N+');
 define('LOGGED_IN_SALT',   'Z@+6;$s#NuSv9h|&_-*Z1a]M&MO99~xS=4X>`G<i {f}[-Xo--xSD4k8CXie<fT,');
 define('NONCE_SALT',       '-1Cn+7M+O_Ry10VC(re~J%|nQV7wZK25PSIk5y*i__y^:z=Wp-9[M6dTN1TF|pE|');

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
