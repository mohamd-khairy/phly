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
define( 'DB_NAME', 'pencilpr_landing' );

/** MySQL database username */
define( 'DB_USER', 'pencilpr_landing' );

/** MySQL database password */
define( 'DB_PASSWORD', 'landing' );

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
define( 'AUTH_KEY',         'Nq}a{k466M~}i%!bJWOIf27cbZO&{q@.p2^T(u}_RN{0fh)%fQr.(7mjaC ^ZF^C' );
define( 'SECURE_AUTH_KEY',  '5`SWp.N%>MU_cg|(mHy39h6) [a|^pvEGy#B{s$1`{#jl|C;-l|>(1N]<ns)7=_N' );
define( 'LOGGED_IN_KEY',    '9Kv3HaSdKvP$,0hd.A?C(ON$;NfbELb &]1^<Rx~`D3qJ!1sXqEDIN6Eo;CsJ-AY' );
define( 'NONCE_KEY',        '2-Pf-OITh}0+_kA~$;kVqJW*U6rio{Cda$bD.Y1sY_i4ul!+%P&*G@[xGo!hPW!n' );
define( 'AUTH_SALT',        '#I;ef ExeiB3ZH= ;7OIgdd(~.9h5O-S8MK4gTUY/`mpTow8m,k}<+rY-coJPHNW' );
define( 'SECURE_AUTH_SALT', 'T8Zb_nC?s+<Ea>~U<s[4=m=TN& .:Dap5(>wvrE[|>06Q0lLYQ1SqXWf7%u&19_0' );
define( 'LOGGED_IN_SALT',   'YZ2W<0H6jL)[Y]>f`1lwgX6|BnvkCd#OF!z08(7n#);a^iSCpi/: uB$mXH9!z$H' );
define( 'NONCE_SALT',       'EST&|f:;-B/Q{Qfivg~}8i3x6&<Z1L)LPT9XUCev{,$/m3>Ksg/5Rs@Lcj[ukR|A' );

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
