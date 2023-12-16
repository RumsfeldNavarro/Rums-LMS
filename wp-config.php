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
define( 'DB_NAME', 'navarro_lms' );

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
define( 'AUTH_KEY',         'D]8oBqef;n{3Y0ww1GNts<)~?d[x<{1E@#^nh,2`,y8UnL/(IxND>Dd38y#x%oqI' );
define( 'SECURE_AUTH_KEY',  'rdmpB8oEl$MMRN9WVfSvc;v~KT2T)EQ2nME?ziUYZ$!h``YrBJ`pesuHv^Zj%axV' );
define( 'LOGGED_IN_KEY',    '@:d.IJClruT^);$cbm45]q>:6<#.k*XK}5.SD@KzS,z|dhe?n=U$ @h%jE(f apr' );
define( 'NONCE_KEY',        'V]s_c!JlZ!#iJ|[_Uf?G{N:GQkSC(5NtcWthhH^aUop[b;jgCogi],M2~=?]I~((' );
define( 'AUTH_SALT',        'StVRc]HB*Y1%M&7/E_[+6v?4m3L@GGxOiV7W{iTXbVi5QtP-gO2w2(B?M(?SG/{#' );
define( 'SECURE_AUTH_SALT', 'P3CQ#jpZ8F~Yj2}I:L5]]VR=5Ua[cO`?ZQ~,i]YnJ_%#:{FWN1yDC>[HyS]7I*ce' );
define( 'LOGGED_IN_SALT',   'jQTI;281fy7]mhetOFm^T6F]&w-][=k-*4+&*`.Tx#F5O!D #E$e76/5{uJpPa=n' );
define( 'NONCE_SALT',       '7.aCrct9s[Z*{O9&0>bzdRIao[_.|dpLxR~_a2b~>9b0][t?6@f^ip}U0W=$a32l' );

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
