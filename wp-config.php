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
define( 'DB_NAME', 'portfolio' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

/** MySQL hostname */
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
define( 'AUTH_KEY',         'OYJuH*+g@jFMBA`,&GMOa5T UDCS0#sOG#]Q>!{M>dQM6(BN`goXHhsMSh.V>E].' );
define( 'SECURE_AUTH_KEY',  'CwdM&d^i)!j,yVa;+[+Vr^dm,IBIT$Ih)*g6Aa qmet7kr`+QrXHcumzF%t+GnL|' );
define( 'LOGGED_IN_KEY',    'P?eKcsL<tG_du+jNlrz,CQ8g6i<Dywb,$8YbVyKpK|]]{FoNbf(T^yt-WBtEFY7Y' );
define( 'NONCE_KEY',        '%vL)LK,*7m@Uk 7#qy})K)Bt#- 0jpW=I}w5NC$(ti:!ZiKDkP*4*T#q`HblPUR}' );
define( 'AUTH_SALT',        'DzIi@5r.+yJp)NMxxCw68d0hJB:)ceJvs~IC]ufk>M%h^6dOV~p*ja8}S/f%!X|E' );
define( 'SECURE_AUTH_SALT', '(ZB%FpNJp7V>K9]+8gXg/#@`NB3(u_p+-?<-#XL R>|BU(ZHoOZbC@/yHUR>OZ]c' );
define( 'LOGGED_IN_SALT',   'q9T$TvSU{ti1+z!Su39.`oUC`Ni3(%Cv][Ma;[XU6OlddonVn!F)4X_`-|,.~X@H' );
define( 'NONCE_SALT',       'T+K(&u %O!1#nm]9Gp*]o:nzviihdj6q~`}?of_4/>9joya%mIPIN4,8MQEE82^<' );

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
