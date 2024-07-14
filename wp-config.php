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
define( 'AUTH_KEY',          'Fg?yzBi,&[e{PW)`Ev}K)$;F;[-j2%[d~^co_h,*}e>+AcO)<m]<2~UjH[IEiz1D' );
define( 'SECURE_AUTH_KEY',   'tM.]zsj5,z$Z_fUh}YL,qZWEmXjPkDo3L;E?OlhRzB$-?ym8u>)Fi9;/wt]%@iay' );
define( 'LOGGED_IN_KEY',     'bDtlg/{tmQk)Z8IKU9({]fyY^>[j!e!y&ThXxj*uoOzjdNwf+i^>,I=;Z+l_<`aL' );
define( 'NONCE_KEY',         '~*cIzJ-6>FmynI6pg/~y.!t #m=^[3}]U}l9y#[NN1QtKs/Hm.KC|RR+n0[tlj]1' );
define( 'AUTH_SALT',         'l<XVB(bmu;<;s}LKXP@mz%qXRNgS!B=[F%>;pU~RUXNIzt)0U&AYgKI$PYe-~Tru' );
define( 'SECURE_AUTH_SALT',  'OQY0+=2-jz-W%zS9YBQ}m* wB[9OMpTfOd,MJKAm)`lW/bQf|lt3o^>X,XT%ee2}' );
define( 'LOGGED_IN_SALT',    'q5V/TeL9D<sw0;V[Z~608X(KMQ$,kr[d@guiEigU&Hh~qc6;i@5bzA7zwY<~AbX3' );
define( 'NONCE_SALT',        'G=])O>Sv6LVs_W=Mh1qG]fk|c(m.SQb1n{E$U@hNbLQ-,u0N98?dMNe{+$2`e42z' );
define( 'WP_CACHE_KEY_SALT', '%Qd$G+e{(D4fI?mbxstUpY$VW6e_{k ~8UeY$<PYos7VeI1u#J0j;r}7=nU[T9iu' );


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
