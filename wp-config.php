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
define('DB_NAME', 'hatchitc_customconstruction');

/** MySQL database username */
define('DB_USER', 'hatchitc_customc');

/** MySQL database password */
define('DB_PASSWORD', 'Baseball1');

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
define('AUTH_KEY',         ';v)tmRVsE_<h{mfb2y.t~o+ru[B4]O~p)VGVr:Bav}oUPAuAfk(?+K_, jf<>mg;');
define('SECURE_AUTH_KEY',  'EeIv5m!J (%FY^IM3mjgxiss+5v>Evk|OhHn[U`4r^x3!]kTV-LZa/^YyER:?pRA');
define('LOGGED_IN_KEY',    'F^8$C$Q.k;a7^3<?xI9QV7t-M-o3ujgnj4`Aam]Ph?>.,cI{,),PQA(, *(6T^g6');
define('NONCE_KEY',        '_*EYu@hNoG2,x*wx+;#&4|g#dq}s30:6[@C29(!<B3f$F~D#R ,+hSYZJ*5+.2Ro');
define('AUTH_SALT',        'bL,,a&a:)`ro|^8_DM|+&=c[6m74--=Eh3XQ<p1>_s(dK}oF&k}JGcuW|@p[gZ&H');
define('SECURE_AUTH_SALT', 'oW=U0PEv31JXa*f 2LmXv`q$4hVnaAg2Jrs;>!K^f1!Hd_[g]5uw(83?;M)6JYII');
define('LOGGED_IN_SALT',   'q$+DqVRks-pSrsU_*5qXVuO]|_8(5$/F`LBH[N!Ac5bb%WisduxJ&nmDRv[$%rAP');
define('NONCE_SALT',       'sP!z+,sWA5QE7BN(f[=RgpiP&H1:Wta!X[<IMch8/DJV!r]`S.}<5l-Dl5P;<C,d');

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
