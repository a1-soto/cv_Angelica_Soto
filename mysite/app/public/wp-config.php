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
 * * Localized language
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'local' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', 'root' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

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
define( 'AUTH_KEY',          '12KAz}3mT=)>]d*p2j49vM9QdG40BC8e pOk$,C+?Wi{PE;h(iH%[b1[tCd)mp-h' );
define( 'SECURE_AUTH_KEY',   'UQR{kgmzl~Uy^7I0=9PZf[ex|Jiv[}&#<#Q6N3,LQc..tbHa>J9XwF(P58KdKv7r' );
define( 'LOGGED_IN_KEY',     'Z Z{lw5jUf4ch,x$EW`d1l[YBB&=~W4uQLrN)X2X+Jp/L@WE&3.1?PN6$!EFI_O5' );
define( 'NONCE_KEY',         'a1j*`iFF.7&jL^ySX<c>)vOSZ6*?FgX2PRz@gb? LBH>{>&>_s^^pF7x{|LlxpA6' );
define( 'AUTH_SALT',         '=<LS^bS|UE=PMck1dk,P8_R2,~>#Gv,mf#Caw{j3hr%03LV|6)M!!Qut d}/>lca' );
define( 'SECURE_AUTH_SALT',  'J>l.FN6DWH&bQsPQDJVn*GE9=@?Fi$8@zag*&%uxz&t(em-.AzB=|[]+2rULid24' );
define( 'LOGGED_IN_SALT',    'E~r1-5S(oTR>sl;x?RL)QSt6Yck]W?D/L/nq*>TKsw7%?mr_kh >cRH-u8wmUwaZ' );
define( 'NONCE_SALT',        'zG=&{_/%$U/Y*Ia/Na!(8>woqlgR[x`(e@MK`MLYLWUN@>f<,jX5HKYg_ mz,VDZ' );
define( 'WP_CACHE_KEY_SALT', 'sTt<m@p]Z!Jr,8rX<Ql/8 JQLJda-Bhe:7GTW1+,yiat(xU7z.tJ?Q*6]P5_`5?g' );


/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';


/* Add any custom values between this line and the "stop editing" line. */



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
if ( ! defined( 'WP_DEBUG' ) ) {
	define( 'WP_DEBUG', false );
}

define( 'WP_ENVIRONMENT_TYPE', 'local' );
/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
