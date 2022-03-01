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
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'assurance' );

/** Database username */
define( 'DB_USER', 'assurance' );

/** Database password */
define( 'DB_PASSWORD', 'NETdesign@2021' );

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
define( 'AUTH_KEY',         'NO)@Yk`,g*g!C5xbqK5zb:&tl.J~wazvZ*+9 +F%Px0!#t5vrGbK]G_ETIZLZyG)' );
define( 'SECURE_AUTH_KEY',  '}CxW9qgf~HjGiU)b^F3]A77n-lHm@tcXH^;gPFj,C3Y4A{%xc+=2%Tqb:TCcRni+' );
define( 'LOGGED_IN_KEY',    'k[[;P%V2:y:q9Dt5=5~qh4U rdPn4Yx{eo[){K2Q(*6 BFST>hnlVB-/>%EW2Q}R' );
define( 'NONCE_KEY',        'f,u*2.lwU3BRu_A]%M,S#;61#L5-nlE{Dlf56lFWSt>XGT3{Bv2kBBvCC:tpLf1m' );
define( 'AUTH_SALT',        '%N1X,parH5t1mW~iOFR}[cpC0^$`-v t!g7vqeP%,e:VF%$:1mRDkdI%$7+X2(!-' );
define( 'SECURE_AUTH_SALT', '5DJ ehi8}>$O?aNnfaysS(L8> ^kj:0%G$J94:?O`?W?L BNtK4v(-!HY`|dl|Oa' );
define( 'LOGGED_IN_SALT',   'U21* .=hrQbzx^o0V[%Sx/v@6$7&{%A83;SQ<?~pKr>f}/LQ-/fzNcP{^2OuNnYg' );
define( 'NONCE_SALT',       'mBfj4JkD`0NjlX:q2$00D,>Hv<5,mK+0 X1jPxp~DXK Xp5)CNli`Pb`e-[TB;<t' );

/**#@-*/

/**
 * WordPress database table prefix.
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

/* Add any custom values between this line and the "stop editing" line. */



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
