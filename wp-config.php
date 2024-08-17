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
define( 'DB_NAME', 'index' );

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
define( 'AUTH_KEY',         'bE#)t00N__M}zx_joFBDRx#3LS#?ZhzfN:RZ,<lEcS]i3h@[otD+F19{#8KeD*-`' );
define( 'SECURE_AUTH_KEY',  'u6O (R8uwNWH?>(H?K72z3%a3+&=c20e)KIrI9gySr]1@qQ@2dtSs*JKYdz=r4Fi' );
define( 'LOGGED_IN_KEY',    ';2mbxzI_b35s#hsR+ik?+a=ife$Jh/Pi?w)Q>%{rn_%oHU}{:g--uH5(&n/7)F;C' );
define( 'NONCE_KEY',        'cq LMKku])ZvaF=~Tx8+z9;;Eu%6n|#](vIb!GipLNR9aZ{4l/n&9#qX+*-N[}&o' );
define( 'AUTH_SALT',        'c;_P,?w/&, ]>x&NHiSmy&fi1h~:t)=ty+}[Z}T!j$MeKS+=1Z#gDqAMlGX6xA~s' );
define( 'SECURE_AUTH_SALT', 'l2*D%UZ5V*{;=!> vtfDG9&oRNbBJ2I|{_Or;xq/2@&4wTc#qs1MFHv&#{ZkWn6b' );
define( 'LOGGED_IN_SALT',   'Pv77};QRGR.hpevY]t*}_{:EHsWbYRayncl &BLq}d n?+QMj,AHa(.B)+q3e&yl' );
define( 'NONCE_SALT',       'VuZT/|wz56s-5W72xH:8/3 + bC$2>|%;PA9O*7<@KFHopOX6ntfoYI%euI8W3],' );

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
