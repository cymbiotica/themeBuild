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
define( 'DB_NAME', 'theme1' );

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
define( 'AUTH_KEY',         '(qUyZ_aYcR8-]8x&r>~U|4c}$Z6HK*9ve{vb/RUi:dgG^mx-Rt_^g6N!=e~Q^<jP' );
define( 'SECURE_AUTH_KEY',  'o.ER-Nq0%EbQ/D3vBx%gKRRfP}h*@C*mDUME0Xzw}d(m3p}|&|14lqnNyvoLx^5#' );
define( 'LOGGED_IN_KEY',    '/hgi0L%mU6p&FX$7;Ajru(1!L9q*n=$6C 5SwoR3Sp^WoX14%)[)RsU22jA{#S?_' );
define( 'NONCE_KEY',        '`FzGQ,=gWxyqdi=FKVtXwra~W>w0$SO+T,zu[nq))YsBzkt)-d^[><Ps]sFr!N1l' );
define( 'AUTH_SALT',        'B)Q)O4KE[~D(A&,9!X.E9y!Xqp[6^Fysy)pNmFud0!Tp1%@XL_uKNR0H{10s(wbB' );
define( 'SECURE_AUTH_SALT', '~X>CAG{s2t-VEuJL|bTO/<9#8V7}.:n5m#Q}8De-%XW.7 L`nn*O`a+;g?>m q3g' );
define( 'LOGGED_IN_SALT',   '-cjx<$XoA1ya;_i6)QX5GDf,)vszMjcY zGTh,D[pnXsCCJ,)$!rKzI6C,VyS)Mg' );
define( 'NONCE_SALT',       'mp :/UM^yrB,5)s8F/.K5P#;3;?z>mnRjEB#mv2E>4uv6S?@x+`eXJ*ISFL__jh:' );

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
