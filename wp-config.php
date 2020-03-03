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
define( 'DB_NAME', 'aeets_wordpress' );

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
define( 'AUTH_KEY',         '_1P iU/T3b))B<<Z|R<<5:[nHKk1PT^TV4a0P#QXZuQ}o?O6?sQaw p9T]Iz^Mj%' );
define( 'SECURE_AUTH_KEY',  'u_$S} QKaBtb@&%:C]&uXg&GP&-pW4.eUNkGRSLuwBWIH%:Usq=R}rUP2=0GHDMY' );
define( 'LOGGED_IN_KEY',    'e5n[TIq}u34kkXZjlG/O2ctcbY^.b97Glt=nJNo$QovUOjtIbW+Q,vAz[tS73w)j' );
define( 'NONCE_KEY',        'g!)QJD~_p:c~^r`z^vp~3wKrGp8UA]nDqo{2 ijC%XYly;+^s 7Q/PDA~M-G0UA(' );
define( 'AUTH_SALT',        'M8W~$&zq(e~9]Az{:Yx&v$@we{f*uXA$[tM@/(n+csA5ME]#%Eis^AU*KK?d,maF' );
define( 'SECURE_AUTH_SALT', '#QocGv/S0+S>KAI`)Vip~lBTNmq=z1Y;lBoUL}2ftuxj+-o{0+&[&.A0@(TY3>+A' );
define( 'LOGGED_IN_SALT',   '.&%1HTwvXH<a%X 2pNpV1.1c?3*-Ug(Z1)Cg}o,v2eaahBL25O@E8pCqAfW!{UL,' );
define( 'NONCE_SALT',       'w>[f!MFlkb,0$ gw]~C7tU-H&*P!m*,8#qf+&;0~cGE+T=?^I (d?fhJElI>.RF%' );

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
