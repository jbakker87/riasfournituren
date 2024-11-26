<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the web site, you can copy this file to "wp-config.php"
 * and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * Database settings
 * * Secret keys
 * * Database table prefix
 * * Localized language
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'wpdb_riasfournituren' );

/** Database username */
define( 'DB_USER', 'licknalevin2' );

/** Database password */
define( 'DB_PASSWORD', '0f4wFF9h5Q1adBQS' );

/** Database hostname */
define( 'DB_HOST', 'localhost:3306');

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

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
define( 'AUTH_KEY',          'POr8^joOr#QKZwqAf3`/,Jhq{t_g4Z18|^9l~2e??0jfHAwvD1M,=`.Zc068PCnE' );
define( 'SECURE_AUTH_KEY',   '^_F<*5wmp9J4[CwZ6L}nAW||qJs iX+J2g E/wBCQ8-[H]L4yrPOxRLV0*$}z0Dy' );
define( 'LOGGED_IN_KEY',     'Ek5,!50x(qR7;D@tPM2=[6hVsp,Yv/JcoGCN-nKUs,k.7Ze~$.,Pnp%`;hkORCOb' );
define( 'NONCE_KEY',         '[L77PG=>Y>O^=ZE$eWOVS+,[fO{vihf!)vg-@ju88+d!`c6V Lk,gEW-iX2NH5%m' );
define( 'AUTH_SALT',         '4u{8&If>kDE{cj})900:b*qL#DM.eG&UYz7oE{j _0l`r}dk,_Ayh#OC)iW8npMS' );
define( 'SECURE_AUTH_SALT',  ':Zd(<s~jx-P?u!nZtiFHhAhR>kqu5[v<^#tGxvWII!KrNP~5rZ5[*EMD/K<1bM?8' );
define( 'LOGGED_IN_SALT',    'z<m8a*W1b+Bnr?tUNMQVs)t5E*|>i*yP:/W_u0: ~Y%#f;p[DiA?<.^r-ru~3uIG' );
define( 'NONCE_SALT',        'DKT+zqnzqc+*4J^[N!i$B aGx[2OyoT:>jj6aG[Be[#Ta[5d=+-cqh8@#82dI^&2' );
define( 'WP_CACHE_KEY_SALT', '52`}j.W#OuJdH?5Y7/)DXg4 1eDNc;&pRLlV?VA<cMPGM&bPG{c@%$CxkdgKS~u%' );


/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';


/* Add any custom values between this line and the "stop editing" line. */



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
if ( ! defined( 'WP_DEBUG' ) ) {
	define( 'WP_DEBUG', true );
}

define( 'WP_ENVIRONMENT_TYPE', 'local' );
/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
