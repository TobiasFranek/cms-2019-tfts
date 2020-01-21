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
define( 'DB_NAME', 'db_alex' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

/** MySQL hostname */
define( 'DB_HOST', '127.0.0.1' );

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
define( 'AUTH_KEY',          'yuJ.h9HF{1.@>vZAcz76p|w8NLRc|bN.t9_4kEk-QnL$1=`{{_zS57CxkBdzN4j=' );
define( 'SECURE_AUTH_KEY',   'Q`z-poAfJk%~;Xrq`QdaHmmNK9&,PzoA/@;Yi1[9Qz]~TRPyuJAo:-yDY<Y&zU>q' );
define( 'LOGGED_IN_KEY',     'O)i6TI~W%rP3K@o^YbBT3W@{./qU@eB4v<jBK<^T8[-+3s4M8WA;tfUDqSl1rM~U' );
define( 'NONCE_KEY',         '~.fY!uQO`CL-7[nDD=Qq^EOH7B3O44QBKW-9NJdh{U_z{GF_cdSPNU`k=`uf(rvs' );
define( 'AUTH_SALT',         'FX:]V^nBq0iu9!mkinR4 az:aYM+$Onyn7D(L(YPN3to??2TyuH,r^cEIH(BU[6U' );
define( 'SECURE_AUTH_SALT',  'H65ml2l)``P!q)%wLy8VuntKfSB,ra<5=yw>O%KuV>w&M E9q5dPjvYW>@YD2V$%' );
define( 'LOGGED_IN_SALT',    'hwl_M$V3VK,g ]9ozZD?S*H2,xne7SjEg)Il5[OeC)DQk*GTGY+x}(Elb3-8|Ano' );
define( 'NONCE_SALT',        '(`feKETN;)aDYN/gKv2k9`fQTvQCK3=+Q_O(3_9&F}tS`KWs>T#H-u; *Ggr{ucT' );
define( 'WP_CACHE_KEY_SALT', 'El9jUc9M.TXG^s?_B28yQs-xNxnoiHG0MOnj7t> hivoxk;Bf{a,9]7+5[nEejr7' );

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';




/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
