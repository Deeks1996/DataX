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
define( 'AUTH_KEY',          '9FGt|<)k4O{=MFoE#Eb:=_O`{>0xp3m8-DNd&0:iX_]JLJnJ(G7p0O#7`/:Y<K3K' );
define( 'SECURE_AUTH_KEY',   'JS#yyyE.irMY1G3[FAxk5-zTY|~PNzWt0/?3`Zkn(|-tcd~FziB_-g47Lf:fQCvV' );
define( 'LOGGED_IN_KEY',     'HV!%baQT+IL8-%*h(raA%gt./px*E^P-X9Y}S}QKT{h|Fe~EMgzd;A2+RMBx2%AH' );
define( 'NONCE_KEY',         '<,xpjTc?@{r1jG?*OP}]0JMm8IE,v/h@ph)BuXi-L|2Je}(cxbiNnH_H9+w?iQ^P' );
define( 'AUTH_SALT',         '{f@zCP+RiKXE<TdqOs,Z0-B;aJ loH*/Mfk$A0Kwt7R:^:7O(]Bg*[|SL$Rq~FKJ' );
define( 'SECURE_AUTH_SALT',  '+i]Tw)l7&EZzGXt8=iTYPK?c6PSy0B>(*cb1uNCl{5j|<-{JaSPA#x#7d4b,Wx-+' );
define( 'LOGGED_IN_SALT',    '!t^H5vyuo9Diq1LcTsv^#Iury3_AW@5ZHru5>X#P>LU>OCi@::qD{t87iDp3e%ce' );
define( 'NONCE_SALT',        'dFAQEEa {2{3i0[,+8Ht)2~)(_(^0fRBo_#QeqX1O82L7`vHDS#t%dfDOg=J3nJK' );
define( 'WP_CACHE_KEY_SALT', 'Nrb-,GD@:Y! Vgt1)BZ1})wP2SU._qDPPI9TU?GQKtT?wFx^87mJN4Nr$a4W2m+.' );


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
