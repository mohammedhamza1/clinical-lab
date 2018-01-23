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
define('DB_NAME', 'med_site');

/** MySQL database username */
define('DB_USER', 'mohammed');

/** MySQL database password */
define('DB_PASSWORD', 'mohammed');

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
define('AUTH_KEY',         '~s*[ZYMT!|lHP uDH@@L<&n<;y#VNf1uGS0Og*GVHaN3]HfNw|-E=8sqU`BARbG-');
define('SECURE_AUTH_KEY',  '1?HZN)A`s]}ri?L}l;IM^q2lu:@NJjq8Ak`_-yOGLUQ7Q;$L?u$eJ#VZB9S7T|pt');
define('LOGGED_IN_KEY',    't%%@&5&*]1|(#0/xE&oG1#=%rb`{tsb=/=<d#={@J/Z<`omt4A(deB(r3tvdW/J^');
define('NONCE_KEY',        ',`nj{^#7~h;Bg<+3#oEX[Z=xuLgmxUA,|Z8$s*pG|9{U*)IRcAcUd2t7nJw5Z7Wv');
define('AUTH_SALT',        '6kw&Cc|)}fqpd1zq,Q{R@P#(0s)k2{g#<:wFG(LjM5Uj+!_6+m~3^/5AH+]6Xk;e');
define('SECURE_AUTH_SALT', 'b3Sjk]7ZNWl`Pq~0cc&-}i|K:W#2(9>[n)i^ZZoRO<47E3,#dED^oKW^T=F5L>^J');
define('LOGGED_IN_SALT',   'YR7$=[sDfqBjxwmob!cRQL3[s$7BERE%5{k@}kQS--ChNU/zL;Jkfw%fqII*gb2E');
define('NONCE_SALT',       '%-D)B]Pfb2?2zQ[]3LSG_-PZ@5Eb_gM~otYkI;+<}oGza|5sraR8t|z?HeVXL~w9');

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
