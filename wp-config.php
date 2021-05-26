<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the
 * installation. You don't have to use the web site, you can
 * copy this file to "wp-config.php" and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * MySQL settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'wordpress_th' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         '9<#+H~V]JQdl a6iZVKSS9F-Un?T(=0!#h-L]4cO-[;c%S{<CFP@Vz6=zI%z%PO ' );
define( 'SECURE_AUTH_KEY',  'Tu]}g787YR3oTH?GM@XjWVkHO1dS$:dqHu]` ;zBKdX*7RLEJ8:$+p X]d>tKDJ2' );
define( 'LOGGED_IN_KEY',    '~l#Ykgk%;5y27Qh+X[03}cydp se%Tf8oV!O]h}Qg=[.ulmq`gxFWLCj4>=u`Be)' );
define( 'NONCE_KEY',        '#le)DEHCON-757Y{,)kQw%QRU->H=B0.o7F)5Kv`M+YYoOVOn<8`&7BPy=F?&%au' );
define( 'AUTH_SALT',        'oLsTz*5=b&7_RPuC7sjTF!4 TFD?l`R(]9~<SF/gzv<hQ*67Kr! `b<t8znF||Z%' );
define( 'SECURE_AUTH_SALT', '`HC6wT3<k(0$LyEWFhW<Mnt``;c62a,q%E5xy+qzLO~yT{NIMb piz$]VaavCpO^' );
define( 'LOGGED_IN_SALT',   'Up`DPrd%Dyl(sZVt7Q6S+r-2Eh&_D%7:d~l}O,`u,RwRko`TDR!nlLHzg} ?R.%]' );
define( 'NONCE_SALT',       'F/c8&PG@NjH6g(Y^@;`vx;^j?Syv*~1iDv>=m( 9WCTPgm5D}WM*JA[!!?Eo_qny' );

/**#@-*/

/**
 * WordPress Database Table prefix.
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
 * @link https://wordpress.org/support/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
