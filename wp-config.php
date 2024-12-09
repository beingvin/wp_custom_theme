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
define( 'DB_NAME', 'custom_theme' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', '' );

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
define( 'AUTH_KEY',         ':@*yUCUkO!,b?XAHB1&=:mCAh*PjB?JLcQ~zD8iM:q7&9x{)fMN7i.W7:@?PV,EW' );
define( 'SECURE_AUTH_KEY',  'K4Wb^)9k);BIkgQRmN9=_Pl*ygEwn}=K-.}4ITIvg+:H+M9IlJ#H6t/$#=mVm*_N' );
define( 'LOGGED_IN_KEY',    '5@G}Sc;0qb|-);j$TVdj*Mp34*(xMa:V:p^Nm}u[vs-8*E5lL-*~G9@qx1lX@1ol' );
define( 'NONCE_KEY',        'NYM+9&eat3{@mC4.IctFQdBLl(88[cg$R%uJRuL%sDquAI!0ioVo4^NlAORGQ(Jz' );
define( 'AUTH_SALT',        '$[G#t+Vak]?>_2V5<[VW/(T8rK}WzK#dhvp``A!FWYJ!-Ai>:wn_RzL_m`3O%)r/' );
define( 'SECURE_AUTH_SALT', 'd#&3Wa?Cn]~_#0qQl3<6=f`8?wJ&5D`g0qV{XPd8[+Te8G_^j=JVHJ `MCyt{k1*' );
define( 'LOGGED_IN_SALT',   'qYmqANpn< <f{>ghTPfCQ(f~n:,{f}hLz.)Lhznl7,)B&.%tI[*{nVm]>g@R*LH+' );
define( 'NONCE_SALT',       'W,WS.<#rF/UI)c`Rv&y4+a,b*+tNi|V26.4s ZbtUYOhE)XVE!o7G.Aux!UAr*>[' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 *
 * At the installation time, database tables are created with the specified prefix.
 * Changing this value after WordPress is installed will make your site think
 * it has not been installed.
 *
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/#table-prefix
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
