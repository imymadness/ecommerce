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
define( 'DB_NAME', 'raffy' );

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
define( 'AUTH_KEY',         'M@BvGy9/f,8A<eLNPm66I5tu/KKcyKJhvvrBN2g(cERw:Fd7bEA_#~_wa_iIp<2X' );
define( 'SECURE_AUTH_KEY',  '%Mi34#ppcyGz<<.,1Q*mz= {q<I,t]4CngJ.)/ZV---!gAT*#<fKw/Dy4a2LJ9F/' );
define( 'LOGGED_IN_KEY',    'lt!ON:16opxA8gA3jl]Evv9A.:9>z</!Sh*o|J_GSKm}Y:SB{qHQcD,&_a,qulK}' );
define( 'NONCE_KEY',        'Ov;6tv$ffdWX68zrm5V7WM]}@sGjf:y<_;zBeLHL[<*P&GH$5Qff(Nh(w79M,*op' );
define( 'AUTH_SALT',        '6K>+ sVZ:#b1CvTI/yv{*r1]O1>M}9pm^#*zo,Fm_R22P_/*gFBqU!:IS,jQ%.gZ' );
define( 'SECURE_AUTH_SALT', '%|x>R?J{m6C{WyE>mup,1Uin}5lwE1;)C siF}k~qvk)Y`DPp!?<|CjdUnD_]SBq' );
define( 'LOGGED_IN_SALT',   '^4n*lC/-$lN*O64w6vY6E:Q{r$z).L><P`ScpaYoW%|<:,FR/x@-)xygnBF:FZOJ' );
define( 'NONCE_SALT',       '2n-w<TKG!Xm)b#7<fx@kF13+;5aGV~K-34apKdPF|1mM)HGjH~o2+QZL<GS2V=$A' );

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
