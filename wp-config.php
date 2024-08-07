<?php
//Begin Really Simple SSL session cookie settings
@ini_set('session.cookie_httponly', true);
@ini_set('session.cookie_secure', true);
@ini_set('session.use_only_cookies', true);
//END Really Simple SSL cookie settings

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
define( 'DB_NAME', 'testwp_db' );

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
define( 'AUTH_KEY',         '*MH_{3=ca& 6)H(h{,U#Iv4WD=f76l3[vs`&jU4-J30=BP~-a8qeKlKf2>hn[2oL' );
define( 'SECURE_AUTH_KEY',  'Ln-6[y!2-Si?<]LTadXi[Y`>HK>b}a+|jW?T<>6|i^4OYl&Qm~lb.cvY9~Spxk~!' );
define( 'LOGGED_IN_KEY',    'atg)$7L,U98J{Skc+?^&2lZu.Lkefrdui:e==wb>h]5To2Vdw:@t=ekoKM0hVHiq' );
define( 'NONCE_KEY',        ']nuTV+W:(,bXC6xCBctNK !UXx7h-QYTQ.p-LqRYnEjU;Bp~TjQ1`WL)25EkByQb' );
define( 'AUTH_SALT',        'F -3<^E~47[T|F}py?)]9n0JIA&4Fuvo 3O6Gsa|%2IwJ5p*/#e];x]K1L=q?4<o' );
define( 'SECURE_AUTH_SALT', 'A]$PzeuuLf$6Mf1:7:P^|/GzXoL!u>a85oB&Ykk3D!A(l5GC|_HIB5gAT-.{vr(.' );
define( 'LOGGED_IN_SALT',   'Fm|-+qGN0s?~,nCxF%m!&pO->#dUh#.)2i?:a{|),l7b{W2o0EW@v iA23a|V0OW' );
define( 'NONCE_SALT',       'd/#G<D4Ovoo,LmZ )c|+,^-zd^.i3{Yn9oVJnpd&HJqZBAz8tOkeh!,~}sp5&Rw+' );

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
