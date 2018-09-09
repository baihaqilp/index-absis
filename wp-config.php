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

define('FS_METHOD', 'direct');
// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'wordpress');

/** MySQL database username */
define('DB_USER', 'saipul');

/** MySQL database password */
define('DB_PASSWORD', 'WWYzY7t64JMeocFh');

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
define('AUTH_KEY',         'rKCG$E}q!ZCu`c6~!L>}F^umDX{8dq8A|fQeMWE+K=H-ly/Nj`-%1GuhP`_qMNG_');
define('SECURE_AUTH_KEY',  'eG=]*o*{YVtToxEjdI<pg<_<*^^qO5Cl43S)[>^(+W,MLAHe`yV;#60=K ?4l9@x');
define('LOGGED_IN_KEY',    ']>.W5fo9uuvEJh/dwA;1~TQLMj<t*TlXu]-/vazjJX-nK:!(WedtZD;5vm!f*ABZ');
define('NONCE_KEY',        ';#C~tzg%j~h0GmMRGQAFS DpycetN1}zkx!m9y78OP=A|d8Jpn*DGU.aj#Z>wR_Y');
define('AUTH_SALT',        '+(bP$BS3u{@Mo?UbUlhtxq|)(&8O1,&XHwY#^hMKN;w#BwdGeOa6L::I5nk`6zbJ');
define('SECURE_AUTH_SALT', 'e5 @9RuDxlz|h]!>oY{1oCQ}J{[IY#&:3DVp{jw<Nk?Ktl%#Drj![+q%^%AMuNn!');
define('LOGGED_IN_SALT',   '26vP_ATETeC]Hu/a9Bn8MRK!!luu(|J~o3wVl4hofvSIJe7R=WpLV*%+A))sw{(>');
define('NONCE_SALT',       '2ZoeqS2kupNYd&$=&<wC}MP&BeKa7e>zoWgB~X[Nc9>q-*sWr@[XrH!te`9ku#@w');

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
?>
