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
define( 'DB_NAME', 'namastepavilion' );

/** Database username */
define( 'DB_USER', 'namastepavilion' );

/** Database password */
define( 'DB_PASSWORD', 'pav480ste55?' );

/** Database hostname */
define( 'DB_HOST', '127.0.0.1' );

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
define( 'AUTH_KEY',         '`G36k ,IBL?@WE!B iC]% xe?dfof85@ c.w/8!-mbrL5h5QtK!;,}ZGv2`3/H[d' );
define( 'SECURE_AUTH_KEY',  '@SvH)bxzYW$Zjc[g>+vAuMobSE@4rhG7f2z34)YGN<NL-Y9+|uk2_G<.zC>|u#B:' );
define( 'LOGGED_IN_KEY',    '[4$I.kMfcZc}t6:8NfZX&]?kg.Tc6Cb0U/_)!:O,=gA_8z?r-#ac1vCRKhN$`s K' );
define( 'NONCE_KEY',        'fG*A;+4wSjXuW(5>WDZV[*M_?;zid[tXk^qK]>bJdR:R|-b3v ^63vqfV.=*fB4O' );
define( 'AUTH_SALT',        '#)2wsuohR{C&E/i!Y/BccYL[OwI}5(.+ZX].]m-_NnRK1+0Gxr)3&NQAs(&Nj0lW' );
define( 'SECURE_AUTH_SALT', ']B6,PZizIZ0>:|G<8~ gVL~16;w,[EGk1DD+5M~NO?l,%v}Um:#9f;oT,vPIiu!A' );
define( 'LOGGED_IN_SALT',   '149+u9T;H>=XzlX62>PV_w<7mtik/r<,-F9KiX$6}1QWzu)a0XM7u;}V2Ul]}}&z' );
define( 'NONCE_SALT',       '?zCo`F;ZHt|?T!</SD2b<N#FNQ8&m^saiF-0v,e+c~|q;NER!<CQ$qHts5cx7DY/' );

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
