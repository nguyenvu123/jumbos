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
define( 'FS_METHOD', 'direct' );
// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'hoc_woocommerce');

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
define('AUTH_KEY',         'D+~rmmdBye6,6llJPjsenwA.7upgY<0QUlnfR6yF2]?Bxh]Rw>%LWe:Cjol.>0Tz');
define('SECURE_AUTH_KEY',  '(S,;UY=l>mt}[aE^K:zyD9^3<I*>e 0wr=l`}$9r@`c;F9#J=0;(I8uP%jgF`@-*');
define('LOGGED_IN_KEY',    '^(n:<=CIl9dX[t(H(HlFAYVrx!>]WAREn`WbMmW*>b%8c `[u/1S9XPYe$_{qF~4');
define('NONCE_KEY',        '[;CFT6lAn,O[izm#sH1+&/6G`ov{YvAH&Ip3$wTT%#ltAY89^usS:Tu`4Q+M09JO');
define('AUTH_SALT',        'p4=@T/YTOh(C4.u|eBFe:DP=7%BC[7vLe-U.1BQ;(d[$Sks%f{rQ[;ywVw<R=.WS');
define('SECURE_AUTH_SALT', '7$[WfcfcIs&Uf{8]C4[UHKY_ZV=T92Pl$bQlE_=g0V%l!>24!$Ku2ovdMev<T7w[');
define('LOGGED_IN_SALT',   'bcF^O.s<if!(c2Tf[(O}9.T.5lMOQ%DwJy({L9S{Jyev39yTc[#yo`O :rJqh@bh');
define('NONCE_SALT',       ':Szbs9T*qe9~DaK(IAa`)s4nZ^41jv%8&^nb|A2iWG*6n6MT4.jUj?LOy9~DBSCh');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'jumbos_';

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
