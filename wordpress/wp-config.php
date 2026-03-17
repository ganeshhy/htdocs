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
define( 'DB_NAME', 'wordpressh' );

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
define( 'AUTH_KEY',         'TAE_Qup)L6A=uhp)5ezS)jw+m4Zg1pi]WDDnG3vl8=zI C%^|@7WFt15>OdJktp^' );
define( 'SECURE_AUTH_KEY',  'j}r[kORE/To*eyh}Xs*TMV;2g<:Lg@0K_-q5G# QQ}NH.#J@bqY@]lUn,~HscmfH' );
define( 'LOGGED_IN_KEY',    'lv<e3.lFAu4!TFDm-`cyT[*A!Cr?^|UzR)6bo}J$IdQz0B}6wWL8P7_1eE(^D-6(' );
define( 'NONCE_KEY',        'V{9,iU.#Js:05,r 0C+0t/E7#gB5J+FOzM~vQK/O}{;Ouk2R<9<^z(DQ+b9#hj74' );
define( 'AUTH_SALT',        'qv-)LMS.Y7k=UTpEc)TX_D/$&ONh_]@SC~1&(O@st6$bYDtIHHRP+a24UBtu-wxE' );
define( 'SECURE_AUTH_SALT', 'U83>E:$z7}9jEuah[s%3j!<z)T:4@MSf~sp?>+E(#14$@3DJ1R<v.Iq>),p`p2-4' );
define( 'LOGGED_IN_SALT',   'Uqxn:~Xa@eWATPx9T,fxR?{#sC9a/FI&2)4.EjBXW3S.&lJH0|tQ<}pa<NHCE.YP' );
define( 'NONCE_SALT',       'Gg :YgABRaF+HeyKO~hhJ<+I1mc+fj&Z:.qps|S?5+eE^h|q;E3)[*Tj(Q&<;#gR' );

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
