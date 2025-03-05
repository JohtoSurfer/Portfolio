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
define( 'DB_NAME', 'costamontana-shop' );

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
define( 'AUTH_KEY',         '.JtUgTC?),2(5!TxQPAA<[Q`4@*>2Et,4[>/hFK9GNvmD/J4iwNs&6%@7bJm@6<a' );
define( 'SECURE_AUTH_KEY',  '/vYbxFazY5;mFbI?L%%0_eId0;[3O~P,(sqA9c{I2;Pk|H*R<Af}g,o$e9mQ00Ns' );
define( 'LOGGED_IN_KEY',    'HQMG[&zC$>psyHKBlZ2.5D{32_^2<;;@@)BG^4V<m7DqqT`6h=J>$0.Fu8d69m(V' );
define( 'NONCE_KEY',        '.mJ/ltBOy.iIUU6/VSnF#JrFPe~!|e*[x{hK^?& LvR,|a8DlOk1Zvuq,Qu4:jym' );
define( 'AUTH_SALT',        '&<%r9Y6-yMm;lN(X5n,pnGU^C}J_Vff,dwHQi{6ihq2_pN 0[BmVPCp%Z,9C?mH[' );
define( 'SECURE_AUTH_SALT', '~}8;W|u7G]X}BdMt)G+z)uo.HuFI?,lc)hq8.LN_>lx9]/#^5ExhjvOPzIU$|<=g' );
define( 'LOGGED_IN_SALT',   'kO[hsThQY[E< 5[%@!WaIT,QFm00]Xd|z-G[|)fm9l-/>*D((r<)~0?W1Kqk e@X' );
define( 'NONCE_SALT',       'v~I:}]6,gqb:`$0.OQP&y4$|SS-BV{PRn(Q~}dN`@Cm^2iZa)KMm0jknXb549#VG' );

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
