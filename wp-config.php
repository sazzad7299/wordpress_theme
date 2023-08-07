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
define( 'DB_NAME', 'aitsofts' );

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
define( 'AUTH_KEY',         '(-Ds 5 gtH$W[}8gJO!^Q?ZGuQXLf6i]MCP3.S!(KB!V?2.h}Gc[:yaD6W*VjrXe' );
define( 'SECURE_AUTH_KEY',  'L8nSq$>z@7{=90q?qU,EPMKEN>)4i^X/8zeDG/J2+F^Ava=q9)B}d:Cef788=]w`' );
define( 'LOGGED_IN_KEY',    '/)z%bpR8#|np5$`K]^0@i[NLwC5S-tGNwP[xF K8ojl,*7AH~4z|]?Rc`5rrbf3G' );
define( 'NONCE_KEY',        'PHA2S#inD1E0Ockg}64B6ma.nxb3 MR>IRCMA{nZaU9]kE1(ePbUrMhvkZn!B{PX' );
define( 'AUTH_SALT',        'T6 (;3A@%52cKVcax~w=F`-)=d<~)/th4tfo:hnL{sEzV+`#$MJLEh1)M9n5DXx6' );
define( 'SECURE_AUTH_SALT', ';jL!Zqxj|Ag}/KgV0B/Vo^@<C7p(33Noq5HIhsAXEyh2/^~dRS3;J8>veh`D9xSm' );
define( 'LOGGED_IN_SALT',   'd9B&,HO]NkM}s4F.VWy4:%:w#I?K >G;30;{N0C,oJbh<>E*E-|qc,tDvEB(FsxK' );
define( 'NONCE_SALT',       'TKO&4lrf9a:ju?e6?>([fe,k%3s@wh7lgbfq(QYi-LD;H#?&J2y|g5FaWwj9Pl>P' );

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
