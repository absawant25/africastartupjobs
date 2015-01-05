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
define('DB_NAME', 'africastartupjobs');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', '');

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
define('AUTH_KEY',         '58)tQXG61d|YMu4D_iQK+|)aZfw?-,+t7.|TBg^K`6T?YD7S]L-EkfEZ]_4N(pyk');
define('SECURE_AUTH_KEY',  '(T,q.c.=l+2R3E$m57tc.fs>K7?Tw_J{{D_,8i=S~+hzuw5HajPx3n_QqPl75[h:');
define('LOGGED_IN_KEY',    'Gx.`?c&t0WRlA@Oi1b3vra`:+iDrw0<KX$6s%-wU!HkBI!x0j(+Hpugn[a!Y0pow');
define('NONCE_KEY',        '/FWMK1k>Y88Oigi`SuQSyv*/#s9GS{SkqDf0W**Vojh3`h-!B1bak@g7zznpJ/Vk');
define('AUTH_SALT',        'i)A;@Q[ByE].trnFf@PzpHp&o3<|)-$nGz>+jo+lzLaCX#dP(&B8J&[=!uTQ0!Vh');
define('SECURE_AUTH_SALT', 'Mck#JY!K~F.2R($-&C}.,I1dAJ~Tm&Op*hd;|H[@`Yi6v!PUH@`_Q;1nC/>6[(8|');
define('LOGGED_IN_SALT',   'aHG<FTt-iji|QWON$ hM`L-52|b16AevwE+&=e-_ACY4C7Ei /g!gy-%yWjH=+!A');
define('NONCE_SALT',       'M_x*m8>ZeQJR&e!!_y=&zPL>Rk}]z7L Hz^}PlC(QH/283Dp46>v6cZv*L@ J#Xk');

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
