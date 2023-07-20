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
define( 'DB_NAME', 'AllTalent' );

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
define( 'AUTH_KEY',         'M-sOEaLCh>@QB1c]8/I?1d!Hu+KvHy&(K:bpp!((q{8moq6_W(ERmqW_=WLRiP@,' );
define( 'SECURE_AUTH_KEY',  'lQH+FOdL+Rk{<RaQY8,gDhyFY/$M.n}p[/#0F)G?cp/3{q@_f@oG9>1>4>~{HhU8' );
define( 'LOGGED_IN_KEY',    ':=Y38ThY_>,Hn39fXWqaW;#@&]XW0VjRQbVH2$8DbRJhSgaP.)U2_T]?n0Q&JHLs' );
define( 'NONCE_KEY',        ',+Oy<-Y[d;/FjX=Sb/Ks9pYR8SM~fW.:w^^uP&]`/@YH)nHb/aO.INJ4(ArypGoJ' );
define( 'AUTH_SALT',        '-rFtp$>BUtdeR!6@7.F5s%vHW_Pc:Sh^oX.`jMNv9>!ij,:rz.1z]v<H;4XeGRpf' );
define( 'SECURE_AUTH_SALT', 'E+zopp$.k8Cv)X.]Y([$uHnIPIR8|lms`7?QFZ_.FwnFxd)f27`R!WGyg=CPII=g' );
define( 'LOGGED_IN_SALT',   ';;(]>!I2j-|_@ b,(KQS6#v^:hlu+uy**Aqr-j7Q[~8 Sb#MiA{~cGzN1W:[3zRQ' );
define( 'NONCE_SALT',       'X+.nO=G?rD6$62puJQWj;!PQ8EMUg3up~V]`SR;!;haGzBmAtwh_P}s2qkk{MKi8' );

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
