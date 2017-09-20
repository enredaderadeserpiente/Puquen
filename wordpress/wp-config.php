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
define('DB_NAME', 'puquen');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'root');

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
define('AUTH_KEY',         'sm%=AaO]%!Vb,4z3m-Z~e|/4oWSD/+A+ut,K)w+2tx]vg`9v*[aN!XTTh6*YVGSL');
define('SECURE_AUTH_KEY',  '6y?!?+`v8jG&NRH_f`9*?`1ov2ZWLa0BDEj~H|;`.h9VJ[]%5(9f|$hkB_Rf_f)A');
define('LOGGED_IN_KEY',    '/Rc:b|3pITf5>1LJ-a5-0)8eW?N2Etlf?Xw-z69-QTK^uXoCm?tQW|{L&F,qQOU,');
define('NONCE_KEY',        '#f#9DFNsU3)b.8H,n%?#aFVKb_Ez<{}Bm6U.m,F)ydYxF|V3a^)J=7+ZS.Xg|5)w');
define('AUTH_SALT',        '2;h!>de2O/X>FU|-SEpO5baL]tMnrZlnGMKl3f`pK<W;<}Yp Z}eKY@[%$S<=YyD');
define('SECURE_AUTH_SALT', 'X2?IyR1.j8U~4+if/[e#C8sk&*5}iquCOmX}ea!BS7dZU7aMJ,NEq8ynzX$1t(vQ');
define('LOGGED_IN_SALT',   'Rk<TD_.S(Hm?aM%Vk1|M>&d`7Zt0ola=KrCfyi9O?QwPD.KYUIKi}uT$|lC{N&]o');
define('NONCE_SALT',       '9Z*Ah[VXSd)*}HvxHnd1AxOQab2Q.:vRg<8_7df:w,NHnTN,$_1]i3A,mPd6q(I,');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'pq_';

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
define('WP_DEBUG', true);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
