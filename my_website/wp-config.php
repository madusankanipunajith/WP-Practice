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
 * * MySQL settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'my_website' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

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
define( 'AUTH_KEY',         '%g|w{<X:jWpLVBCTV];8B`xPC4(&fxD-J$_wf)YUnG#F`^!da{2m6DH:g[@cxvGr' );
define( 'SECURE_AUTH_KEY',  'kJP[l+Am50$>Q7x#(|_OMympJ/#;xf{v.4Wg+E)S1w=Aium!kkPs6Tb{@w[P-Qz~' );
define( 'LOGGED_IN_KEY',    'NZBAPt!XqK#8Zh3tO%|~cioo<Rr!ZF<>E8ZY[Yb]J_tTkh7Fw/!S|$ix%U_i>TPo' );
define( 'NONCE_KEY',        ':|NnDhHW(H!)O4`8wMJj:#9.;Uv&p<;!&G7uJx6vE-o](R}Cb*ONe6j5R*^$ul7J' );
define( 'AUTH_SALT',        'DwpML#jEQN5U|qx`pM(V8u27ou3c3JH$M*EWfv|lNnHp|,p~1drXyryuWa>!a51g' );
define( 'SECURE_AUTH_SALT', 'gH/a{UAL/AIaO4Zb;V*S6PL5FeSa;0+L6}{IovF4[R>%j);R.lMV)I7_SUTM|uw0' );
define( 'LOGGED_IN_SALT',   'C{K4kwIX,ssiEbv_O?,CVGApXlr:_6<BW~L&<^3q8dXeQwuV$BrW=m.5g_`GF*:B' );
define( 'NONCE_SALT',       '83etergUHLdEL=1pAU[oy8^ jIc6$FXe/#_YDWl-W>%o:9Lh`2GWU!ajlTR`q2,;' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';

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
