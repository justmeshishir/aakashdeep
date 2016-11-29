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
define('DB_NAME', 'aakashdeep');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', '');

/** MySQL hostname */
define('DB_HOST', 'localhost');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8mb4');

/** The Database Collate type. Don't change this if in doubt. */
define('DB_COLLATE', '');

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'wHG^qrblR{@PFXpV0-FA7KRoY}K@I`$~7mfsx]Yer+^%+hE @)a SPq`s/N0bmd*');
define('SECURE_AUTH_KEY',  'IS6x+aGZ_M(/YbfjD|La3`7lM#$J!_T%@7,p(<i|8n65v)H,XJwkayGS+0 `d6nR');
define('LOGGED_IN_KEY',    'Dr^9YMkS*}5Xk,C/(YtCcDHM6|su3iDb.gMM/q,N_-vFO qok#g9eQ3Z[Fp=mNmW');
define('NONCE_KEY',        'SD8:3=7gy_v1{Qh9v)^3ZCAn7>ytr|A/~]tg#X;E{GQe[<,khrdX/ixVPkTE/DOJ');
define('AUTH_SALT',        'b?;,v7JQ`;#llYeI*atDn91W&:R}/[]m@#t9lb,[a*vU,AYfAs~3Fo/nc&-Ewv4R');
define('SECURE_AUTH_SALT', 'Bh>$;IZolm2{~Y8P-#@!WjOTS1g`L<QwK1{4;xHqr=a*wCmZZKZ_U*{n7Pz1TXnZ');
define('LOGGED_IN_SALT',   'vM@L:6KuR&lMpPO32`TkoV8s#h{$r^$Q!mM-VBgUxAw,<vb*Lw<~6^>B;HFQz7ra');
define('NONCE_SALT',       '3l1,)pO&^tv3n A+kj~no4)LlMA2PA5tNk-Jto#BX6ii>@!Qob:=~<`Tc_mBWT!N');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'ad_';

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
define('WP_DEBUG', false);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
