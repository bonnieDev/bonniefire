<?php

define('FS_METHOD', 'direct');

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
define( 'DB_NAME', 'dbs13665717' );

/** Database username */
define( 'DB_USER', 'dbu2200433' );

/** Database password */
define( 'DB_PASSWORD', 'l264xTSJkli6EOQ' );

/** Database hostname */
define( 'DB_HOST', 'db5016950782.hosting-data.io' );

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
define( 'AUTH_KEY',          'QR8aP(0GYZVX)qc@=cLv7B*ohIAL}gFSgbU8SGDshA|)a4wAM=!<k<}~`9SFgVp5' );
define( 'SECURE_AUTH_KEY',   'j/i+]YohfN#2|A)/f9Bh,MXBBU/6K]4aHmCh Nlz[(!;!;L2(;[Vn_xGi3>+o<`%' );
define( 'LOGGED_IN_KEY',     '& 90H3mh@|lfP1&Ap-k.RrU%E9.GiH_,`~l=4@h:BKY!ciTs|Vx:U-[|]H t1T,N' );
define( 'NONCE_KEY',         '4F9A`7xuy0TttmOVLZD%JG`(#O(H1c0$75hhWV`W~uccb]Tzi,KQ{bX)=TH?X{&b' );
define( 'AUTH_SALT',         '[o77V[Dsgz$uE8fLO_G&f${&05y&J.r~QU%6P[H}Qv=+%4yHpq,|xTox3mO(}Cr;' );
define( 'SECURE_AUTH_SALT',  'xn#+~T%X`z~FG$6}5j7c(GGu;u{!9}U`?R>50w ,[6KS6}AHb@sfR5&t1hY8uDD>' );
define( 'LOGGED_IN_SALT',    '( AjUS.=dg3:yQHt(>sJ.cG!GNakFyskuLy2wK}Uzc*VE9zoxi!TR*0l3c`!<wmi' );
define( 'NONCE_SALT',        'a;B_dQ6Xn1PE|GS-~.+W$2Kfy3n4)cpR5Sdc5D%;{AD{hnmW{U40lxx:3u;OVb}1' );
define( 'WP_CACHE_KEY_SALT', '%e 0L B_RP,O2<ZXXUX<c1ZVzk](gHd81ek8v|b#-idXA.]2nZ3j*N6]TWe7Y&?%' );


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

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
