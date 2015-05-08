<?php
/**
 * The base configurations of the WordPress.
 *
 * This file has the following configurations: MySQL settings, Table Prefix,
 * Secret Keys, and ABSPATH. You can find more information by visiting
 * {@link https://codex.wordpress.org/Editing_wp-config.php Editing wp-config.php}
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
define('DB_NAME', 'westerwolde-dev');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'Frantic1987');

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
define('AUTH_KEY',         '||QZfLz408{WuvX&N-TH~2VEUKb rYM7@y+s8+}~_Va;{s#eo@d*sIJSw2zG-H47');
define('SECURE_AUTH_KEY',  'DNK};&%ixZpl/PRyH+>S:O`5&#wNw]$^g6^?xrmZpNVI4Z Zw~1|;m?`9csC*0p(');
define('LOGGED_IN_KEY',    'P+uub@Cm+nlv->8{W8e[Gke?y,(,Y!6JE:BdU|5:E^<4V+GK#OO~QU +%hYlVURs');
define('NONCE_KEY',        'B>:ZJxRkp6sId8nd)PI6dSJWeo2s@h+MHT!Pv{+-&d`1C:-3rNg+?7KJI]_lsywI');
define('AUTH_SALT',        'E~bg96qk8DS!>dIf`E1fW#8]9PY< O_.fJVj79zE8VO|]7&89vhWS*ULMR,<+:N|');
define('SECURE_AUTH_SALT', 'F)i5+Piom`54&HcnxOn7IVB+7T&|v0$7p)C[Bvm+<7&GG8?_YE%@y,L,QyYbSt7U');
define('LOGGED_IN_SALT',   '/+S1YoeXfzH8XB~FT3&-vsg8x[e&&hysMbuapXuZ*n]y{QJ/G9?#my4Z~Qenm:lX');
define('NONCE_SALT',       'iwtZfY.Jfd|o#%q{nx|rnXDgI+i|_^|-lOc[u=o5[efGV+R*Qg%$G+I+D-2$*thW');

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
define('WP_DEBUG', true);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
