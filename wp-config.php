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
define( 'DB_NAME', 'database_name_here' );

/** MySQL database username */
define( 'DB_USER', 'username_here' );

/** MySQL database password */
define( 'DB_PASSWORD', 'password_here' );

/** MySQL hostname */
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
define( 'AUTH_KEY',         'rka0I3S.l0/~#8*1_UE;NU+hki0_tZBG,Vk~i Y0U-T40T0cmCL044>#]1m ? vL' );
define( 'SECURE_AUTH_KEY',  'L1~0i+PWI2~S_=wac9*^HO Jyl7u@}f@0X9^4a45zgmk<@9;+-`}UHzQJ|`RL|bZ' );
define( 'LOGGED_IN_KEY',    '(pXKurXeoORku>Dt3w+-{b[H.GM8F^Gu1?}q_(HO=T2#zY6V>5h6NWL{FCD!(jjV' );
define( 'NONCE_KEY',        '@q3)[2a7C!I2e+*I>i8mH?;jxDZn6HBg!nowg N^0=2<<@`/w#h8pR.0xDWA?Qzh' );
define( 'AUTH_SALT',        '`8!L0I0^Kt=u@]kap{Af9SnUqnz0:~GDI3/,:Az~V.,v]Z9b,p5E^ 3iZ!`rYu1;' );
define( 'SECURE_AUTH_SALT', '0S|]aX,0#a1}m89&V;&=l_RS}w2lpr:ObH)7(4o(H5V:0vT] !gaOuqHW):u7D2B' );
define( 'LOGGED_IN_SALT',   '-5jf@~vnT?{zNZH41nFHzG2Gps>)GeL|/xVcSSO*IU p*W EE`9vn@L;K93m04{0' );
define( 'NONCE_SALT',       '<*hU~loA1g?~OjnF]?8&>/QV7=4>;z:0p!N-ixg:|&z@8I,^GwiC^-M?:OR?LD42' );

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

/** Disable the file editor */
define( 'DISALLOW_FILE_EDIT', true );

/** Define the default theme */
define( 'WP_DEFAULT_THEME', 'thememy' );
