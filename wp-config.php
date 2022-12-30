<?php
define( 'WP_CACHE', true );
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
define( 'DB_NAME', 'impress2_wordpress' );

/** MySQL database username */
define( 'DB_USER', 'impress2_wp' );

/** MySQL database password */
define( 'DB_PASSWORD', 'Smileraj58627#' );

/** MySQL hostname */
define( 'DB_HOST', 'mysql' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',          'Z.Rlhy2]7#g t]Sb4<9_yNNYwg7MIp4>X%altHlMLux.JPKRf;}PHFW;[ H$B|;Y' );
define( 'SECURE_AUTH_KEY',   'l+#R/ Ib$}xwaT*8Dz0=Q&q<G)B8D&fwlcQ]K=Fe^>$ B;h2(f%sAmOG%5sx6WG[' );
define( 'LOGGED_IN_KEY',     '1h%[9jh|76UpZoI2KG`Q|PIsaYy5q/Yp25uA{4I<i,^#lJy7K~/F7X8qpo7.*xfv' );
define( 'NONCE_KEY',         'FWUB<n(AT8J.xm=0KU:e3Uc9}F+CbZf(L^*FlTyfl;L5nGV_C1Kn 7A:~8yI(1(!' );
define( 'AUTH_SALT',         'QS77pz=}I4UF2cfG>3g9K^aSXux<fC%Zq:3u]Q/q ]g1Oi-ZHGOJ0845V=X*F-4j' );
define( 'SECURE_AUTH_SALT',  'QxtTNo!8MpHlPr}n!XM!FUN0[3{ME|4X[94zdm{/8j^dlC1!:1Q;J1xcWAtg,#)P' );
define( 'LOGGED_IN_SALT',    '|h(voR=_tq)>jW]!vs VM[*@#N-}wKTt(!G#jchRv<(%u(@J-zY%X=Db/bv~CMUc' );
define( 'NONCE_SALT',        'RpVC[zArH7;LwYH?dgY`_52oy-$pRa=Q,C=YT{d1|8C<P<64>V!yoHs2n8b[GvK>' );
define( 'WP_CACHE_KEY_SALT', 'N$ 1|44lH[)z6K:avB)X WcD.|PKb<RbK(8{Hqbh#jC HNlw(x1+nkdZvO)[EUtN' );

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';




define( 'WP_AUTO_UPDATE_CORE', false );
/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
