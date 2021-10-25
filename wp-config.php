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
define( 'DB_NAME', 'wordpress_yt' );

/** MySQL database username */
define( 'DB_USER', 'wordpress_yt' );

/** MySQL database password */
define( 'DB_PASSWORD', '1q2w3e4r' );

/** MySQL hostname */
define( 'DB_HOST', 'db4free.net' );

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
define( 'AUTH_KEY',         '~{BQc2L01i*n*bd{}xa.K0`O?2 ZLb/]A!k0.&&3,=c<Xsgb/YCcB)Kw`L(0Vj+Z' );
define( 'SECURE_AUTH_KEY',  'zBf[+]qN,I<|kiSELqBsGrs~rN4J4N6iYkpJq_ew<VPr?:OhUcL9)lus{~Wj]]xc' );
define( 'LOGGED_IN_KEY',    ']dbok2a#`ey%COSM3q?(pl26N+S{eqg,O3DL4axnyh[POH^>E1}8gout[+#]oY;8' );
define( 'NONCE_KEY',        'd8NFh.t4ADu 3to.a|Lg_^|LH@Vf^TF^@,gUh<cK%K,uOm3&a?]5,}ZbWs%YTFPv' );
define( 'AUTH_SALT',        'd&THJww~+#=7+rIxbA&M@2,<T?}]G]24_6OA$H?~?#gm5&^nI)t<@@L:9I,Uv%5F' );
define( 'SECURE_AUTH_SALT', 'r]]-vXI `+wDYBTjbPIsC0G8u7#S:hXy|O%G/kC+B@e~v]&r~f6I.X2:,,N8Bjt4' );
define( 'LOGGED_IN_SALT',   'slw0b6>m~Q,|-vFHZEbR<g Y5[ubDv}]>RLW=I?GtU>co3^^EV{T}/#zoIW:yklJ' );
define( 'NONCE_SALT',       'agX&r~W`F5YQ~q//mE9Dc*[NpD|>LoF1 `c4X@YGK7,Ya6Z[qj93{dOj`GlA0:1]' );

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
 * @link https://wordpress.org/support/article/debugging-in-wordpress/
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
