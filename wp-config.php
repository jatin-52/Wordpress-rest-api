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
define('DB_NAME', 'wordpress');

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
define('AUTH_KEY',         '=:6CW/I.(%0EgmALP>U?uRSP/F7{Yw;dm]zLL<!Sj@e FCsGE=99-}H+Wj$L@KQo');
define('SECURE_AUTH_KEY',  ',-e&!, }Kuj6jjZ?q;9e:@5 [Hu!%g%f^/ %R)uY#sKu?%&FsOMVM%SGr0Y2!Y)/');
define('LOGGED_IN_KEY',    '{(@8n_S=gb#F#9f6L$|Fp,Hdk^BP@D(e[*%a.[kSF[h#Z0y=0M1L?s 6+M5)av6Q');
define('NONCE_KEY',        'R4SS|JDRf3wchsivdiOq:*&m>+J@rFMg^rE5V2.24y*{,8et8&LHn qbH9VXZ>>P');
define('AUTH_SALT',        'aHq^~Cu~vQ,_&+YI-x2^u2{0g^6ldshY`Nb?` >Cl-u@[$b}DI_{e%*d}Ep[Q#N2');
define('SECURE_AUTH_SALT', '^V$/E&fE9hF1Fx=B77P>-&dgyD1SPY6GQ{e HlDx/2DumlL&[425ijGfF@s_N3KZ');
define('LOGGED_IN_SALT',   'YMKx~7/!PGQ,S*@nEH3CE:G(ryLu _x}2YJ#-htKd}_e9]1jq?Pfp5FGFo=-[2Ur');
define('NONCE_SALT',       '5_AtKbaUM^e`1;tqjU:]fWM/Akfo!#69x76OX#~#hx<ugo5R] w|Yy!KDYX*jxfU');

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
define('WP_DEBUG', false);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
