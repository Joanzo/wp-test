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
define('DB_NAME', 'udemy');

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
define('AUTH_KEY',         's&;[h{~7Nk<iM0z!}2A6<cR<hm|Hi<|lK~Odbrzj{7:A(-Y(/%N#q}&)Sp()dg1B');
define('SECURE_AUTH_KEY',  'L 0g2w.$IPeH<U|ci1!OQkN6/7-xc=HrwOrq{HRp M-7sxRE]}JXB=$6E%4[b>9h');
define('LOGGED_IN_KEY',    'RRzpa?IE<eL7afWOZbdCdA@)N?!QGYT|!N=?--;j8]wV0ioJb^{!YmKkU-~2n3zP');
define('NONCE_KEY',        '7SD/[Y1>3)&Cm)N(Nx_ mJ8m}AoYZUyIvvgiR{JfyO9n3Fz~blmwEAOxlK>r%p)9');
define('AUTH_SALT',        'e%3VO4X/Y]xA^F+0D<mrYL:(ko6l?[~[@DK/wy,0N_UpIk$i|m2eDRiw|1*]BEw8');
define('SECURE_AUTH_SALT', 'r$eds.=lVc_.3dF8h{e0E8[D#EF!iD2~c_,Tvg@s:|}o`(ig{_.8L-kudVRnY|F7');
define('LOGGED_IN_SALT',   '6q;3G}K@5qz,y@W#ob[68 #;D!ZFv:Mayag|C0sPW-xBQ:1n,u,Z#W__J.U@R~*r');
define('NONCE_SALT',       'y.?dyzr+_WEkjQJ4~~?#(uIYX{9-[?z{4WIC`DH66FjDm/({]5xh1XZ8lErk=x(^');

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
define('WP_DEBUG', true);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
