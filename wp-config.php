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
define( 'DB_NAME', 'wordpress_db' );

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
define( 'AUTH_KEY',         'mkrGok<ua??K_vQv&8+|6{>t:A+qhYDE|Y%y;XFdXe|w|@]$ZxYmqp1?z/T5e-4)' );
define( 'SECURE_AUTH_KEY',  '@X%PaK9$%GWP}G5bE@VQw||%_Y-a2OCAe93x&k->a[g%a8tQvnuV*cgh}%x(fH<u' );
define( 'LOGGED_IN_KEY',    'vqTg}}GOTRc|=zBYiG3N(w3xiQ6 NBE8FY)$F[gav%T`0v$MEZ>82S$l!tMYZI<,' );
define( 'NONCE_KEY',        'Oo^afPO(jg_|F=w3xix5,GM6H?%)li|ztiOpMrd2P]qi;Vxd_r#EaJw(?jSS4oMs' );
define( 'AUTH_SALT',        'n^B 0Hq|al8,NiLpL<smJjU,0*$@{tXf1LZz^Pdqkz+Vm&j#z*1Pn9|hJf37yYy3' );
define( 'SECURE_AUTH_SALT', 'G1X67W~N4193E4]$-cJR|d<p:bR_B?$[/|p#XrxiW~m,.<4K->[^iJ3^ZVs.~Vpf' );
define( 'LOGGED_IN_SALT',   '_#Fu{j@TXV:6zH(E=QD=zzj7Tnj$oA5,KAdr$Z,Ec*?fVC5O>rNNvW40)ef!ecpP' );
define( 'NONCE_SALT',       'RLPfBc[^(A#pFl#@i3fklpdp{{^#3#T+ih-Kkuq$3xV7H3B8YQ?0I`*q)?~/_?j?' );

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
