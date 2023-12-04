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
 * @link https://wordpress.org/documentation/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'practicaltest2' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', '' );

/** Database hostname */
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
define( 'AUTH_KEY',         '/Q|5*As^uYAG-eK`*WzTB#!XHC.~&g^Cz(2HD%|s(q%]/yO&{:kmOqN3lrUnW,H?' );
define( 'SECURE_AUTH_KEY',  'unq935]pRT9>3cOlgA]Bba1zgj^2-uSm{f5r%N`24@!<Lo0oh,e>tem; [A2PPVK' );
define( 'LOGGED_IN_KEY',    '3pIeV4SFPCwLjTF!:Od;^-(]O g2St<Jlcuqu|U{jE+5CH2`; W6^c_v1Y7SsZ=?' );
define( 'NONCE_KEY',        '#1oacTRWKpLp1a,8bGawS^I|`r_vh,dE5]JPBC$xJ10UOJ&)jJ/^IH56,&#@]8b4' );
define( 'AUTH_SALT',        '4eP`i>2]H@7e-n-q@N.2&>NmkIAn9{[A3PYe@tdn&Ca8@axh0uqamCEZ>4@L7SDK' );
define( 'SECURE_AUTH_SALT', 'd^J1m? ]sQvc-pO1_NPk?^N0z0+DTvt*O[EJXjnTiO.{C^7dwjVhVl}$WKGO:; b' );
define( 'LOGGED_IN_SALT',   'njY?fq0fwe25`8($:6FPlIJQ4y(`!}UOFo&vL LM?EOK<V-x5-&z0}]n?Q[.gr!Q' );
define( 'NONCE_SALT',       'SNm`<hC(YUD!TT?h)V-[7B2F2CTY_O!MxPGQ% r1S?O2:|39I22S~zpH)w9{vu6f' );

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
 * @link https://wordpress.org/documentation/article/debugging-in-wordpress/
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

define('CONCATENATE_SCRIPTS', false);