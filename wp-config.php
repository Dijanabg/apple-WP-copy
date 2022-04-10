<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the web site, you can copy this file to "wp-config.php"
 * and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * Database settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'apple_domaci' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', 'root' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

/** The database collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**#@+
 * Authentication unique keys and salts.
 *
 * Change these to different unique phrases! You can generate these using
 * the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}.
 *
 * You can change these at any point in time to invalidate all existing cookies.
 * This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'TKa+7sd.pw-&<4b*U&>}h~cmY_%rwA8l,J)T,kpWvsWwO#{!w~=w9H|DM?vsh.Wt');
	define('SECURE_AUTH_KEY',  ';_V`!I_i]Bb<4j>  _-X6Sy1X$akL!:|{K,a^If<m17mQ[@K#a0O&sEVPS+GP;RD');
	define('LOGGED_IN_KEY',    'Cg-M5E!=kxwe~*Y+yXB,a(_nj2Ql3I5_J|%p0S]bU]qWjM7u> !fg})]ico|!xeG');
	define('NONCE_KEY',        'cC`xo%>Co]t+d?GU?B@1A%qBammY45C(C(zY-W]1yR3)tt1T4>z;Lz9+S):`}N?p');
	define('AUTH_SALT',        'A#pT[!vTIu;DD|7jqul,G%]w`q+a<`p^9#j+g[cced*H}6Omd;$bR1-)o|XbP!fM');
	define('SECURE_AUTH_SALT', '38rJX^Y~PllV`Cz#`/?k zq<ygvL~;Km;C$`E,S5,AqmN`T}gA(`2)RBzhQ.BLv-');
	define('LOGGED_IN_SALT',   'm7SZ0U_ZT,TPc~Vh%+:T7g6BkE*k]Q:#L@o-]%Tpg_.QW6zeI_!:f?wsA]l@.ZaL');
	define('NONCE_SALT',       'h{>B7g;ZA?%?[I&z${iar|!i1D>mdkSI$ol-Re?F.s^r-:qG(~j9G|->d]N)v~l~');

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'a_d';

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 *
 * For information on other constants that can be used for debugging,
 * visit the documentation.
 *
 * @link https://wordpress.org/support/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* Add any custom values between this line and the "stop editing" line. */



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
