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
 * @link https://codex.wordpress.org/Editing_wp-config.php
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'ruoubauda' );

/** MySQL database username */
define( 'DB_USER', 'ruoubauda' );

/** MySQL database password */
define( 'DB_PASSWORD', 'zxcv1234' );

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
define( 'AUTH_KEY',         'qUn-}Nuh2O =MaJ(>kEMdVBV0~,O&$BJ$<g }dh5xvjt Z}@;w_,>hdil{:{qrFn' );
define( 'SECURE_AUTH_KEY',  'kl~J:]<Hb 4do?9LT35Kd`1_4t4z~-Z!r.gn`c!vT!B/lO6PP-*U2v@S_E7{L@(S' );
define( 'LOGGED_IN_KEY',    '49-m4t515W)y!BJ~ f)ocS46pUq-l)W2[7DiAItyg9lPk^?TJUgZTUH1w#;S<>#P' );
define( 'NONCE_KEY',        '3Z!_fUMs0a0:z$@nTjGB`,SDN=Dr5u{RS~*c/n6*^Gn~f4lK?VcKlrCxf]L3IsBt' );
define( 'AUTH_SALT',        'o-U$w7HBdL!eU<ds}z<WDnFW$J`jHT1l&B-Yf1dCzqt1Tz]kyI{jj?%2t,;8ioIG' );
define( 'SECURE_AUTH_SALT', 'ca^W4Qy( =6$/|}v&~FwHK$&^trr&XTgYlDY^@7!FGpM4n$3XFqmR&.kM+;|ahdv' );
define( 'LOGGED_IN_SALT',   'l{_~Z{Lw*|X#HvFr_m/K|mog{n7N{]5lMw8yC;k`va6NYUnN C[M5#9@W-VXLlhy' );
define( 'NONCE_SALT',       'WWNS&{})eYkV*oB*^|59A9s/^WFxegeFnmdG^6s:LeW@Y(B>,%)I_& XG7?<]=wP' );

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
 * visit the Codex.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define( 'WP_DEBUG', false );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once( ABSPATH . 'wp-settings.php' );
