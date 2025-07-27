<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the website, you can copy this file to "wp-config.php"
 * and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * Database settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'woo_tamco_2025' );

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
define( 'AUTH_KEY',         '_6IwTW{zyM v~$@(tP>p>Qy^G]Bq*:Ad6r@u}Gk@g|R&3:!&6 &_u*iwz$W7zs72' );
define( 'SECURE_AUTH_KEY',  'M9LsftnYzb&_)`&zHE>Gx_m<rF&HQuu;zuD69MrZi|:JIm07=.L5t6wC>6i1,J:d' );
define( 'LOGGED_IN_KEY',    'Sq,m7[,Cyfs[jF<>]I)#^dfdV<A=^iIA74ek-{$lp`  #/v$N_hcYwNPcvYxz4GB' );
define( 'NONCE_KEY',        '*DH`^V,BV`>MSZEm86.xt47VW;WdH_![ID6$&a[mPT8e8r:/gK@.7mBt&3xh$l&w' );
define( 'AUTH_SALT',        '`q2;y-uSU Q^@h1#(q.Y.j/?CL$pd_Pb8,i:T]O)aY?pe4N3?T@|M[2B![{h|!Js' );
define( 'SECURE_AUTH_SALT', '%dK.t*PW=K/&w(z?5D[|v=pL-,,(k9,.*2(V_-R>9]:9*/*OOgH06O#lW_MKZ:xW' );
define( 'LOGGED_IN_SALT',   '2*Gm?ak+tSD6e<TNu$6b8 bR<nyMTRPx7H .pFB8<.~t)nL,CqNtp~K]lTy6&pbn' );
define( 'NONCE_SALT',       'rx9-mDhAu?g]AxQi,yt_=f??cKYunMu67=6Np=c?:3_+[DS-#e+%9{G^>Ts)`p?I' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 *
 * At the installation time, database tables are created with the specified prefix.
 * Changing this value after WordPress is installed will make your site think
 * it has not been installed.
 *
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/#table-prefix
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
 * @link https://developer.wordpress.org/advanced-administration/debug/debug-wordpress/
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
