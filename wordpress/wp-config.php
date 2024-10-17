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
define( 'DB_NAME', 'mysite4' );

/** Database username */
define( 'DB_USER', 'Admin' );

/** Database password */
define( 'DB_PASSWORD', 'giveme5' );

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
define( 'AUTH_KEY',         '~qz*qZs+KU~)?f[SI_M- @#ru2v7~?4YZG7H6mVTh_qt2WpYPTUCA>eTqIp(PT{-' );
define( 'SECURE_AUTH_KEY',  '@FLYW#MGz2zgFigQPw{^kZIt$(@!D(j/_u(Z2W]X&8gN,73*q(ISok.FJW9S( SX' );
define( 'LOGGED_IN_KEY',    'Z{/g^wV|{S*#gkltp]9abH~BpI(WR_[g3$%#R eUAhRFH6:R|z?Ny<I!u}4;p$ }' );
define( 'NONCE_KEY',        '*rv:i[$/VaYjg0<?+YW]VaDMlXK=zq5yShZQY?`C57blqNu67A HAysU]P!QajhD' );
define( 'AUTH_SALT',        ',p3h>2&!jDL;rCnJAp:}&D8iyI!kJt<myi<47lYRON|nMzkfOezrL8*iab._BoT%' );
define( 'SECURE_AUTH_SALT', 'ikD0i)Ts>AYM)6d|FU_`1}VLI]+ByL7>d _{w.x;8sJghNML?R@MQ-3-^):<gaW|' );
define( 'LOGGED_IN_SALT',   '.=0EgR0mqfK>{IHruW9c3C_|j#j(:>SlAMe,qeZm{uX&]w8X)s,(B*dBotqqfBYK' );
define( 'NONCE_SALT',       '/ gv)k(:2Ph(1vx!gqC;r<wc^uM5dB~6FBG)}&WWM~Y$g.VG^2+8$M]_T]lDS in' );

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
