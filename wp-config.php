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
define('DB_NAME', 'wordpress');

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

/** FTP Direct */
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
define('AUTH_KEY',         '?Q*y+5*T>5X:Oz2HQ{1@O<*vXeK@paLCUEu@7[V*5m*N>f4[i7ct4th=w3VMK)`c');
define('SECURE_AUTH_KEY',  'ud3lQXXemQzdlcW|exz>K0`kX{iorvk%Q.wK_93Q-9SS+@RRDw)7RFk!gvIj~e`u');
define('LOGGED_IN_KEY',    '#.M:(O)$,M#Y:]6J05j$a]97bpO+Rf`,fZG[~w>Uwi3gmh}]$tcv3I)1>c67xjKV');
define('NONCE_KEY',        'UIH{&tJLgBxOaYPDvLJFh|rb(axhBI6M1 ^s7d@nT4WN#QabT9eYhC_YyKgJ#|#<');
define('AUTH_SALT',        'UtMq#>Y1N+B0X,>|w1A~{QM/<;N! #T?C{rb&.7%)2&;0ecw{,Su% mH&tmUF6RA');
define('SECURE_AUTH_SALT', 'g^,?Mw5JiwC `6:7_D|D$7*Im)jfKuF&Il8_tUSx<9KG#N@ Zu+qv-m1Nm)&R_ @');
define('LOGGED_IN_SALT',   '~u?1j^AdjF|GYNW~?=E`7v-^Dw/r sb{hl}-^Y&o23Qm||VB-CYc1m^EEq?gKr]!');
define('NONCE_SALT',       '{~Ub>Q{,oIl{+CJ?q`;z5YSrSha@2*f.mhx$Z.P2c}Ju9hE=MG[$kz:X3V)~0sZ@');

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
