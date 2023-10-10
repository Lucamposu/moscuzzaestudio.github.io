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
define( 'DB_NAME', 'test-wordpressbd' );

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
define( 'AUTH_KEY',         'T:2`496z&5S8ge`t8V2Y/>HH`vOeWZI#_O7Qs[gFDtv3P]B,HB.Wb&3$<f!Fg7|E' );
define( 'SECURE_AUTH_KEY',  'KMCF4x[kl2@-Ko)<`MGC#Q!MpcPOli9qc1S;Fbkk$<m9jW^nl:^!#NaN7B{T-3]0' );
define( 'LOGGED_IN_KEY',    'M5HtI-t=Qx:QhCX|!nG@*)jinz,8cv$y{XlIBoD^ S@PIg%;]!IxnP:/od5cRpYx' );
define( 'NONCE_KEY',        '}m!#c_,1uc;0*Pj]T_Cjg?`;Fikn8*N?_yElQOE<<@tN_1YZ5*<G[_K%MlcTT!Me' );
define( 'AUTH_SALT',        '!$$K9<iA*g44F0P}c9J[DfGX%Ql4YHHam],g%D+ZYQ<Dt/kqh-M0Ej<N#(LSwyCo' );
define( 'SECURE_AUTH_SALT', 'UX&4n5)nSS[o/<$ikiwKmhTV~%gR8&bsNX3&DC~oD $g|I}ijdaXaW-Q=C0{^a`.' );
define( 'LOGGED_IN_SALT',   'J/JH{%bUMMnwYwV*NS;bmxtn0-Qn_x=~8il*l}=TRVf2HIJLc+}.;}9*@P*D56g$' );
define( 'NONCE_SALT',       '*?p=kEbOJ&xw%JXBPN4Q>#;&5<H(W6wXZ>eiY5nF7=q)Mk@+1P7Dk7<;}pnRzn r' );

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
