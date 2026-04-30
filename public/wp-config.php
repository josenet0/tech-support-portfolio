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
 * * Localized language
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'local' );

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
define( 'AUTH_KEY',          'I5kB1EjImBKCHck^nnl+O&n(EGO_w[;*7f!=tNHRpO}&IyjV3A3INkWIP<R]VzwZ' );
define( 'SECURE_AUTH_KEY',   '?FuDfW&ht6kbG[oG%g-0kCq`:oOm#[4Ckcdt+.|lwxBLefp#CWq?#lyWO=n*v|rq' );
define( 'LOGGED_IN_KEY',     '~3|u[58us=+0xC&fik[z].xzI8[ci%^PYJMS6`h|c}#FPyDt{1Yi*(P)Fq.P^sv[' );
define( 'NONCE_KEY',         'yj9X?d!r>)8H71>=zc`Z6mGOxpUQYz6adI[^^_}_)F3JQ@wb7$B-N&;`6tdTI$v ' );
define( 'AUTH_SALT',         ']J_b)Hd|a^ZwShb]*~0:[Zbu8b$m1#lwa#p(#847Va9jU&T4kj=uJHi822.S)@l.' );
define( 'SECURE_AUTH_SALT',  '`H5#RuyLZuj3.4Hfd<izGIIE5p^@F,cllJGUMo]DZRS=fxeT9d^{#0xg+CdKF2{*' );
define( 'LOGGED_IN_SALT',    'oWA>rUOs@.&eg+i,1xZ@&wsl sqL+b:oj#!:l.Z-Dg^br[]{li6T.n`e}W;r4yl(' );
define( 'NONCE_SALT',        'v0e`~Z,Gt8qG<J&.GdC_841[~wF&aR(!ml[eY*Yjb>M`Vfk9MOaCIdTT53Ln#8:*' );
define( 'WP_CACHE_KEY_SALT', 'ZKpFG7aPFoQU#{c>wC?R Q J;!+FL<e@I!P1iE/`;scHFTgM!g`fL=3Kjy#v?N`<' );


/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';


/* Add any custom values between this line and the "stop editing" line. */



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
if ( ! defined( 'WP_DEBUG' ) ) {
	define( 'WP_DEBUG', false );
}

define( 'WP_ENVIRONMENT_TYPE', 'local' );
/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
