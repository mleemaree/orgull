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
define('DB_NAME', 'orgullpages_wp');

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
define('AUTH_KEY',         '[I@DY_=Bd`|2Vw})tta<HI|=Qk0=3.J/*=7f#C^rCv81}g*k?*c[N*q_; <ffFl=');
define('SECURE_AUTH_KEY',  'E,P5,Z[ZC+67.=w].jyfHFpa`[sHu;,ZXs-*E4I|Ss(k_e+$x_5Ex{qIv~0&|[O<');
define('LOGGED_IN_KEY',    ':>6&ti,?f)se^[/Ntz=0%bBQhMar|&~9+1#7g^~KnJUZ#8^fcgRE*;ZdIY/v&]oe');
define('NONCE_KEY',        '-v&nJT;{eEmq=X t1TT}R|iXY+h0&%d?!nt.X~Dgog+l%j PAn)Rr{^#78-M/C^$');
define('AUTH_SALT',        '2s<VK+qL|O9{V]h9sf;--%bzU[#YzGW>xMNgdBa~^s(sxP,{[E]oVr>r7+XZ{@|T');
define('SECURE_AUTH_SALT', 'W<nk<FoZoIu+OPhT[2XXq(EXTt++w>jzZ,SVseaosy0d;Z->eD-/%cPE<3#o#^k2');
define('LOGGED_IN_SALT',   '%]|Phpu 6|=cR h%zdXIUzXshTJ}D96Ysh~=R.R@+o_t#Ut|J>GuMNI>&ADoqpYp');
define('NONCE_SALT',       '+{I|V3KwE[fFF4>=5V;A`}XV6*&</8MY,?RApJzO++-wc?..y/7L;qG9s%~a[MF=');

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
