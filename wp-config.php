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
define('DB_NAME', 'blueorigin');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', '');

/** MySQL hostname */
define('DB_HOST', 'localhost');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8mb4');

/** The Database Collate type. Don't change this if in doubt. */
define('DB_COLLATE', '');

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         '>~f?Kn`-yK;^bIE,k7Az$9t|W,#QIE^Ox|-SiMiy;ajAT~?-v9r0G}gk-u0C`Rwq');
define('SECURE_AUTH_KEY',  'Vx2B$8pnrwow!V``n!(33Bc}A0y21Bq=mT&0-v+a)dfFt&#V)WTWoE4p|HwW+}X|');
define('LOGGED_IN_KEY',    'u(P-iJvA+oxG&Yjn9=mn{*X3x5QRgHmLr<01]Y-D1*[ZIo<jT<&XG)mx-G4:r:&W');
define('NONCE_KEY',        'ydGa#>*]>k*6<P0,*qA<>3-^A+Ko/YBDtpC;wAN<-1=K8rYx@x>>&,Ra!Y(M&>Y$');
define('AUTH_SALT',        'KUPB}rLId,PYkG5EO8IYxHa.K_B^+`nA8W0#rlF:}_;PqqiAh8Nl2/*wjm[2 &@0');
define('SECURE_AUTH_SALT', 'yP|0Icy=-=li,8 H7EuThl_%Gd_*k!HJp-wwOB/-!-.E+/AN%/F^X428upK[AdaS');
define('LOGGED_IN_SALT',   '>G6_oF?xODJ/RC6mRRH+p/C-3v&9^p[AC+</+vWTo`CS$qABCyC knCFKwZnlt#8');
define('NONCE_SALT',       'poFebs8pC$rPbts[,ZXjzt%~&Iv+mZ|UQ%um7IB,q><zihLBpIn|IH|,4]^v^Pm=');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

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
define('WP_DEBUG', true);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
