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
define('DB_NAME', 'wordpressapp');

/** MySQL database username */
define('DB_USER', 'admin');

/** MySQL database password */
define('DB_PASSWORD', 'password');

/** MySQL hostname */
define('DB_HOST', 'wordpressapp.cx6zlzdifgaj.ap-south-1.rds.amazonaws.com');

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
define('AUTH_KEY',         'npM1j-iGH!p(`z`b_>->R qHG_l4F<3[vPF=5wY<0_o_^;~/b6RJ6$IXl]9 Ye5{');
define('SECURE_AUTH_KEY',  'lf/e+~c}(~vxB5UU2^bxn0<?d,IiKX;jC4Y7xxC:LPIM`JYVh?2QH.7:,E7^Kj^R');
define('LOGGED_IN_KEY',    'ZOE+y<s8ycs~F&^Bd((i5DgPp($p0zn~N7hzMWvHFudr0qi%OTA)2ky;)7 =XL~[');
define('NONCE_KEY',        'nB9tsE+H7~NIMz@G5-;7;{ S`-GgCB.wl0Jm9Kl?eVsAI|^N}3G/A7m#:g+{W@]}');
define('AUTH_SALT',        '=BxI;2XV4c?0/8PY]w%E[`3+!(~_pjG>#=p[]l)je6v_>R9iuV-:V(<qLPaB} /W');
define('SECURE_AUTH_SALT', '-bN4%j6zi^>VWTeCaUG1VK8m_[Zqt%0l_wX6rl>EsK[.&2FdlS-T]a)#=8R24@$J');
define('LOGGED_IN_SALT',   'B+4D-dj[mR!-X+jf8E.(j}b=+,O~VJE1wjGRSgFn13gm`p!/r!)lXaCOH)Z94rt)');
define('NONCE_SALT',       'NGU<qV/tp+-{s&cCA{Yl!1eJm^HAwY2pOlW-K:;5)g1gVKDk]JTi|y_O7})fG42^');

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

