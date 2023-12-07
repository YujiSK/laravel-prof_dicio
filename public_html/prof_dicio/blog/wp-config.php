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
define( 'DB_NAME', 'yujisuna_wp1' );

/** Database username */
define( 'DB_USER', 'yujisuna_wp1' );

/** Database password */
define( 'DB_PASSWORD', 'Yuji0115' );

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
define( 'AUTH_KEY',         '+D?R ?dX+Y[1#I2*Cn%y&73dlTy0y5 ~ot_rxa#O$#Ln.Ra@!%Gk{q LyG*Y)%!.' );
define( 'SECURE_AUTH_KEY',  'h7iv,i^*gz7g,O@TnL 9J?Q0S$G?*%fpkujL(?qYtNq!I1&|1_[5RUG#n55w#3Jx' );
define( 'LOGGED_IN_KEY',    'G4W.2!c6K;.M8F{Wc76LOt:H5Q3we~FziR)LI#j[$]4um~A@<V}*cxE=%p0>rBk9' );
define( 'NONCE_KEY',        'lc5>FT.&^`wha0MzX%]04gn?A <qhY17ety#7!j>N&>#M`+jq^@1A9o%Rai_>p=.' );
define( 'AUTH_SALT',        'ULh+MV tfYs$[|!-g*W<bB&Vtp])dH$d:3G;*?aX[1Bh.5wp&d-D7Lzm;~|WFtiv' );
define( 'SECURE_AUTH_SALT', 'LCiqdpNdq8ANf=kOR3)ITONSEm,Kg9|HuOI.dwEDl>*5EFTcwCdN{Qx:B{7izf#Z' );
define( 'LOGGED_IN_SALT',   '<T1qAyOko;4:itE]]c.$!})h7[c/ee#~L?#7r+sp F|aLVm_N-CCx_kP,i_s3{q2' );
define( 'NONCE_SALT',       'J!OJ|!z=[JuryKA 24j)aIIk-duVmmP>?>=(Dxz5^~c3t:@)|3vUh-RQGymjn1&r' );

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
