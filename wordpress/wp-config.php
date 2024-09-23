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
define( 'DB_NAME', 'wordpress' );

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
define( 'AUTH_KEY',         'YAwz{OD4n]`9fH<d9Q1{?={iIR#,; d&>Q}GU/Q[JPN`t@`NQU.d98,&Mm!w03Jn' );
define( 'SECURE_AUTH_KEY',  '1_<:`7Ot^ }{]T@5U_cE/?g!^%?7<3/BuQu.ku.$l<i7:cHIqB%:_:eLc{)#~M6;' );
define( 'LOGGED_IN_KEY',    '5Mk{!TY+&N<eAcLh*}k #E|4ez}GE,~/S58MGk);0.vBG3c2nxcqP+6]zK/Y8&T0' );
define( 'NONCE_KEY',        'AmoD;SMF{:]@mBQQA.<.vp:rBQ54J5d=f~Zx6/9mTSjtuz<=*ZqE,kRJ]#kG|TI^' );
define( 'AUTH_SALT',        '11TUBAsx(Js)G)aPr6Cw[` wFC4{j]> ySE^TF2X!~ (8<uBDVv/{No$9sA<B6nM' );
define( 'SECURE_AUTH_SALT', 'bkT $C15!IVB&KRj?X(*Cdi4S4j/TCF1.lTp7:_:l_.].?>qR8j0&y4k)Iig9gaE' );
define( 'LOGGED_IN_SALT',   'k n3]tChjm?h&,/Bs!ndj$)1:N8X4:E+>s9!-PH8|2XtG,*+WG}^^8d(N)h=|?0h' );
define( 'NONCE_SALT',       'PEL{gG7V_T3s5zx0rjG=i&N+|{3%NBHDV:I^0p;-K%3(yD.|.FXS}KL0vt!@7lGp' );

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
