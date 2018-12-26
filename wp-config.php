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
define('DB_NAME', 'mypropmgr');

/** MySQL database username */
define('DB_USER', 'mypropmanager');

/** MySQL database password */
define('DB_PASSWORD', 'mypropmanager');

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
define('AUTH_KEY',         'D|<,Kf?_}06q rE{top#8#EI[nS1<rgynOO>~EL}hvA^AY%q89*hz<6rZ_^ly^Ct');
define('SECURE_AUTH_KEY',  '8V=K=eR-d)8Ujj`0|Xw<URX/Gjg}b2BE,Ibo&**p_%/Bcm:HIXhlnvuoD2j@_Wtx');
define('LOGGED_IN_KEY',    '.-[aY<bw8X*9Q-[-:,zqRYkoK!Q|Z]O<IJZdqJAL+:gB>Kae4[KQqlRU%IKBG?wp');
define('NONCE_KEY',        'v8j<G;L%<UZ wq@&;;HTka}/;-Y|fz@Aee4J3YcFZb,ZfU~8(!v`3L;@-^&Btg`F');
define('AUTH_SALT',        'L+s}<rBNDzD!^X yw$&F=]rCqo+JCs**m|1-c)`/kM@K*K|6Zc9&/4`3`>a G]ri');
define('SECURE_AUTH_SALT', '*{3?#`$]=zG/Rv6t_ $Nv_gPi@CxmbdB+)N<<j}#F{)&D5:o6Bl7nJr_dnA,61^F');
define('LOGGED_IN_SALT',   '8U1w@s:q4GXj8jU3|%tHyhew+D^h,H:_$.xmmN^=]Qa%ocuXOS[5*(FYFSioFATK');
define('NONCE_SALT',       '0G{yE%L!HG<G~Qtiau#.z{;R_:o%+(K/I#x[lNjc2*H.1li1(9SdI~5W%5rE!WBL');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'mgr_';

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
