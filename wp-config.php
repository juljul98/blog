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
define('DB_NAME', 'wp_blog');

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
define('AUTH_KEY',         'Cj{ sVCo_d4g-cgT`we#yY!IOljLV0^)~s@upLG~r=BV-Z*hs)rf#Dd+T<|(fd#L');
define('SECURE_AUTH_KEY',  'H`SEHTd.#Z^NeK9 P|?6nBvccwK+xRrp>($?.8t*XItIS5mRG#:AN55NT`0b7*u^');
define('LOGGED_IN_KEY',    'vX4wXL=?GKKA!Kg+vPNy2zeL1%=3!_e)>U:j^Fpa{.[bz|WGKy@,ta{qn4&nRF[>');
define('NONCE_KEY',        'Ca~dn7wAvUP1&.*/ %-B;/Mn-Yg]4yTXIu6PI,#3ZIo~hF|Ng(B1=.Ld=zjw|$j3');
define('AUTH_SALT',        'ww70mNXDhvjs% Zixzrh~OQ|A)bBa2|Ob4 o_4aoBUxolRyK|E V,%O-rGq`9in`');
define('SECURE_AUTH_SALT', '4>$eWMkij#q,4qC)0#FN&/ Y~gn8x!O_MOu3DABGHa*Dw()|tE4rGVm7<adAYnS#');
define('LOGGED_IN_SALT',   '=pNwF]]i^7]Y?8LZ*OUjGbA@<nDMfiC(quZBQdH[]m/#9$a$FtA??g~ w|Q{+8[!');
define('NONCE_SALT',       'Iya{T13}Bk+%rqJ^|Ul;Ed~{Ctisi3HtoG$dT MhvyWgHyZW=Me{CY(l=7S[2itM');

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
define( 'WPCF7_ADMIN_READ_CAPABILITY', 'manage_options' );
define( 'WPCF7_ADMIN_READ_WRITE_CAPABILITY', 'manage_options' );
/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
