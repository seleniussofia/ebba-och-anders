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
define( 'DB_NAME', 'ebbaochanders' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', 'root' );

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
define( 'AUTH_KEY',         'Jb(q)9:t;zuhM}*c&*&oz<;;nwV*x(lAHI^<-(s^e##M_2m2v~RBNHgtl:pvO>Ia' );
define( 'SECURE_AUTH_KEY',  '@Gy(ie;tVx&g}?6mWxwSu%}M`2qdSc+U~gWw-i(?:7I9|w$~h`tx;W=TyWVQ%qzF' );
define( 'LOGGED_IN_KEY',    '|LFKd(0$v3g~)JlkcSE|G@={HmB$c2a8U&USUaxJ[2[md[&rVHg*^w!t%gh~p-nt' );
define( 'NONCE_KEY',        'GzrOlil1T?2Up}#-ta89;%~Bi8d)^X$(/=U*&D{4jE<bO3}<NXwnf<gw0K.~oa],' );
define( 'AUTH_SALT',        '6_,&`yYI*`PhabbT=wGW,GM!q{R3 Nc*vi%7-vFy}1.1x!-UiWzCAtQ[?Pd]eo,J' );
define( 'SECURE_AUTH_SALT', 'EbEIy9J=&O/+LJ.qX!iRKPAzJJys B,*)pm^4g)6{AxJZ6( xe%s~T7*Z@+zPNf-' );
define( 'LOGGED_IN_SALT',   'H;9b+S59cvn9MsGHG t<Qdd2?0yAcq1HRFmf,^@%!_3^$6Y-Ug9 :NSw)4`?e)S8' );
define( 'NONCE_SALT',       'HsuGkL<]Nfsh8p.NV<&H<eV.j1J6zMk[vtM2fYCsq(KWqug[ZC)Vl//Iv,&dq<v{' );

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
