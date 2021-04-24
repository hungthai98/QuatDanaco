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
define( 'DB_NAME', 'qua34580_danaco' );

/** MySQL database username */
define( 'DB_USER', 'qua34_danaco' );

/** MySQL database password */
define( 'DB_PASSWORD', 'Danaco@123@@' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost:3306' );

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
define('AUTH_KEY', 'm@W6wkeN]O5-9dn3E%h[A%:]6VdY&24j:5_IQ6%n&+ge5]#(qR9ko3/Bk[V0KR(_');
define('SECURE_AUTH_KEY', 'l&8ln)_2bvJ#:Qu1g9E;9EMdz!55nTQ[z%R|qJ7*r~8F2g9182P7&BKig&Of]%KB');
define('LOGGED_IN_KEY', '_!)ZmE~2Cnd61j+49|)DtHg35wi_9;*_A;9LCe*;#ZfM6d9o86YQKysf7j]xnfU0');
define('NONCE_KEY', '21KA5v0-wULcef#:6ltk4sR8@@3VLb/9|4F_31#7A76m[@*3ep0112V36Kkkw22h');
define('AUTH_SALT', 'w@36YfCrT7/1(Rs&i0[V2a1jXQ*et;9%X@(v&e*&r!hw;uu6E@-9:A7(G05*Yix#');
define('SECURE_AUTH_SALT', 'duDd79-z0]|94s32t6a-Sgi~6Y7+6[t6Z@4Ue@XH!!/eT7*;9S7%3JI9t@fL2W7M');
define('LOGGED_IN_SALT', '6eDdy4~Y2~aqlc*1%2NA*ZZL3Q12o7!E1|(FEO2[9Q[0@M3481e24373moKHm2s6');
define('NONCE_SALT', '~onmMMFIPx_zrIUqo2/M;(;euXK&N@Nt/R*Gq9%6/L7~6Z5/jPW!8:bXgbv63oBn');

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'olJl4U_';


define('WP_ALLOW_MULTISITE', true);

define( 'DISABLE_WP_CRON', true );
/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
