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
define( 'DB_NAME', 'bookStore' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', '' );

/** Database hostname */
define( 'DB_HOST', 'localhost:3307' );

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
define( 'AUTH_KEY',         '#NOWOL1O%3kBYm7b45lU=-`EDhVnhG7.FJ-QH.HXbqf1)G+Rk&Kc7t>LNw<Z+>bT' );
define( 'SECURE_AUTH_KEY',  'MA>v3rv!Txc+>$7+vG;v=JdOQzQI(R[UGR0BMqx|*Cjt|4Ih?]>Iw N+qL./6Xg$' );
define( 'LOGGED_IN_KEY',    'sTO+uVIwW5VJWYF{=;,4gcAUCQHnTjJQ8!(2oe.OJt1[2_L^/&H[WjQ`kyi`Op5H' );
define( 'NONCE_KEY',        'CZA!e[<M~ AEnZ5 (1~@+Z.4BMpHxSZ]XN-q,yQ,LceRmZnj-#d:}JzXlU-S |gc' );
define( 'AUTH_SALT',        'Io:G+rFc>Yyd[+j^IAiJ1.6,Eb1_CT)mJ-HM3F6BE*~{y: |7V)%}9+x)(u`)5%y' );
define( 'SECURE_AUTH_SALT', 'BC^C~^tBxPQo{99Y&Qm3Byk2LtgyxWK[k,Ey=1QnyiKl$j.rEFjpoirh`s2*h JD' );
define( 'LOGGED_IN_SALT',   '`tcO3??W9GHcnYCL<Tl(5}z;}$p!N0gP%(@Ng}W]vJ1CRZ|:b~=+2MP-i#q;}bU,' );
define( 'NONCE_SALT',       'W5[X|TJH,&scqGmrh4Va7OiZYuY{17iqwPB*H{ 5j}yF+_V:d._>GMA|x F8DA0]' );

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
