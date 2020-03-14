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
define( 'DB_NAME', 'sundaypractice' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', 'root' );

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
define( 'AUTH_KEY',         '29y&#C?I64DUCauJ#+,8^&YMCff):Y+y]H6ONoKrReX%=u|kb:[#aD|$w:Tn]uf5' );
define( 'SECURE_AUTH_KEY',  'PwSX1!?t[A0:%d{s70![8!ws`vyT4IjPA1K}?ZEV0T^]sL1=Z=.e-$1}v}Yu>0B&' );
define( 'LOGGED_IN_KEY',    'ok&_fYhnJKqjttnRRo{&!.?*0<`^vQ5W?knQZNj_>=Ng:#;K21Tnx_wS|n*YZ1Ft' );
define( 'NONCE_KEY',        'Zw>brx+<h_yA5wNLH%J|2{svGD9|hf,s$E?b<>;,@hyVS&y5UF!)f[8=k+CjbWp9' );
define( 'AUTH_SALT',        'gv8)hX@+AEAqNPwv-ie|lO[{:lu@Hk(HdE&R?j^lJkb$t`NO6`;%_ePh%DV.*p+<' );
define( 'SECURE_AUTH_SALT', '3[dTds<[~~rBKMNn:Y3T^!31Z:dnHssC/lI<D@&.kY3@i3:|>vsj,gi=#{}Ywffp' );
define( 'LOGGED_IN_SALT',   '{iF#!MZM)U%qXHJBz6EpR/C)R2~sSJs)Q/sZEftEbFvdb]k[j6[Wh/zJS0_:LqC!' );
define( 'NONCE_SALT',       'qO.ghU-xe36Uye,l4}{@[`;eWptw?An1r.UXRm84ka,fnZhU}+4?Mo80wHZt-=J>' );

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
