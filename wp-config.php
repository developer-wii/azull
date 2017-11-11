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
define('DB_NAME', 'designte_azullblue');

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
define('AUTH_KEY',         'V$ap{@$Zf Z>pb&bh`yRad6lQ9wm&~qk43tA$fH%Qlb(RRM[4pLl*k?8E2rXm)Bj');
define('SECURE_AUTH_KEY',  '=O+^G,.j)pzBkY&-F:=rRIN>!c4Z}4V%)nZ0sV-A`JeVrqbEQLIl4[UuGjh> mTs');
define('LOGGED_IN_KEY',    'Y6.T_s@rZ#If4w/$W+z^U!8oN~A>}Pv.,#;f*R]*fG5q{qS#fPB|tfSwDP>n$>)L');
define('NONCE_KEY',        'pC_kObuQG2*_4NY{;T=jDXZy(O,`^X([L u<:uY_JZ$_uGF,*@1iXy)|?{)7Ofj ');
define('AUTH_SALT',        'Bz5I._wN!0bPUr=rlNu.o;BR&1;IpK]aN%8)rD`AKa|1!3$b::]g~um 7_~xgq$L');
define('SECURE_AUTH_SALT', 'l`_P450up<;*;M 7XOee8~!ybU|4orWo }aS5j?G9R7bx v4}Q(,^8&R4.t9|Np`');
define('LOGGED_IN_SALT',   ';#90(3vdogsL/[c75^.lu~eXNdSWA%7&:FO^?t-Wf$cJL.j>!h.UYxEB+y.5JY<{');
define('NONCE_SALT',       'T =7mcGEV:pZ-rt==|6wxG4!)!fd5H+Zz<r#|M7tg<9$TLB~l0,pa9j ywx/1-UO');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'blue_';

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
define( 'WP_DEBUG_LOG', true );
define( 'WP_DEBUG_DISPLAY', false );
define( 'SCRIPT_DEBUG', true );

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
